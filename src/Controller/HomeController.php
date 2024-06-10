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
        $query = $_POST['query'] ?? null;
        $query = trim($query);
        $query = htmlentities($query, ENT_QUOTES, 'UTF-8');
        if ($query) {
            $results = $homeManager->search($query);
        } else {
            $results = $homeManager->select5Last();
        }
        return $this->twig->render('Home/index.html.twig', ['results' => $results, 'query' => $query]);
    }
}
