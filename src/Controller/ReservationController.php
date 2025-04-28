<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use App\Repository\OffreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PdfGeneratorService;


#[Route('/reservation')]
final class ReservationController extends AbstractController
{
    #[Route('/', name: 'app_reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository): Response
    {
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reservation_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, OffreRepository $offreRepository, PdfGeneratorService $pdfGenerator): Response
{
    $reservation = new Reservation();
    $form = $this->createForm(ReservationType::class, $reservation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $reservation->calculateTotalPrice(); 
        $offre = $reservation->getOffre();

        if ($offre) {
            if ($offre->getNbrPlacesDis() < $reservation->getNbrPlaces()) {
                $this->addFlash('error', 'Not enough places available for this offer.');
                return $this->redirectToRoute('app_reservation_new');
            }

            $offre->setNbrPlacesDis($offre->getNbrPlacesDis() - $reservation->getNbrPlaces());
            $entityManager->persist($reservation);
            $entityManager->persist($offre);
            $entityManager->flush();
            
            // Générer le PDF
            $html = $this->renderView('reservation/pdf.html.twig', [
                'reservation' => $reservation,
            ]);
            $pdfContent = $pdfGenerator->generatePdf($html);
            
            // Retourner le PDF à télécharger
            $response = new Response($pdfContent, 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="reservation.pdf"',
            ]);

            // Redirection après le téléchargement du PDF
            $response->send();  // Envoie le PDF et redirige après

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        $this->addFlash('error', 'Offer not found.');
    }

    return $this->render('reservation/new.html.twig', [
        'reservation' => $reservation,
        'form' => $form->createView(),
    ]);
}


    #[Route('/{id}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager, OffreRepository $offreRepository): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nbrPlaces = $form->get('nbr_places')->getData();  // <-- champ corrigé
            $offre = $reservation->getOffre();

            if ($offre) {
                $previousNbrPlaces = $reservation->getNbrPlaces();

                $reservation->setNbrPlaces($nbrPlaces);
                $offre->updateAvailablePlaces($previousNbrPlaces - $nbrPlaces);

                $entityManager->persist($reservation);
                $entityManager->persist($offre);
                $entityManager->flush();

                return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
            }

            $this->addFlash('error', 'Offre non trouvée.');
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->request->get('_token'))) {
            $offre = $reservation->getOffre();
            if ($offre) {
                $offre->setNbrPlacesDis($offre->getNbrPlacesDis() + $reservation->getNbrPlaces());
                $entityManager->persist($offre);
            }

            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/offer/details/{id}', name: 'app_reservation_offer_details', methods: ['GET'])]
    public function offerDetails(int $id, OffreRepository $offreRepository): JsonResponse
    {
        $offre = $offreRepository->find($id);

        if (!$offre) {
            return $this->json(['error' => 'Offer not found.'], 404);
        }

        return $this->json([
            'prix_offre' => $offre->getPrixOffre(),
            'nbr_places_dis' => $offre->getNbrPlacesDis()
        ]);
    }
}
