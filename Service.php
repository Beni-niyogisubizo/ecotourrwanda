<?php
require_once __DIR__ . '/../config.php';

class Service {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Get all services from database
    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM Service");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
