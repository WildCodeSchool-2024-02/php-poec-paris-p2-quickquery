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

        $queries = new HomeManager();
        $lastQueries = $queries->select5Last();

        return $this->twig->render('Home/index.html.twig', ['lastQueries' => $lastQueries]);
    }
}
