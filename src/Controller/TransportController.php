<?php
// src/Controller/TransportController.php
namespace App\Controller;

use App\Entity\Transport;
use App\Form\TransportType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\TransportRepository;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;


class TransportController extends AbstractController
{
    // Route for showing all transports
    #[Route('/transport', name: 'app_transport_index', methods: ['GET'])]
public function index(Request $request, TransportRepository $transportRepository): Response
{
    $filterType = $request->query->get('type'); // e.g., "bus", "car", "van"

    if ($filterType) {
        $transports = $transportRepository->findByType($filterType);
    } else {
        $transports = $transportRepository->findAll();
    }

    return $this->render('transport/index.html.twig', [
        'transports' => $transports,
        'filterType' => $filterType
    ]);
}



#[Route('/transport/new', name: 'app_transport_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
{
    $transport = new Transport();
    $form = $this->createForm(TransportType::class, $transport);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('image')->getData();

        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                // handle error
            }

            $transport->setImage($newFilename);
        }

        $entityManager->persist($transport);
        $entityManager->flush();

        return $this->redirectToRoute('app_transport_index');
    }

    return $this->render('transport/new.html.twig', [
        'form' => $form->createView(),
    ]);
}

    #[Route('/{id}', name: 'app_transport_show', methods: ['GET'])]
    public function show(Transport $transport): Response
    {
        return $this->render('transport/show.html.twig', [
            'transport' => $transport,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_transport_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Transport $transport, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
{
    $form = $this->createForm(TransportType::class, $transport);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('image')->getData();

        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                // handle exception if something happens during file upload
            }

            $transport->setImage($newFilename);
        }

        $entityManager->flush();

        return $this->redirectToRoute('app_transport_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('transport/edit.html.twig', [
        'transport' => $transport,
        'form' => $form->createView(),
    ]);
}

    #[Route('/{id}', name: 'app_transport_delete', methods: ['POST'])]
    public function delete(Request $request, Transport $transport, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $transport->getId(), $request->get('_token'))) {
            $entityManager->remove($transport);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_transport_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/transport/statistics', name: 'app_transport_statistics')]
public function statistics(TransportRepository $transportRepository): Response
{
    $stats = $transportRepository->countByType();

    // Prepare data for Chart.js
    $labels = [];
    $data = [];

    foreach ($stats as $stat) {
        $labels[] = $stat['type'];
        $data[] = $stat['count'];
    }

    return $this->render('transport/statistics.html.twig', [
        'labels' => json_encode($labels),
        'data' => json_encode($data),
    ]);
}
}
