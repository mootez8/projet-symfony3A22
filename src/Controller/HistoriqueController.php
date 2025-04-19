<?php

namespace App\Controller;

use App\Entity\Historique;
use App\Repository\HistoriqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HistoriqueController extends AbstractController
{
    #[Route('/historique', name: 'app_historique_index', methods: ['GET'])]
    public function index(Request $request, HistoriqueRepository $historiqueRepository): Response
    {
        // Récupérer le terme de recherche à partir de la requête
        $searchTerm = $request->query->get('search');
        
        // Si un terme de recherche est fourni, filtrer les résultats
        if ($searchTerm) {
            $historique = $historiqueRepository->searchByActionOrDetails($searchTerm); 
        } else {
            $historique = $historiqueRepository->findAll();
        }

        // Pagination
        $page = $request->query->getInt('page', 1); // page actuelle
        $limit = 5; // éléments par page
        $totalHistorique = count($historique);
        $offset = ($page - 1) * $limit;

        // Slice the data to get the paginated result
        $historiquePage = array_slice($historique, $offset, $limit);

        $totalPages = ceil($totalHistorique / $limit);

        // Rendre la vue avec les données paginées
        return $this->render('historique/index.html.twig', [
            'historiques' => $historiquePage,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'searchTerm' => $searchTerm,
        ]);
    }
}
