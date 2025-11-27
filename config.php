<?php
$dsn = 'mysql:host=localhost;dbname=ecotourrwanda;charset=utf8mb4';
$username = 'beni';
$password = 'password'; 
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection successful!";
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>

