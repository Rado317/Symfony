<?php

namespace App\Controller;

use App\Repository\RevendicationRepository;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        RevendicationRepository $revendicationRepo,
        CategorieRepository $categorieRepo,
        Request $request
    ): Response {
        $categorieId = $request->query->get('categorie');
        $statut = $request->query->get('statut');

        $revendications = $revendicationRepo->findByFilters($categorieId, $statut);
        $categories = $categorieRepo->findAll();

        return $this->render('home/index.html.twig', [
            'revendications' => $revendications,
            'categories' => $categories,
            'selectedCategorie' => $categorieId,
            'selectedStatut' => $statut,
        ]);
    }
}