<?php


require_once '../model/comment.php';
require_once '../model/bdd.php';  

$commentModel = new Comment($pdo);

// On vérifie si l'utilisateur est connecté
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['content'], $_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['user_id'] ?? null; 
    $content = $_POST['content'];

    if ($user_id && !empty($content)) {
        $commentModel->addComment($product_id, $user_id, $content);
        header("Location: product.php?id=" . $product_id);
        exit();
    } else {
        echo "Erreur : Vous devez être connecté et écrire un commentaire.";
    }
}

?>
