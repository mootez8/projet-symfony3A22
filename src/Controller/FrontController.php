<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Transport;
use Doctrine\ORM\EntityManagerInterface;



class FrontController extends AbstractController
{
    #[Route('/', name: 'front_home')]
    public function index(): Response
    {
        return $this->render('front.html.twig');
    }
    #[Route('/transports', name: 'app_transports')]
    public function showTransports(EntityManagerInterface $entityManager): Response
    {
        // Fetch all Transport entities along with related Trajet data
        $transports = $entityManager->getRepository(Transport::class)->findAll();

        return $this->render('transport/transports.html.twig', [
            'transports' => $transports
        ]);
    }
}
