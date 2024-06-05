<?php
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Erreur: Division par zéro";
            }
        case '%':
            if ($nombre2 != 0) {
                return $nombre1 % $nombre2;
            } else {
                return "Erreur: Division par zéro";
            }
        default:
            return "Erreur: Opération invalide";
    }
}

// Exemple d'appels de la fonction
echo calcule(10, '+', 5);  
echo "<br>";
echo calcule(10, '-', 5); 
echo "<br>";
echo calcule(10, '*', 5);  
echo "<br>";
echo calcule(10, '/', 5); 
echo "<br>";
echo calcule(10, '%', 5);  
echo "<br>";
echo calcule(10, '/', 2);  

?>
