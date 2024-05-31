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
    //     'SELECT * FROM question_tag  
    // JOIN question ON question.id=question_tag.question_id 
    // JOIN tag ON tag.id=question_tag.tag_id 
    // ORDER BY created_at DESC LIMIT 5 ;'
    public function select5Last(): array
    {
        $stmt = $this->pdo->query('SELECT * FROM question ORDER BY created_at DESC LIMIT 5;');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
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
}
