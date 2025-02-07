<?php
require_once 'bdd.php';  

class Comment {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

   
    public function addComment($product_id, $user_id, $content) {
        $sql = "INSERT INTO comments (product_id, user_id, content, created_at) 
                VALUES (:product_id, :user_id, :content, NOW())";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':product_id' => $product_id,
            ':user_id' => $user_id,
            ':content' => htmlspecialchars($content)  // Sécurisation du contenu
        ]);
    }

   
    public function getCommentsByProduct($product_id) {
        $sql = "SELECT c.id, c.content, c.created_at, u.username 
                FROM comments c 
                JOIN users u ON c.user_id = u.id 
                WHERE c.product_id = :product_id 
                ORDER BY c.created_at DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':product_id' => $product_id]);
        return $stmt->fetchAll();
    }

    public function deleteComment($comment_id, $user_id, $is_admin = false) {
        if ($is_admin) {
            $sql = "DELETE FROM comments WHERE id = :comment_id";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([':comment_id' => $comment_id]);
        } else {
            $sql = "DELETE FROM comments WHERE id = :comment_id AND user_id = :user_id";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                ':comment_id' => $comment_id,
                ':user_id' => $user_id
            ]);
        }
    }
}
?>