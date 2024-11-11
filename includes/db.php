<?php
$dsn = 'mysql:host=localhost:3306;dbname=users';
$db_username = 'root';
$db_password = '';

$pdo = new PDO($dsn, $db_username, $db_password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

// Dummy PDO object to avoid error
// $pdo = new stdClass();
//$pdo->setAttribute = function() {};
//$pdo->prepare = function() {};
//$pdo->execute = function() {};
//$pdo->fetch = function() {};
//$pdo->fetchAll = function() {};
//$pdo->lastInsertId = function() {};