<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <style>
        body { font-family: Arial; background-color: #eef2f3; padding: 40px; text-align: center; }
        a { display: inline-block; margin-top: 20px; color: white; background-color: #dc3545; padding: 10px 20px; border-radius: 5px; text-decoration: none; }
        a:hover { background-color: #c82333; }
    </style>
</head>
<body>

    <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['user']); ?> ! 🎉</h1>
    <a href="logout.php">Déconnexion</a>

</body>
</html>
