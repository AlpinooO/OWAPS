<?php
require_once __DIR__ . 'bdd.php';

class ConnexionModel {
    private $db;


    private function __construct() {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=owasp', 'root', 'Oscarlechat6');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
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
