<?php
// Verbindungsdaten für die Datenbank
$host = 'localhost';      // Der Hostname der Datenbankserver
$dbName = 'buchhandel_test'; // Der Name der Datenbank
$username = 'root';       // Der Benutzername für die Datenbank
$password = '';           // Das Passwort für die Datenbank

// Erstelle eine neue Verbindung zur Datenbank mit der MySQLi-Erweiterung.
$con = new mysqli($host, $username, $password, $dbName);

// Überprüfe die Verbindung
if ($con->connect_error) {
    die("Verbindung fehlgeschlagen: " . $con->connect_error);
}

// Wenn die Datei von einem anderen PHP-Skript inkludiert wird,
// ist die Datenbankverbindung nun verfügbar unter der Variablen $con.
