<?php

namespace App\Model;

use App\Model\Connection;
use PDO;
use Exception;
use InvalidArgumentException;

/**
 * Abstract class handling default manager.
 */
class HomeManager extends AbstractManager
{
    protected PDO $pdo;

    public function __construct()
    {
        $connection = new Connection();
        $this->pdo = $connection->getConnection();
    }

    public function select5Last(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM question ORDER BY created_at DESC LIMIT 5");

        if ($stmt) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            throw new Exception('Erreur lors de la récupération des derniers résultats');
        }
    }

    /**
     * Get one row from database by ID.
     */
    public function selectOneById(int $id): array|false
    {
        // prepared request
        $statement = $this->pdo->prepare("SELECT * FROM " . static::TABLE . " WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }

    /**
     * Delete row form an ID
     */
    public function delete(int $id): void
    {
        // prepared request
        $statement = $this->pdo->prepare("DELETE FROM " . static::TABLE . " WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }
    public function search(string $query): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM question WHERE title LIKE :query OR description LIKE :query ORDER BY created_at DESC");
        $query = '%' . $query . '%';
        $stmt->bindValue(':query', $query, PDO::PARAM_STR);

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function searchByTag(): array
    {
        $stmt = $this->pdo->query('SELECT * FROM question ORDER BY created_at DESC LIMIT 5;');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
