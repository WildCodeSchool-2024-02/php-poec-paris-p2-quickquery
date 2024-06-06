<?php

namespace App\Model;

use PDO;

class QuestionManager extends AbstractManager
{
    public const TABLE = 'question';

    public function selectMostRecent()
    {
        $statement = $this->pdo->query("SELECT * FROM " . self::TABLE . " ORDER BY created_at DESC LIMIT 5");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert(array $question): int
    {
        $tagManager = new TagManager();

        $statement = $this->pdo->prepare(
            "INSERT INTO " . self::TABLE . " 
            (`title`, `description`, `scheduled_at`, `created_at`, `author`) 
            VALUES 
            (:title, :description, :scheduled_at, NOW(), 1)"
        );
        $statement->bindValue(':title', $question['title'], PDO::PARAM_STR);
        $statement->bindValue(':description', $question['description'], PDO::PARAM_STR);
        $statement->bindValue(':scheduled_at', $question['scheduled_at'], PDO::PARAM_STR);
        $statement->execute();

        $questionId = (int)$this->pdo->lastInsertId();

        if (isset($question['tags']) && is_array($question['tags'])) {
            foreach ($question['tags'] as $tagId) {
                $tagManager->insert($questionId, $tagId);
            }
        }
        return $questionId;
    }

    public function select5Last(): array
    {
        $stmt = $this->pdo->query('SELECT * FROM ' . self::TABLE . ' ORDER BY created_at DESC LIMIT 5');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectOneById(int $id): array|false
    {
        $statement = $this->pdo->prepare("SELECT * FROM " . self::TABLE . " WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }

    public function delete(int $id): void
    {
        $statement = $this->pdo->prepare("DELETE FROM " . self::TABLE . " WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }
}
