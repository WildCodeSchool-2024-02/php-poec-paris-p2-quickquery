<?php

namespace App\Controller;

use App\Model\UserManager;

class ContactController extends AbstractController
{
    private array $user = [];

    public function __construct()
    {
        parent::__construct();

        if (isset($_SESSION['id'])) {
            $userManager = new UserManager();
            $this->user = $userManager->selectOneById($_SESSION['id']);
        }
    }

    public function index(): string
    {
        return $this->twig->render('Contact/index.html.twig', [
            'user' => $this->user,
        ]);
    }
}
