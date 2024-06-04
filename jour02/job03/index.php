<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST en PHP</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Compter le nombre d'arguments POST
        $num_args = count($_POST);
        echo "<p>Nombre d'arguments POST : " . $num_args . "</p>";
        
        // Optionnel : Afficher les arguments POST
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    } else {
        // Afficher le formulaire
        echo '<form action="" method="POST">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="age">Âge:</label>
            <input type="number" id="age" name="age"><br><br>
            <input type="submit" value="Envoyer">
        </form>';
    }
    ?>
</body>
</html>
