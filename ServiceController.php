<?php
require_once __DIR__ . '/../models/Service.php';

class ServiceController {
    private $service;

    public function __construct($pdo) {
        $this->service = new Service($pdo);
    }

    public function showServices() {
        // Returns all services for the view
        return $this->service->getAll();
    }
}
?>
