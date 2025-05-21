<?php
$conn = new mysqli("localhost", "root", "", "TP10");
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}
?>
