<?php
session_start();

// Initialiser la liste des prénoms en session si elle n'existe pas
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Ajouter un prénom à la liste des prénoms en session
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $_SESSION['prenoms'][] = $prenom;
}

// Réinitialiser la liste des prénoms en session
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
    header("Location: " . $_SERVER['PHP_SELF']); // Redirection pour éviter le repost du formulaire
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste de Prénoms</title>
</head>
<body>
    <h1>Ajouter un Prénom</h1>
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom" required>
        <button type="submit">Ajouter</button>
    </form>
    
    <h2>Liste des Prénoms</h2>
    <ul>
        <?php
        if (!empty($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo '<li>' . htmlspecialchars($prenom) . '</li>';
            }
        } else {
            echo '<li>Aucun prénom ajouté</li>';
        }
        ?>
    </ul>

    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
