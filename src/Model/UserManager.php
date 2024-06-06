<?php

namespace App\Model;

use PDO;
use password_hash;

/**
 * This class make a PDO object instanciation.
 */
class UserManager extends AbstractManager
{
    /**
     * Add a new user
     */
    public const TABLE = 'user';


    /**
     * Insert new item in database
     */
    public function insert(array $user): int
    {
        $hashedPassword = password_hash($user['password'], PASSWORD_DEFAULT);

        $statement = $this->pdo->prepare(
            "INSERT INTO " . self::TABLE . " 
            (`pseudo`, `email`, `password`) 
            VALUES 
            (:pseudo, :email, :password)"
        );
        $statement->bindValue(':pseudo', $user['pseudo'], PDO::PARAM_STR);
        $statement->bindValue(':email', $user['email'], PDO::PARAM_STR);
        $statement->bindValue(':password', $hashedPassword, PDO::PARAM_STR);
        $statement->execute();

        $userId = (int)$this->pdo->lastInsertId();

        return $userId;
    }

    public function emailExists(string $email)
    {
        $query = $this->pdo->prepare('SELECT COUNT(*) FROM user WHERE email = :email');
        $query->execute(['email' => $email]);
        return $query->fetchColumn() > 0;
    }

    public function getByEmail(string $email): array
    {
        $statement = $this->pdo->prepare('SELECT * FROM user WHERE email = :email');
        $statement->execute(['email' => $email]);
        $ligne = $statement->fetch();
        if (!$ligne) {
            return [];
        }
        return $ligne;
    }
}
