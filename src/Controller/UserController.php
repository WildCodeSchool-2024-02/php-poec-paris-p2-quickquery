<?php

namespace App\Controller;

use App\Model\UserManager;

class UserController extends AbstractController
{
    private $userId = null;

    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['id'])) {
            $this->userId = (int)$_SESSION['id'];
        }
    }

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
                    header('Location:/?register=1');
                    exit();
                }
            }
        }
        return $this->twig->render(
            'User/register.html.twig',
            [
                'errors' => $errors,
                'user' => $user,
                'userId' => $this->userId,

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
                header('Location: /?login=1');
                exit();
            }
        }

        return $this->twig->render(
            'User/login.html.twig',
            [
               'errors' => $errors,
               'userId' => $this->userId,
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
            $errors[] = 'Pseudo field required';
        }

        if (empty($user['email'])) {
            $errors['email'] = 'Email is required';
        } elseif (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email not valid';
        } elseif ($userManager->getByEmail($user['email'])) {
            $errors['email'] = 'This email already used. <a href="/login">Login?</a>';
        }

        if (empty($user['password'])) {
            $errors['password'] = 'Password required.';
        } elseif (strlen($user['password']) < 8) {
            $errors['password'] = '8 minimum caracters for password required';
        } elseif (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $user['password'])) {
            $errors['password'] = 'Password must contains letters et numbers';
        }

        return $errors;
    }

    private function validateLog($email, $password)
    {
        $errors = [];
        $userManager = new UserManager();
        $user = $userManager->getByEmail($email);

        if (empty($email)) {
            $errors['email'] = 'Email required';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email not valid';
        }

        if (empty($password)) {
            $errors['password'] = 'Password required';
        } elseif (!$user || !password_verify($password, $user['password'])) {
            $errors['password'] = 'Email or password not exists';
        }

        return $errors;
    }
}
