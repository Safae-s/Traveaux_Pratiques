<?php
session_start();
if (!isset($_SESSION['CONNECT']) || $_SESSION['CONNECT'] != 'OK') {
    header("Location: login.php");
    exit();
}

require('config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $date_creation = date("Y-m-d");
    $conn->query("INSERT INTO exercice (titre, auteur, date_creation) VALUES ('$titre', '$auteur', '$date_creation')");
}


$result = $conn->query("SELECT * FROM exercice");
?>
<link rel="stylesheet" href="style.css">
<div class="container">

    <h2>Bienvenue <?= $_SESSION['login'] ?></h2>
    <a href="validation.php?afaire=deconnexion" class="logout">Déconnexion</a>

    <div class="form-section">
        <h3>Ajouter un exercice</h3>
        <form method="post">
            <label>Titre:</label> 
            <input type="text" name="titre" required><br>
            <label>Auteur:</label> 
            <input type="text" name="auteur" required><br>
            <input type="submit" value="Ajouter">
        </form>
    </div>

    <h3>Liste des exercices</h3>
    <table>
        <tr><th>ID</th><th>Titre</th><th>Auteur</th><th>Date</th><th>Actions</th></tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["titre"] ?></td>
            <td><?= $row["auteur"] ?></td>
            <td><?= $row["date_creation"] ?></td>
            <td>
                <a href="edit.php?id=<?= $row["id"] ?>">Modifier</a> |
                <a href="delete.php?id=<?= $row["id"] ?>" onclick="return confirm('Voulez-vous supprimer cet exercice ?');">Supprimer</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

</div>
