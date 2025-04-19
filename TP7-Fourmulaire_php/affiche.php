<?php
include("config.php");
$result = $conn->query("SELECT * FROM projets");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Liste des Projets</h2>
    <table>
        <tr>
            <th>Nom</th><th>Prénom</th><th>Groupe</th><th>Sujet</th>
            <th>Description</th><th>Date Début</th><th>Date Fin</th><th>Encadrant</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['nom'] ?></td>
            <td><?= $row['prenom'] ?></td>
            <td><?= $row['groupe'] ?></td>
            <td><?= $row['sujet'] ?></td>
            <td><?= $row['description'] ?></td>
            <td><?= $row['date_debut'] ?></td>
            <td><?= $row['date_fin'] ?></td>
            <td><?= $row['encadrant'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <div class="buttons">
    <a href="formulaire.html" class="btn-ajouter">Ajouter</a>
</div>

</body>
</html>
