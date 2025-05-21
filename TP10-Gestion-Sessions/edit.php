<?php
require('config.php');
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $conn->query("UPDATE exercice SET titre='$titre', auteur='$auteur' WHERE id=$id");
    header("Location: index.php");
}

$res = $conn->query("SELECT * FROM exercice WHERE id=$id");
$row = $res->fetch_assoc();
?>
<link rel="stylesheet" href="style.css">
<h2>Modifier Exercice</h2>
<form method="post">
    Titre: <input type="text" name="titre" value="<?= $row['titre'] ?>" required><br>
    Auteur: <input type="text" name="auteur" value="<?= $row['auteur'] ?>" required><br>
    <input type="submit" value="Modifier">
</form>
<a href="index.php">Retour</a>
