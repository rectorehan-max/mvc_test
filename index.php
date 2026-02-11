<?php

$pdo = require 'config/connection_db.php';
require_once 'controllers/UserController.php';

$controller = new UserController($pdo);

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit();
        break;

    case 'update':
        $controller->update();
        break;

    case 'show':
        $controller->show();
        break;
    default:
        $controller->index();
        break;
}

