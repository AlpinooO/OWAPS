<?php
require_once __DIR__ . '/../database.php';

class ConnexionModel {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function verifierUtilisateur($username, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
?>
