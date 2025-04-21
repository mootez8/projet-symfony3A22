<?php

namespace App\Controller;

use App\Entity\Trajet;
use App\Form\TrajetType;
use App\Repository\TrajetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\QrCodeService;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;



#[Route('/trajet')]
final class TrajetController extends AbstractController
{
    #[Route(name: 'app_trajet_index', methods: ['GET'])]
    public function index(Request $request,TrajetRepository $trajetRepository): Response
    {
        $departure = $request->query->get('departure');
    $destination = $request->query->get('destination');

    $trajets = $trajetRepository->findBySearchCriteria($departure, $destination);

    return $this->render('trajet/index.html.twig', [
        'trajets' => $trajets,
        'departure' => $departure,
        'destination' => $destination,
    ]);
    }

    #[Route('/front', name: 'app_trajet_index1', methods: ['GET'])]
    public function index1(Request $request, TrajetRepository $trajetRepository, QrCodeService $qrCodeService): Response
    {
        $departure = $request->query->get('departure');
        $destination = $request->query->get('destination');
    
        $trajets = $trajetRepository->findBySearchCriteria($departure, $destination);
       
    
        foreach ($trajets as $trajet) {
            $data = "Trajet ID: {$trajet->getId()}\nDeparture: {$trajet->getDeparture()}\nDestination: {$trajet->getDestination()}\nPrice: {$trajet->getPrice()}";
    
            if ($trajet->getTransport() && $trajet->getTransport()->getImage()) {
                $data .= "\nImage: /uploads/" . $trajet->getTransport()->getImage();
            }
    
            
        }
    
        return $this->render('trajet/indexFront.html.twig', [
            'trajets' => $trajets,
            
            'departure' => $departure,
            'destination' => $destination,
        ]);
    }

    #[Route('/new', name: 'app_trajet_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, QrCodeService $qrCodeService): Response
{
    $trajet = new Trajet();
    $form = $this->createForm(TrajetType::class, $trajet);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($trajet);
        $entityManager->flush();

        // Now generate QR code and save it
        $data = "Trajet ID: {$trajet->getId()}\nDeparture: {$trajet->getDeparture()}\nDestination: {$trajet->getDestination()}\nPrice: {$trajet->getPrice()}";

        if ($trajet->getTransport() && $trajet->getTransport()->getImage()) {
            $data .= "\nImage: /uploads/" . $trajet->getTransport()->getImage();
        }

        $qrCodeService->generateAndSave($data, "trajet_{$trajet->getId()}.png");

        return $this->redirectToRoute('app_trajet_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('trajet/new.html.twig', [
        'trajet' => $trajet,
        'form' => $form,
    ]);
}

    #[Route('/statistics', name: 'app_trajet_statistics')]
public function statistics(TrajetRepository $trajetRepository): Response
{
    $departures = $trajetRepository->countByDeparture();
    $destinations = $trajetRepository->countByDestination();

    return $this->render('trajet/statistics.html.twig', [
        'departureLabels' => json_encode(array_column($departures, 'label')),
        'departureCounts' => json_encode(array_column($departures, 'count')),
        'destinationLabels' => json_encode(array_column($destinations, 'label')),
        'destinationCounts' => json_encode(array_column($destinations, 'count')),
    ]);
}

    #[Route('/{id}', name: 'app_trajet_show', methods: ['GET'])]
    public function show(Trajet $trajet=null): Response
    {
        if (!$trajet) {
            throw $this->createNotFoundException('Trajet not found.');
        }
    
        return $this->render('trajet/show.html.twig', [
            'trajet' => $trajet,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_trajet_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Trajet $trajet, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TrajetType::class, $trajet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_trajet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('trajet/edit.html.twig', [
            'trajet' => $trajet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_trajet_delete', methods: ['POST'])]
    public function delete(Request $request, Trajet $trajet, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$trajet->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($trajet);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_trajet_index', [], Response::HTTP_SEE_OTHER);
    }


    
}
