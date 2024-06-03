<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 05</title>
</head>
<body>
    <?php
    // Boucle pour afficher les nombres de 0 à 1337
    for ($i = 0; $i <= 1337; $i++) {
        // Exclure les nombres spécifiés
        if ($i != 26 && $i != 37 && $i != 88 && $i != 1111) {
            // Afficher le nombre
            echo $i . "<br>";
        }
    }
    ?>
</body>
</html>
