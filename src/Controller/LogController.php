<?php

namespace App\Controller;

use password_hash;
use session_start;
use App\Model\UserManager;

class LogController extends AbstractController
{
    /**
     * Add a new inscription
     */

    public function processLogin(): ?string
    {

        $errors = [];
        $userManager = new UserManager();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $errors = $this->validate($email, $password);

            if (empty($errors)) {
                $user = $userManager->getByEmail($email);

                session_start();
                $_SESSION['user'] = $user ;

                return $this->twig->render(
                    'Home/index.html.twig',
                    [
                        'session' => $_SESSION,
                        'user' => $user,
                    ]
                );
            }
        }

        return $this->twig->render(
            'User/Login.html.twig',
            [
               'errors' => $errors,

            ]
        );
    }

    public function logout()
    {
        session_unset();
        header('Location: /');
    }


    private function validate($email, $password)
    {
        $errors = [];
        $userManager = new UserManager();
        $user = $userManager->getByEmail($email);

        if (empty($email)) {
            $errors['email'] = 'L\'email est requis.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'L\'email n\'est pas valide.';
        }

        if (empty($password)) {
            $errors['password'] = 'Le mot de passe est requis.';
        } elseif (!$user || !password_verify($password, $user['password'])) {
            $errors['password'] = 'Email ou mot de passe incorrect';
        }

        return $errors;
    }
}
