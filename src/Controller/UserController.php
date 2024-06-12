<?php

namespace App\Controller;

use password_hash;
use App\Model\UserManager;

class UserController extends AbstractController
{
    /**
     * Add a new inscription
     */
    public function register(): ?string
    {
        $errors = [];
        $user = [];

        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $userManager = new UserManager();

            $user = array_map('htmlentities', array_map('trim', $_POST));
            $errors = $this->validateRegister($user);

            if (empty($errors)) {
                $id = $userManager->insert($user);

                if (!empty($id)) {
                    header('Location:/');
                }
            }
        }
        return $this->twig->render(
            'User/inscription.html.twig',
            [
                'errors' => $errors,
                'user' => $user,

            ]
        );
    }

    public function login(): ?string
    {

        $errors = [];
        $userManager = new UserManager();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $errors = $this->validateLog($email, $password);

            if (empty($errors)) {
                $user = $userManager->getByEmail($email);
                $_SESSION['id'] = $user['id'] ;
                header('Location: /');
                exit;
            }
        }

        return $this->twig->render(
            'User/login.html.twig',
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


    private function validateRegister(array $user)
    {
        $errors = [];
        $userManager = new UserManager();

        if (empty($user['pseudo'])) {
            $errors[] = 'Le champ \'pseudo\' est à remplir';
        }

        if (empty($user['email'])) {
            $errors['email'] = 'L\'email est requis.';
        } elseif (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'L\'email n\'est pas valide.';
        } elseif ($userManager->getByEmail($user['email'])) {
            $errors['email'] = 'Cet email est déjà utilisé. <a href="   /login">Voulez-vous vous connecter ?</a>';
        }

        if (empty($user['password'])) {
            $errors['password'] = 'Le mot de passe est requis.';
        } elseif (strlen($user['password']) < 8) {
            $errors['password'] = 'Le mot de passe doit contenir au moins 8 caractères.';
        } elseif (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $user['password'])) {
            $errors['password'] = 'Le mot de passe doit contenir des lettres et des chiffres.';
        }

        return $errors;
    }

    private function validateLog($email, $password)
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
