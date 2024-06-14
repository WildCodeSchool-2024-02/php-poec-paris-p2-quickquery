<?php

namespace App\Model;

use PDO;

/**
 * This class makes a PDO object instantiation.
 */
class UserManager extends AbstractManager
{
    public const TABLE = 'user';

    public function insert(array $user): int
    {
        $hashedPassword = password_hash($user['password'], PASSWORD_DEFAULT);

        $statement = $this->pdo->prepare(
            "INSERT INTO " . self::TABLE . " 
            (`pseudo`, `email`, `password`, `image_profil`) 
            VALUES 
            (:pseudo, :email, :password, :image_profil)"
        );
        $statement->bindValue(':pseudo', $user['pseudo'], PDO::PARAM_STR);
        $statement->bindValue(':email', $user['email'], PDO::PARAM_STR);
        $statement->bindValue(':password', $hashedPassword, PDO::PARAM_STR);
        $statement->bindValue(':image_profil', $user['image_profil'], PDO::PARAM_STR);
        $statement->execute();

        $userId = (int)$this->pdo->lastInsertId();

        return $userId;
    }
    public function update(array $user): bool
    {
        $statement = $this->pdo->prepare("UPDATE " . self::TABLE . " 
        SET `pseudo` = :pseudo, `image_profil` = :image_profil WHERE id=:id" );

        $statement->bindValue('id', $user['id'], \PDO::PARAM_INT);
        $statement->bindValue(':pseudo', $user['pseudo'], PDO::PARAM_STR);
        $statement->bindValue(':image_profil', $user['image_profil'], PDO::PARAM_STR);


        return $statement->execute();
    }


    public function getByEmail(string $email): array
    {
        $statement = $this->pdo->prepare('SELECT * FROM user WHERE email = :email');
        $statement->execute(['email' => $email]);
        return $statement->fetch() ?: [];
    }

    public function getById(int $id): array
    {
        $statement = $this->pdo->prepare('SELECT * FROM user WHERE id = :id');
        $statement->execute(['id' => $id]);
        return $statement->fetch() ?: [];
    }
}
