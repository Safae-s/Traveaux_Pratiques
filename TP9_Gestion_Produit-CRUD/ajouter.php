<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $quantite = $_POST['quantite'];

    $stmt = $pdo->prepare("INSERT INTO produits (nom, prix, quantite) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $prix, $quantite]);

    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter Produit</title>
    <link rel="stylesheet" href="dossier/style.css">
</head>
<body>
    <h1>Ajouter un Produit</h1>

    <form method="POST">
        <input type="text" name="nom" placeholder="Nom" required><br>
        <input type="number" step="0.01" name="prix" placeholder="Prix" required><br>
        <input type="number" name="quantite" placeholder="Quantité" required><br>
        <button type="submit">Ajouter</button>
        <a href="index.php">Retour</a>
    </form>
</body>
</html>
