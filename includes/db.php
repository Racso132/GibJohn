<?php
$dsn = 'mysql:host=localhost:3306;dbname=test';
$db_username = 'root';
$db_password = '';

$pdo = new PDO($dsn, $db_username, $db_password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  