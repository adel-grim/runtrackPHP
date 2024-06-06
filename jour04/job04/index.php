<?php

session_start();

// Nom cookie
$cookie_name = "prenom";

// check si le bouton deco a été cliqué
if (isset($_POST['deco'])) {
    setcookie($cookie_name, '', time() - 3600); 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit;
}

// Vérifier si le formulaire de connexion a été soumis
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    setcookie($cookie_name, $prenom, time() + 3600); 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit;
}

// Vérifier si le cookie est déjà défini
$isConnected = isset($_COOKIE[$cookie_name]);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <?php if (!$isConnected): ?>
        <h1>Connexion</h1>
        <form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php else: ?>
        <h1>Bonjour <?php echo htmlspecialchars($_COOKIE[$cookie_name]); ?> !</h1>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
