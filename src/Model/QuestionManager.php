<?php

namespace App\Model;

use PDO;

class QuestionManager extends AbstractManager
{
    public const TABLE = 'question';

    public function selectMostRecent()
    {
        $statement = $this->pdo->query("
            SELECT q.*, 
                COUNT(DISTINCT p.user_id) as participant_count, 
                COUNT(DISTINCT a.user_id) as alert_count, 
                t.tag_list
            FROM " . self::TABLE . " AS q
            LEFT JOIN participant AS p ON q.id = p.question_id
            LEFT JOIN alert AS a ON q.id = a.question_id
            LEFT JOIN (
                SELECT qt.question_id, GROUP_CONCAT(t.name SEPARATOR ', ') as tag_list
                FROM question_tag AS qt
                LEFT JOIN tag AS t ON qt.tag_id = t.id
                GROUP BY qt.question_id
            ) AS t ON q.id = t.question_id
            GROUP BY q.id
            ORDER BY q.created_at DESC
        ");

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert(array $question, int $authorId): int
    {
        $tagManager = new TagManager();

        $statement = $this->pdo->prepare(
            "INSERT INTO " . self::TABLE . " 
            (`title`, `description`, `scheduled_at`, `created_at`, `author`) 
            VALUES 
            (:title, :description, :scheduled_at, NOW(), :author)"
        );
        $statement->bindValue(':title', $question['title'], PDO::PARAM_STR);
        $statement->bindValue(':description', $question['description'], PDO::PARAM_STR);
        $statement->bindValue(':scheduled_at', $question['scheduled_at'], PDO::PARAM_STR);
        $statement->bindValue(':author', $authorId, PDO::PARAM_INT);
        $statement->execute();

        $questionId = (int) $this->pdo->lastInsertId();

        if (isset($question['tags']) && is_array($question['tags'])) {
            foreach ($question['tags'] as $tagId) {
                $tagManager->insert($questionId, $tagId);
            }
        }
        return $questionId;
    }

    public function selectOneById(int $id): array|false
    {
        $statement = $this->pdo->prepare("
            SELECT q.*, 
                COUNT(DISTINCT p.user_id) as participant_count, 
                COUNT(DISTINCT a.user_id) as alert_count, 
                t.tag_list
            FROM " . self::TABLE . " AS q
            LEFT JOIN participant AS p ON q.id = p.question_id
            LEFT JOIN alert AS a ON q.id = a.question_id
            LEFT JOIN (
                SELECT qt.question_id, GROUP_CONCAT(t.name SEPARATOR ', ') as tag_list
                FROM question_tag AS qt
                LEFT JOIN tag AS t ON qt.tag_id = t.id
                GROUP BY qt.question_id
            ) AS t ON q.id = t.question_id
            WHERE q.id = :id
            GROUP BY q.id
        ");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }

    public function search(string $query): array
    {
        $stmt = $this->pdo->prepare("
            SELECT q.*, 
                COUNT(DISTINCT p.user_id) AS participant_count, 
                COUNT(DISTINCT a.user_id) AS alert_count, 
                GROUP_CONCAT(t.name SEPARATOR ', ') AS tag_list
            FROM question AS q
            LEFT JOIN participant AS p ON q.id = p.question_id
            LEFT JOIN alert AS a ON q.id = a.question_id
            LEFT JOIN question_tag AS qt ON q.id = qt.question_id
            LEFT JOIN tag AS t ON qt.tag_id = t.id
            WHERE q.title LIKE :query OR q.description LIKE :query
            GROUP BY q.id
            ORDER BY q.created_at DESC
        ");
        $query = '%' . $query . '%';
        $stmt->bindValue(':query', $query, PDO::PARAM_STR);

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectAllByTag(int $tagId): array
    {
        $stmt = $this->pdo->prepare("
            SELECT q.*, 
                COUNT(DISTINCT p.user_id) as participant_count, 
                COUNT(DISTINCT a.user_id) as alert_count
            FROM question AS q
            LEFT JOIN participant AS p ON q.id = p.question_id
            LEFT JOIN alert AS a ON q.id = a.question_id
            JOIN question_tag AS qt ON q.id = qt.question_id
            WHERE qt.tag_id = :tagId
            GROUP BY q.id
            ORDER BY q.created_at DESC
        ");
        $stmt->bindValue(':tagId', $tagId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
