<?php

namespace App\Controller;

use App\Entity\Sponsor;
use App\Form\SponsorType;
use App\Repository\SponsorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
#[Route('/sponsor')]
final class SponsorController extends AbstractController
{
    #[Route(name: 'app_sponsor_index', methods: ['GET'])]
    public function index(Request $request, SponsorRepository $sponsorRepository): Response

    {
        $searchTerm = $request->query->get('search');

        if ($searchTerm) {
            $allSponsors = $sponsorRepository->searchByNameOrEmail($searchTerm); // Assurez-vous de créer cette méthode de recherche dans le repo
        } else {
            $allSponsors = $sponsorRepository->findAll();
        }
    
        $page = $request->query->getInt('page', 1); // page actuelle
        $limit = 5; // éléments par page
        $totalSponsors = count($allSponsors);
        $offset = ($page - 1) * $limit;
    
        $sponsors = array_slice($allSponsors, $offset, $limit);
    
        $totalPages = ceil($totalSponsors / $limit);
    
        return $this->render('sponsor/index.html.twig', [
            'sponsors' => $sponsors,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'searchTerm' => $searchTerm,
        ]);
    }

    #[Route('/new', name: 'app_sponsor_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $em): Response
{
    $sponsor = new Sponsor();
    $form = $this->createForm(SponsorType::class, $sponsor);

    $form->handleRequest($request);
    
    if ($form->isSubmitted()) {
        if ($form->isValid()) {
            try {
                $em->persist($sponsor);
                $em->flush();
                
                $this->addFlash('success', 'Sponsor créé !');
                return $this->redirectToRoute('app_sponsor_index');
                
            } catch (\Exception $e) {
                // Vérifie si c'est une violation de contrainte d'unicité
                if (str_contains($e->getMessage(), 'UNIQUE constraint failed') || 
                    str_contains($e->getMessage(), 'Duplicate entry')) {
                    $this->addFlash('error', 'Ce nom de sponsor existe déjà.');
                } else {
                    $this->addFlash('error', 'Une erreur est survenue: '.$e->getMessage());
                }
            }
        }
    }

    return $this->render('sponsor/new.html.twig', [
        'form' => $form->createView(),
    ]);
}

    #[Route('/{idsponsor}', name: 'app_sponsor_show', methods: ['GET'])]
    public function show(Sponsor $sponsor): Response
    {
        return $this->render('sponsor/show.html.twig', [
            'sponsor' => $sponsor,
        ]);
    }

    #[Route('/{idsponsor}/edit', name: 'app_sponsor_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Sponsor $sponsor, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sponsor/edit.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form,
        ]);
    }

    #[Route('/{idsponsor}', name: 'app_sponsor_delete', methods: ['POST'])]
    public function delete(Request $request, Sponsor $sponsor, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sponsor->getIdsponsor(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($sponsor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
    }
}
