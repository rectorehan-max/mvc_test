<?php

class User {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT id, username, email FROM users ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($username, $email) {
        $stmt = $this->pdo->prepare("INSERT INTO users (username, email) VALUES (?, ?)");
        return $stmt->execute([$username, $email]);
    }
}

