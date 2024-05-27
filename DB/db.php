<?php

$host = 'localhost';
$dbName = 'sj_projekt';
$username = 'root';
$password = '';

try {
    $dsn = "mysql:host=$host;dbname=$dbName";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}