<?php
$host = 'localhost';
$dbName = 'buchhandel_test';
$username = 'root';
$password = '';

try {
    $connection = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Verbindung erfolgreich";
    return $connection;
}
catch(PDOException $e) {
    echo "Verbindung fehlgeschlagen: " . $e->getMessage();
    return null;
}