<?php
require_once __DIR__ . '/../model/InscriptionModel.php';

class InscriptionController {
    private $model;

    public function __construct() {
        $this->model = new InscriptionModel();
    }

    public function inscription() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($this->model->enregistrerUtilisateur($username, $email, $password)) {
                header("Location: /connexion");
                exit();
            } else {
                echo "<p>Erreur lors de l'inscription</p>";
            }
        }
    }
}

// Exécuter l'inscription si POST
$controller = new InscriptionController();
$controller->inscription();
?>
