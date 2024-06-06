<?php
session_start();

// Initialiser la variable nbVisites s'il n'existe pas
if (!isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites'] = 0;
}

// Incrémenter le compteur de visites
$_SESSION['nbVisites']++;

// Réinitialiser le compteur si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de Visites</title>
</head>
<body>
    <h1>Compteur de Visites</h1>
    <p>Nombre de visites : <?php echo $_SESSION['nbVisites']; ?></p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
