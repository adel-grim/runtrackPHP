<?php
// Vérifiez si le cookie nbVisites existe
if (!isset($_COOKIE['nbVisites'])) {
    // Si le cookie n'existe pas, initialisez-le à 0
    setcookie('nbVisites', 0, time() + 3600);
    $nbVisites = 0;
} else {
    // Si le cookie existe, incrémentez sa valeur
    $nbVisites = (int)$_COOKIE['nbVisites'] + 1;
    setcookie('nbVisites', $nbVisites, time() + 3600);
}

// Réinitialisez le compteur si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    setcookie('nbVisites', 0, time() + 3600 * 24 * 30); // Réinitialise le cookie
    $nbVisites = 0;
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de Visites avec Cookies</title>
</head>
<body>
    <h1>Compteur de Visites avec Cookies</h1>
    <p>Nombre de visites : <?php echo $nbVisites; ?></p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
