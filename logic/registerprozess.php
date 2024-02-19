<?php

// Inkludiere die Datenbankverbindungsdatei
global $con;
require("connection.php");

// Überprüfe, ob das Formular abgesendet wurde
if (isset($_POST["submit"])) {
    // Validiere und bereinige Eingaben
    $accountType = filter_var($_POST["account_type"], FILTER_SANITIZE_STRING);
    $anrede = filter_var($_POST["anrede"], FILTER_SANITIZE_STRING);
    $titel = filter_var($_POST["titel"], FILTER_SANITIZE_STRING);
    $vorname = filter_var($_POST["vorname"], FILTER_SANITIZE_STRING);
    $nachname = filter_var($_POST["nachname"], FILTER_SANITIZE_STRING);
    $firma = filter_var($_POST["firma"], FILTER_SANITIZE_STRING);
    $strasse = filter_var($_POST["strasse"], FILTER_SANITIZE_STRING);
    $hausnummer = filter_var($_POST["hausnummer"], FILTER_SANITIZE_STRING);
    $plz = filter_var($_POST["plz"], FILTER_SANITIZE_STRING);
    $ort = filter_var($_POST["ort"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];

    // Überprüfe, ob die Passwörter übereinstimmen
    if ($password !== $passwordRepeat) {
        die("Die Passwörter stimmen nicht überein!");
    }

    // Passwort verschlüsseln
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prüfe, ob der Benutzer bereits existiert
    $stmt = $con->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    if (!$stmt) {
        die("Prepare failed: (" . $con->errno . ") " . $con->error);
    }

    $stmt->bind_param("s", $email);
    if (!$stmt->execute()) {
        die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    }

    $result = $stmt->get_result();
    $userCount = $result->fetch_row()[0];

    if ($userCount == 0) {
        // Benutzer existiert noch nicht, füge ihn hinzu
        $stmt = $con->prepare("INSERT INTO users (account_type, anrede, titel, vorname, nachname, firma, strasse, hausnummer, plz, ort, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            die("Prepare failed: (" . $con->errno . ") " . $con->error);
        }

        $stmt->bind_param("ssssssssssss", $accountType, $anrede, $titel, $vorname, $nachname, $firma, $strasse, $hausnummer, $plz, $ort, $email, $hashedPassword);

        if ($stmt->execute()) {
            echo "Registrierung erfolgreich!";
        } else {
            echo "Es gab ein Problem bei der Registrierung. Bitte versuchen Sie es erneut.";
        }
    } else {
        // Benutzer existiert bereits
        echo "Ein Benutzer mit dieser E-Mail existiert bereits.";
    }

    // Schließe die vorbereiteten Anweisungen und die Datenbankverbindung
    $stmt->close();
    $con->close();
}
