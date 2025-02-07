<?php
require_once __DIR__ . '/../model/ConnexionModel.php';

class ConnexionController {
    private $model;

    public function __construct() {
        $this->model = new ConnexionModel();
    }

    public function connexion() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->model->verifierUtilisateur($username, $password);
            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                header("Location: /");
                exit();
            } else {
                echo "<p>Identifiants incorrects</p>";
            }
        }
    }
}

// Exécuter la connexion si POST
$controller = new ConnexionController();
$controller->connexion();
?>
