<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET et Compteur</title>
</head>
<body>
    <?php
    // Initialiser le nombre d'arguments à zéro
    $nombre_arguments = 0;
    $afficher_resultat = false;

    // Vérifier si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty(array_filter($_GET))) {
        // Compter le nombre d'arguments dans $_GET
        $nombre_arguments = count(array_filter($_GET));
        $afficher_resultat = true;
    }
    ?>

    <form action="index.php" method="get">
        <label for="param1">Paramètre 1:</label>
        <input type="text" id="param1" name="param1"><br><br>

        <label for="param2">Paramètre 2:</label>
        <input type="text" id="param2" name="param2"><br><br>

        <label for="param3">Paramètre 3:</label>
        <input type="text" id="param3" name="param3"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    // Afficher le nombre d'arguments seulement si le formulaire a été soumis et qu'il y a des paramètres non vides
    if ($afficher_resultat) {
        echo "Nombre d'arguments GET: " . $nombre_arguments;
    }
    ?>
</body>
</html>