<?php

namespace App\Controller;

use password_hash;
use App\Model\UserManager;

class InscriptionController extends AbstractController
{
    /**
     * Add a new inscription
     */
    public function add(): ?string
    {
        $errors = [];
        $inscription = [];
        $userManager = new UserManager();


        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $inscription = $_POST;


            foreach ($inscription as $key => $value) {
                $inscription[$key] = is_string($value) ? trim($value) : $value;
            }

            $errors = $this->validate($inscription);

            if (empty($errors)) {
                $id = $userManager->insert($inscription);

                if (!empty($id)) {
                    header('Location:/');
                }
            }
        }

        return $this->twig->render(
            'User/Inscription.html.twig',
            [
                'errors' => $errors,
                'inscription' => $inscription,

            ]
        );
    }



    private function validate(array $inscription)
    {
        $errors = [];
        $userManager = new UserManager();

        if (empty($inscription['pseudo'])) {
            $errors[] = 'Le champ \'pseudo\' est à remplir';
        }

        if (empty($inscription['email'])) {
            $errors['email'] = 'L\'email est requis.';
        } elseif (!filter_var($inscription['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'L\'email n\'est pas valide.';
        } elseif ($userManager->emailExists($inscription['email'])) {
            $errors['email'] = 'Cet email est déjà utilisé. <a href="   /login">Voulez-vous vous connecter ?</a>';
        }

        if (empty($inscription['password'])) {
            $errors['password'] = 'Le mot de passe est requis.';
        } elseif (strlen($inscription['password']) < 8) {
            $errors['password'] = 'Le mot de passe doit contenir au moins 8 caractères.';
        } elseif (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $inscription['password'])) {
            $errors['password'] = 'Le mot de passe doit contenir des lettres et des chiffres.';
        }

        return $errors;
    }
}
