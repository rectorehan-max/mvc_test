<?php

$config = include('config.php');

$host = $config['db_host'];
$dbname = $config['db_name'];
$username = $config['db_username'];
$password = $config['db_password'];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $pdo;

} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}


