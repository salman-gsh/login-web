<?php

// MySQL Variablen erstellen
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "webseite";

// Verbindung herstellen
$conn = new mysqli($servername, $username, $password, $dbname);


// Verbindung prüfencr
if ($conn->connect_error) {
    die("<br>Connection failed: " . $conn->connect_error);
}
echo("<script>console.log('Datenbank verbunden');</script>");



?>