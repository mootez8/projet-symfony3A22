<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;
use App\Service\EmailService; 


#[Route('/reponse')]
final class ReponseController extends AbstractController
{

    private $emailService;

    public function __construct(EmailService $emailService)  // Injection du service d'email
    {
        $this->emailService = $emailService;
    }



    #[Route(name: 'app_reponse_index', methods: ['GET'])]
    public function index(ReponseRepository $reponseRepository): Response
    {
        return $this->render('reponse/index.html.twig', [
            'reponses' => $reponseRepository->findAll(),
        ]);
    }
     #[Route('/new', name: 'app_reponse_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        \App\Repository\ReclamationRepository $reclamationRepository // Injecter le repo
    ): Response {
        $reponse = new Reponse();
    
        $idReclamation = $request->query->get('id_reclamation');
    
        if ($idReclamation !== null) {
            $reponse->setIdReclamation((int)$idReclamation);
        }
    
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $reponse->setDateReponse(new \DateTime()); // Utiliser le nom exact de ton setter
    
            // 🔁 Récupération de la réclamation associée
            $reclamation = $reclamationRepository->find($reponse->getIdReclamation());
    
            if ($reclamation) {
                $reclamation->setEtat('Répondu'); // ✅ Mise à jour de l'état
                $entityManager->persist($reclamation); // 👈 Important
            }
    
            $entityManager->persist($reponse);
            $entityManager->flush(); // ✅ Sauvegarde en base

            // Envoi de l'email à l'utilisateur
            $recipient = $reclamation->getEmail(); // Récupérer l'email de la réclamation
            $subject = 'Réponse à votre réclamation';
            $reponseText = htmlspecialchars($reponse->getReponse(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
            $reponseTextFormatted = nl2br($reponseText);
    
            $body = <<<HTML
            <html>
              <body style="font-family: Arial, sans-serif; color: #333;">
                <p>Bonjour,</p>
    
                <p>Nous avons bien pris connaissance de votre réclamation et notre équipe l’a soigneusement étudiée.</p>
    
                <p><strong>Voici notre réponse :</strong></p>
                <div style="background-color: #f9f9f9; padding: 15px; border-left: 4px solid #4CAF50; margin-bottom: 20px;">
                  $reponseTextFormatted
                </div>
    
                <p>Nous restons à votre disposition pour toute information complémentaire.</p>
    
                <p>Bien cordialement,</p>
                <p style="font-weight: bold;">L’équipe du service client</p>
              </body>
            </html>
            HTML;

            // Appel à la méthode du service EmailService pour envoyer l'email
            $this->emailService->sendResponseEmail($recipient, $subject, $body);
    
            return $this->redirectToRoute('app_reponse_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id_reponse}', name: 'app_reponse_show', methods: ['GET'])]
    public function show(Reponse $reponse): Response
    {
        return $this->render('reponse/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }


    #[Route('/{id_reponse}/edit', name: 'app_reponse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Mettre à jour la date si besoin (si la réponse est modifiée et la date doit être changée)
            $reponse->setDateReponse(new \DateTime());

            // Sauvegarder les changements
            $entityManager->flush();

            return $this->redirectToRoute('app_reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reponse/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id_reponse}', name: 'app_reponse_delete', methods: ['POST'])]
    public function delete(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reponse->getId_reponse(), $request->request->get('_token'))) {
            $entityManager->remove($reponse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reponse_index', [], Response::HTTP_SEE_OTHER);
    }








}
