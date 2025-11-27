<?php
require_once __DIR__ . '/../config.php';

class Tourist {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function register($name, $email, $password) {
        $stmt = $this->pdo->prepare("INSERT INTO Tourist (name, email, password) VALUES (?, ?, ?)");
        return $stmt->execute([
            $name,
            $email,
            password_hash($password, PASSWORD_DEFAULT)  // secure password storage
        ]);
    }

    public function findByEmail($email) {
        $stmt = $this->pdo->prepare("SELECT * FROM Tourist WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
