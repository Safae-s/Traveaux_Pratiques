<?php
include("config.php");

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$groupe = $_POST['groupe'];
$sujet = $_POST['sujet'];
$description = $_POST['description'];
$date_debut = $_POST['date_debut'];
$date_fin = $_POST['date_fin'];
$encadrant = $_POST['encadrant'];

$sql = "INSERT INTO projets (nom, prenom, groupe, sujet, description, date_debut, date_fin, encadrant)
        VALUES ('$nom', '$prenom', '$groupe', '$sujet', '$description', '$date_debut', '$date_fin', '$encadrant')";

if ($conn->query($sql) === TRUE) {
    header("Location: affiche.php");
    exit();
} else {
    echo "Erreur: " . $conn->error;
}
?>
