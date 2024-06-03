<?php
// Définition de la fonction occurrences()
function occurrences($str, $char) {
    // Initialisation du compteur d'occurrences
    $count = 0;
    
    // Parcourir la chaîne de caractères
    for ($i = 0; $i < strlen($str); $i++) {
        // Vérifier si le caractère actuel est égal à $char
        if ($str[$i] === $char) {
            // Incrémenter le compteur d'occurrences
            $count++;
        }
    }
    
    // Retourner le nombre d'occurrences
    return $count;
}

// Test de la fonction
$str = "asodzjofeovheohoauaaaaaaaaaaaaaaacjeojoejoaaaaaaaaaaauuuuuuuu";
$char = "a";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char);
?>
