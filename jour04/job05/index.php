<?php
session_start();


if (!isset($_SESSION['grille']) || isset($_POST['reset'])) {
    $_SESSION['grille'] = array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['tour'] = 'X';
    $_SESSION['message'] = '';
}

// Gérer les clics sur les boutons de la grille
if (isset($_POST['cell'])) {
    $cell = explode(',', $_POST['cell']);
    $row = $cell[0];
    $col = $cell[1];
    
    if (!isset($_SESSION['grille'][$row][$col]) || $_SESSION['grille'][$row][$col] === '-') {
        $_SESSION['grille'][$row][$col] = $_SESSION['tour'];
        $_SESSION['tour'] = $_SESSION['tour'] === 'X' ? 'O' : 'X';
    }
    
    // Vérifier les conditions de victoire
    $winner = check_winner($_SESSION['grille']);
    if ($winner) {
        $_SESSION['message'] = "$winner a gagné!";
    } elseif (check_draw($_SESSION['grille'])) {
        $_SESSION['message'] = "Match nul!";
    }
}



// Fonction pour vérifier les conditions de victoire
function check_winner($grille) {
   
    for ($i = 0; $i < 3; $i++) {
        if ($grille[$i][0] !== '-' && $grille[$i][0] === $grille[$i][1] && $grille[$i][1] === $grille[$i][2]) {
            return $grille[$i][0];
        }
    }
    
    // Vérifier les colonnes
    for ($i = 0; $i < 3; $i++) {
        if ($grille[0][$i] !== '-' && $grille[0][$i] === $grille[1][$i] && $grille[1][$i] === $grille[2][$i]) {
            return $grille[0][$i];
        }
    }
    
    // Vérifier les diagonales
    if ($grille[0][0] !== '-' && $grille[0][0] === $grille[1][1] && $grille[1][1] === $grille[2][2]) {
        return $grille[0][0];
    }
    if ($grille[0][2] !== '-' && $grille[0][2] === $grille[1][1] && $grille[1][1] === $grille[2][0]) {
        return $grille[0][2];
    }
    
    return null;
}

// Fonction pour vérifier le match nul
function check_draw($grille) {
    foreach ($grille as $row) {
        if (in_array('-', $row)) {
            return false;
        }
    }
    return true;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 50px 0;
        }
        td {
            border: 1px solid black;
            width: 200px;
            height: 200px;
            text-align: center;
            font-size:70px;
            color: red;
        }
        button {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>
    <?php if (!empty($_SESSION['message'])): ?>
        <h2><?php echo $_SESSION['message']; ?></h2>
    <?php endif; ?>
    <form method="post">
        <table>
            <?php if (isset($_SESSION['grille'])): ?>
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <tr>
                        <?php for ($j = 0; $j < 3; $j++): ?>
                            <td>
                                <?php if ($_SESSION['grille'][$i][$j] === '-'): ?>
                                    <button type="submit" name="cell" value="<?php echo "$i,$j"; ?>">-</button>
                                <?php else: ?>
                                    <?php echo $_SESSION['grille'][$i][$j]; ?>
                                <?php endif; ?>
                            </td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            <?php endif; ?>
        </table>
        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>
</body>
</html>
