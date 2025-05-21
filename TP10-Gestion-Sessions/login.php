<?php
$erreur = "";
if (isset($_GET['erreur'])) {
    if ($_GET['erreur'] == 1) $erreur = "Veuillez saisir un login et un mot de passe.";
    elseif ($_GET['erreur'] == 2) $erreur = "Erreur de login ou mot de passe.";
    elseif ($_GET['erreur'] == 3) $erreur = "Vous avez été déconnecté.";
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
    <div class="login-box">
        <h2>Connexion</h2>
        <form method="post" action="validation.php">
            <input type="text" name="login" placeholder="Nom d'utilisateur"><br>
            <input type="password" name="password" placeholder="Mot de passe"><br>
            <input type="submit" value="Se connecter">
        </form>

        <?php
        if (isset($_GET['erreur'])) {
            if ($_GET['erreur'] == 1) echo "<p class='erreur'>Veuillez saisir un login et un mot de passe</p>";
            elseif ($_GET['erreur'] == 2) echo "<p class='erreur'>Erreur de login/mot de passe</p>";
            elseif ($_GET['erreur'] == 3) echo "<p class='erreur'>Vous avez été déconnecté du service</p>";
        }
        ?>
    </div>
</body>
</html>
