<?php
// MariaDB-Verbindungsdaten
$host = "localhost";         // Hostname des Datenbankservers
$username = "dein_benutzer"; // Benutzername
$password = "dein_passwort"; // Passwort
$dbname = "deine_datenbank"; // Datenbankname

// Verbindung zur MariaDB herstellen
$conn = new mysqli($host, $username, $password, $dbname);

// Verbindung prüfen
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Daten aus dem Formular abrufen
$name = $_POST['name'];
$email = $_POST['email'];

// SQL-Abfrage zum Einfügen der Daten
$sql = "INSERT INTO users (name, email) VALUES (?, ?)";

// Vorbereiten der SQL-Anweisung
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $name, $email);

// Ausführen der SQL-Anweisung und Rückmeldung
if ($stmt->execute()) {
    echo "Daten erfolgreich hochgeladen!";
} else {
    echo "Fehler beim Hochladen der Daten: " . $stmt->error;
}

// Verbindung schließen
$stmt->close();
$conn->close();
?>
