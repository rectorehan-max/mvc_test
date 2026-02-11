<?php

require_once __DIR__ . '/../models/User.php';

class UserController {

    private $user;

    public function __construct($pdo) {
        $this->user = new User($pdo);
    }

    public function index() {
        $users = $this->user->getAll();
        require __DIR__ . '/../views/users.php';
    }

    public function create() {
        require __DIR__ . '/../views/create.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->user->create($_POST['username'], $_POST['email']);
            header("Location: index.php");
            exit;
        }
    }
}

