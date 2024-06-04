<?php

namespace App\Model;

use App\Model\TagManager;
use PDO;

class QuestionManager extends AbstractManager
{
    public const TABLE = 'question';

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
                $tagManager->insertTag($questionId, $tagId);
            }
        }
        return $questionId;
    }
}
