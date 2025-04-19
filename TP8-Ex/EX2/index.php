<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Générateur de mot de passe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="POST" action="">
        <h2>🔐 Générateur de mot de passe</h2>

        <label>Longueur du mot de passe :</label>
        <input type="number" name="longueur" min="4" max="50" required>

        <button type="submit" name="generer">Générer</button>
    </form>

    <?php
    function genererMotDePasse($longueur) {
        $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
        $motDePasse = '';
        $nbCaracteres = strlen($caracteres);

        for ($i = 0; $i < $longueur; $i++) {
            $motDePasse .= $caracteres[rand(0, $nbCaracteres - 1)];
        }

        return $motDePasse;
    }

    if (isset($_POST['generer'])) {
        $longueur = (int) $_POST['longueur'];

        if ($longueur >= 4 && $longueur <= 50) {
            $motDePasse = genererMotDePasse($longueur);
            echo "<div class='result'>Mot de passe généré : <br><code>$motDePasse</code></div>";
        } else {
            echo "<div class='result'>Veuillez choisir une longueur entre 4 et 50 caractères.</div>";
        }
    }
    ?>

</body>
</html>
