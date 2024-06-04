<?php

namespace App\Model;

use PDO;

class QuestionManager extends AbstractManager
{
    /**
     * Add a new question
     */
    public const TABLE = 'question';

    /**
     * Insert new item in database
     */
    public function insert(array $question): int
    {
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
                $this->insertQuestionTag($questionId, $tagId);
            }
        }

        return $questionId;
    }

    private function insertQuestionTag(int $questionId, int $tagId): void
    {
        $statement = $this->pdo->prepare(
            "INSERT INTO question_tag 
            (question_id, tag_id) 
            VALUES (:question_id, :tag_id)"
        );
        $statement->bindValue(':question_id', $questionId, PDO::PARAM_INT);
        $statement->bindValue(':tag_id', $tagId, PDO::PARAM_INT);
        $statement->execute();
    }

    public function allTags(): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM tag");
        $statement->execute();
        $tags = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $tags;
    }
}
