<?php
include 'db.php';

// Supprimer
if (isset($_GET['supprimer'])) {
    $id = $_GET['supprimer'];
    $stmt = $pdo->prepare("DELETE FROM produits WHERE id = ?");
    $stmt->execute([$id]);
    header('Location: index.php');
    exit();
}

// Recherche
$search = $_GET['search'] ?? '';
$query = "SELECT * FROM produits WHERE nom LIKE ?";
$stmt = $pdo->prepare($query);
$stmt->execute(["%$search%"]);
$produits = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Produits</title>
    <link rel="stylesheet" href="dossier/style.css">
</head>
<body>
    <h1>Gestion des Produits</h1><br><br>

    <form method="GET" action="index.php">
        <input type="text" name="search" placeholder="Rechercher un produit" value="<?= htmlspecialchars($search) ?>">
        <button type="submit">Chercher</button><br><br>
        <a href="ajouter.php" class="btn-ajouter">Ajouter Produit</a>
    </form>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produits as $produit): ?>
            <tr>
                <td><?= htmlspecialchars($produit['nom']) ?></td>
                <td><?= htmlspecialchars($produit['prix']) ?> DH</td>
                <td><?= htmlspecialchars($produit['quantite']) ?></td>
                <td>
                    <a href="modifier.php?id=<?= $produit['id'] ?>">Modifier</a> |
                    <a href="index.php?supprimer=<?= $produit['id'] ?>" onclick="return confirm('Supprimer ce produit ?')">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
