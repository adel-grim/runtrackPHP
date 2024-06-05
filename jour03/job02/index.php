<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Exemple d'appels de la fonction
bonjour(true);  // affiche bonjour
echo "<br>";    // separation
bonjour(false); // affiche bonsoir
?>
