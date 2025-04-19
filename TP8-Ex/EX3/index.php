<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="POST" action="">
        <h2>📬 Formulaire de contact</h2>
        <label>Nom :</label>
        <input type="text" name="nom" required>

        <label>Email :</label>
        <input type="email" name="email" required>

        <label>Message :</label>
        <textarea name="message" rows="4" required></textarea>

        <button type="submit" name="envoyer">Envoyer</button>
    </form>

    <?php
    if (isset($_POST['envoyer'])) {
        $nom = trim($_POST['nom']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if (!empty($nom) && !empty($email) && !empty($message)) {
            echo "<div class='message'>Merci $nom !<br>Nous avons bien reçu votre message : <br><em>$message</em></div>";
        } else {
            echo "<div class='message'>⚠️ Tous les champs sont obligatoires.</div>";
        }
    }
    ?>

</body>
</html>
