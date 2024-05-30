<?php

namespace App\Controller;

use App\Model\HomeManager;

class HomeController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        // require_once '/../Model/HomeManager.php';
        $queries = new HomeManager();
        $lastQueries = $queries->select5Last();
        // var_dump($lastQueries);
        return $this->twig->render('Home/index.html.twig', ['lastQueries' => $lastQueries]);
    }
}
