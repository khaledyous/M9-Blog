<?php
$host = getenv('DB_HOST') ?: 'mariadb'; 
$db   = getenv('DB_NAME') ?: 'khaled';
$user = getenv('DB_USERNAME') ?: 'khaledyous';
$pass = getenv('DB_PASSWORD') ?: 'khaleddddd';


$dsn = "mysql:host=$host;port=3306;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database verbinding mislukt: " . $e->getMessage());
}