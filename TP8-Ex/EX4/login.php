<?php
session_start();

$identifiant_valide = "safae";
$motdepasse_valide = "0000";

if (isset($_POST['login'])) {
    $id = $_POST['identifiant'];
    $mdp = $_POST['motdepasse'];

    if ($id === $identifiant_valide && $mdp === $motdepasse_valide) {
        $_SESSION['user'] = $id;
        header("Location: bienvenue.php");
        exit();
    } else {
        $erreur = "Identifiants incorrects.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="POST" action="">
        <h2>🔐 Connexion</h2>
        <input type="text" name="identifiant" placeholder="Identifiant" required>
        <input type="password" name="motdepasse" placeholder="Mot de passe" required>
        <button type="submit" name="login">Se connecter</button>

        <?php if (!empty($erreur)) echo "<div class='erreur'>$erreur</div>"; ?>
    </form>

</body>
</html>
