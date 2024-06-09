<?php

namespace App\Controller;

use App\Model\HomeManager;
use Exception;

class HomeController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();
        $this->homeManager = new HomeManager();
    }
    public function index(): string
    {
        $homeManager = new HomeManager();

        // Vérifie si une requête de recherche a été effectuée
        $query = $_GET['query'] ?? null;

        try {
            if ($query) {
                // Recherche des résultats basés sur la requête
                $results = $homeManager->search();
            } else {
                // Sélectionne les 5 derniers résultats
                $results = $homeManager->select5Last();
            }

            // Rend le template avec les résultats
            return $this->twig->render('Home/index.html.twig', ['results' => $results]);
        } catch (Exception $e) {
            // Gestion des erreurs
            return $this->twig->render('Home/index.html.twig', ['error' => $e->getMessage()]);
        }
    }
}
