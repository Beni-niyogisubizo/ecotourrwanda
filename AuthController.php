<?php
require_once __DIR__ . '/../models/Tourist.php';

class AuthController {
    private $tourist;

    public function __construct($pdo) {
        $this->tourist = new Tourist($pdo);
    }

    public function register($name, $email, $password) {
        return $this->tourist->register($name, $email, $password);
    }

    public function login($email, $password) {
        $user = $this->tourist->findByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            return true;
        }
        return false;
    }
}
?>
