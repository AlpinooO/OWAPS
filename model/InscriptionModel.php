<?php
require_once __DIR__ . 'bdd.php';

class InscriptionModel {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function enregistrerUtilisateur($username, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        return $stmt->execute([$username, $email, $hashedPassword]);
    }
}
?>
