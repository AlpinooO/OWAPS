<?php

require_once __DIR__ . 'bdd.php';

class ContactModel {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function contacter($nom, $email, $message) {
        $stmt = $this->db->prepare('INSERT INTO contact (nom, email, message) VALUES (?, ?, ?)');
        return $stmt->execute([$nom, $email, $message]);
    }
}
?>