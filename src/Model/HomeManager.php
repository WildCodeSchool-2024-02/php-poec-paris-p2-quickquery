<?php

namespace App\Model;

use App\Model\Connection;
use PDO;

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

    /**
     * Get all row from database.
     */
    public function select5Last(): array
    {
        $stmt = $this->pdo->query('SELECT * FROM question ORDER BY created_at DESC LIMIT 5');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Get one row from database by ID.
     */
    public function selectOneById(int $id): array|false
    {

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

        $statement = $this->pdo->prepare("DELETE FROM " . static::TABLE . " WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }
}
