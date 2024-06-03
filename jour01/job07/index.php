<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz en PHP</title>
</head>
<body>
    <?php
    // Boucle pour les nombres de 1 à 100
    for ($i = 1; $i <= 100; $i++) {
        // Vérifier si le nombre est un multiple de 3 et de 5
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz<br>";
        }
        // Vérifier si le nombre est un multiple de 3
        elseif ($i % 3 == 0) {
            echo "Fizz<br>";
        }
        // Vérifier si le nombre est un multiple de 5
        elseif ($i % 5 == 0) {
            echo "Buzz<br>";
        }
        // Afficher le nombre si aucune des conditions ci-dessus n'est remplie
        else {
            echo $i . "<br>";
        }
    }
    ?>
</body>
</html>
