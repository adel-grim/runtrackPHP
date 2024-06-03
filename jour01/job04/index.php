<?php
    // Boucle pour afficher les nombres de 0 à 1337
    for ($i = 0; $i <= 1337; $i++) {
        // Vérifier si le nombre est 42
        if ($i == 42) {
            // Afficher le nombre 42 en gras et souligné
            echo "<span class='quarante-deux'>$i</span><br>";
        } else {
            // Afficher les autres nombres
            echo $i . "<br>";
        }
    }
    ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 04</title>
    <style>
        .quarante-deux {
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>
<body>