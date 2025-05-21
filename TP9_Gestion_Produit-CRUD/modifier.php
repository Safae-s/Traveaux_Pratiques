<?php
include 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM produits WHERE id = ?");
$stmt->execute([$id]);
$produit = $stmt->fetch();

if (!$produit) {
    die("Produit non trouvé !");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $quantite = $_POST['quantite'];

    $stmt = $pdo->prepare("UPDATE produits SET nom = ?, prix = ?, quantite = ? WHERE id = ?");
    $stmt->execute([$nom, $prix, $quantite, $id]);

    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Produit</title>
    <link rel="stylesheet" href="dossier/style.css">
</head>
<body>
    <h1>Modifier Produit</h1>

    <form method="POST">
        <input type="text" name="nom" value="<?= htmlspecialchars($produit['nom']) ?>" required><br>
        <input type="number" step="0.01" name="prix" value="<?= htmlspecialchars($produit['prix']) ?>" required><br>
        <input type="number" name="quantite" value="<?= htmlspecialchars($produit['quantite']) ?>" required><br>
        <button type="submit">Modifier</button>
        <a href="index.php">Retour</a>
    </form>
</body>
</html>
