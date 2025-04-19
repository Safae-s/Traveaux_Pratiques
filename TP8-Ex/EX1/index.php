<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="POST" action="">
        <h2>🧮 Calculatrice en PHP</h2>

        <label>Nombre 1 :</label>
        <input type="number" name="nombre1" step="any" required>

        <label>Nombre 2 :</label>
        <input type="number" name="nombre2" step="any" required>

        <label>Opération :</label>
        <select name="operation" required>
            <option value="addition">Addition (+)</option>
            <option value="soustraction">Soustraction (-)</option>
            <option value="multiplication">Multiplication (×)</option>
            <option value="division">Division (÷)</option>
        </select>

        <button type="submit" name="calculer">Calculer</button>
    </form>

    <?php
    if (isset($_POST['calculer'])) {
        $a = $_POST['nombre1'];
        $b = $_POST['nombre2'];
        $op = $_POST['operation'];
        $resultat = "";

        switch ($op) {
            case 'addition':
                $resultat = $a + $b;
                break;
            case 'soustraction':
                $resultat = $a - $b;
                break;
            case 'multiplication':
                $resultat = $a * $b;
                break;
            case 'division':
                if ($b != 0) {
                    $resultat = $a / $b;
                } else {
                    $resultat = "Erreur : Division par zéro";
                }
                break;
            default:
                $resultat = "Opération non valide.";
        }

        echo "<div class='result'>Résultat : $resultat</div>";
    }
    ?>

</body>
</html>
