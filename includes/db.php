<?php
$dsn = 'mysql:host=localhost;dbname=users'; // Make sure 'users' is the name of your DB
$db_username = 'root';
$db_password = '';

try { 
    $pdo = new PDO($dsn, $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Database connection successful!';
} catch (PDOException $e) {
    echo 'Database connection failed: ' . $e->getMessage();
}
?> 