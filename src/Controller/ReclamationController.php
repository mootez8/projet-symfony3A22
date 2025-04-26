<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\TranslateService; 

#[Route('/reclamation')]
final class ReclamationController extends AbstractController
{
    
    #[Route(name: 'app_reclamation_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    // Créer une nouvelle réclamation
    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setUser($this->getUser());
            $entityManager->persist($reclamation);
            $entityManager->flush();
            $this->addFlash('success', 'Réclamation envoyée avec succès.');
           
        }

        return $this->render('reclamation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Afficher les détails d'une réclamation
    #[Route('/{id_reclamation}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    // Modifier une réclamation
    #[Route('/{id_reclamation}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_reclamation_index');
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    
    #[Route('/{id_reclamation}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId_reclamation(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_index');
    }




    #[Route('/statistiques', name: 'app_reclamation_statistiques')]
    public function statistiques(ReclamationRepository $reclamationRepository): Response
    {
        // Récupérer les réclamations groupées par catégorie
        $statistiques = $reclamationRepository->getStatistiquesParCategorie();
    
        // Affichage des statistiques
        return $this->render('reclamation/statistiques.html.twig', [
            'statistiques' => $statistiques,
        ]);
    }



    #[Route('/{id_reclamation}', name: 'app_reclamation_show', methods: ['GET'])]
public function show_statistique(ReclamationRepository $reclamationRepository, $id_reclamation): Response
{
    $reclamation = $reclamationRepository->find($id_reclamation);
    if (!$reclamation) {
        throw $this->createNotFoundException('La réclamation avec l\'ID ' . $id_reclamation . ' n\'a pas été trouvée.');
    }

    return $this->render('reclamation/show.html.twig', [
        'reclamation' => $reclamation,
    ]);
}


#[Route('/reclamation/search', name: 'app_reclamation_search', methods: ['GET'])]
public function search(Request $request, ReclamationRepository $reclamationRepository): Response
{
    $search = $request->query->get('search');

    if ($search) {
        $reclamations = $reclamationRepository->searchByNomOrEmail($search);
    } else {
        $reclamations = $reclamationRepository->findAll();
    }

    return $this->render('reclamation/index.html.twig', [
        'reclamations' => $reclamations,
    ]);
}



#[Route('/{id_reclamation}/translate', name: 'app_reclamation_translate', methods: ['GET'])]
public function translate(ReclamationRepository $reclamationRepository, TranslateService $translateService, int $id_reclamation): Response
{
    $reclamation = $reclamationRepository->find($id_reclamation);

    if (!$reclamation) {
        throw $this->createNotFoundException('Réclamation introuvable.');
    }

    /// Suppose que tu veux traduire la description
    $contenu = $reclamation->getDescription(); // ou getContenu(), selon ta classe
    $translated = $translateService->translateLongText($contenu, 'fr', 'en');

    return $this->render('reclamation/translated.html.twig', [
        'reclamation' => $reclamation,
        'translated' => $translated,
    ]);
}

    

}
