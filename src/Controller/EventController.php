<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Historique;
use App\Form\EventType;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Doctrine\ORM\Tools\Pagination\Paginator;

#[Route('/event')]
final class EventController extends AbstractController
{
    #[Route(name: 'app_event_index', methods: ['GET'])]
    public function index(EventRepository $eventRepository, Request $request): Response
{
    
    $pageSize = 3;
    $currentPage = $request->query->getInt('page', 1); 

    // Calcul du début de la requête
    $query = $eventRepository->createQueryBuilder('e')
        ->orderBy('e.dateEvent', 'DESC') 
        ->getQuery();

    // Pagination avec Doctrine
    $paginator = new Paginator($query);
    $paginator->getQuery()
        ->setFirstResult($pageSize * ($currentPage - 1)) 
        ->setMaxResults($pageSize); // Nombre d'éléments par page

    $totalItems = count($paginator); // Nombre total d'événements
    $totalPages = ceil($totalItems / $pageSize); // Nombre total de pages

    return $this->render('event/indexFrontEvent.html.twig', [
        'events' => $paginator,
        'currentPage' => $currentPage,
        'totalPages' => $totalPages,
    ]);
}
    #[Route('/eventBack', name: 'app_event_indexBack', methods: ['GET'])]
    public function indexBack(Request $request, EventRepository $eventRepository): Response
    {
        $searchTerm = $request->query->get('search');
    
        if ($searchTerm) {
            $allEvents = $eventRepository->searchByNameOrLieu($searchTerm);
        } else {
            $allEvents = $eventRepository->findAll();
        }
    
        $page = $request->query->getInt('page', 1); // page actuelle
        $limit =7; // éléments par page
        $totalEvents = count($allEvents);
        $offset = ($page - 1) * $limit;
    
        $events = array_slice($allEvents, $offset, $limit);
    
        $totalPages = ceil($totalEvents / $limit);
    
        return $this->render('event/index.html.twig', [
            'events' => $events,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'searchTerm' => $searchTerm,
        ]);
    }

    #[Route('/new', name: 'app_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //sauvgarder l evenement
            $entityManager->persist($event);
            $entityManager->flush();
            
             // Enregistrement dans la table Historique
                    $historique = new Historique();
                    $historique->setAction('Ajout');
                    $historique->setDateAction(new \DateTime());
                    $historique->setIdEvent($event->getIdEvent());
                    $historique->setDetails('Ajout de l\'événement : ' . $event->getNomEv()); 

                    $entityManager->persist($historique);
                    $entityManager->flush();
            return $this->redirectToRoute('app_event_indexBack', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/new.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }


    #[Route('/{idEvent}', name: 'app_event_show', methods: ['GET'])]
    public function show(Event $event): Response
    {
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }

    #[Route('/{idEvent}/showF', name: 'app_event_showFront', methods: ['GET'])]
    public function showFront(Event $event): Response
    {
        return $this->render('event/showFront.html.twig', [
            'event' => $event,
        ]);
    }

    #[Route('/{idEvent}/edit', name: 'app_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           //modifier l evenement
            $entityManager->flush();
             // Historique de modification
                $historique = new Historique();
                $historique->setAction('Modification');
                $historique->setDateAction(new \DateTime());
                $historique->setIdEvent($event->getIdEvent());
                $historique->setDetails('Événement modifié avec le Nom : ' . $event->getNomEv());
                $entityManager->persist($historique);
                $entityManager->flush();

            return $this->redirectToRoute('app_event_indexBack', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/edit.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{idEvent}', name: 'app_event_delete', methods: ['POST'])]
    public function delete(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getIdEvent(), $request->getPayload()->getString('_token'))) {

            // Historique avant suppression 
                $historique = new Historique();
                $historique->setAction('Suppression');
                $historique->setDateAction(new \DateTime());
                $historique->setIdEvent($event->getIdEvent());
                $historique->setDetails('Le Nom de l\'Événement supprimé  : ' . $event->getNomEv());
                $entityManager->persist($historique);

            //supprimer l evenement
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_event_indexBack', [], Response::HTTP_SEE_OTHER);
    }
} 