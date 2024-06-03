<?php
// Définition de la fonction bonjour() avec un paramètre booléen $jour
function bonjour($jour) {
    // Vérification de la valeur du paramètre $jour
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Appels de la fonction bonjour() avec différents arguments
echo " true : ";
bonjour(true); // Appel avec true
echo "<br>";

echo " false : ";
bonjour(false); // Appel avec false
?>
