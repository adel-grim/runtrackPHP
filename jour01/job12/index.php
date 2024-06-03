<?php
// Définition de la fonction calcule()
function calcule($nombre1, $operateur, $nombre2) {
    // Vérifier le type d'opération et effectuer le calcul correspondant
    switch ($operateur) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
                return $nombre1 / $nombre2;
                
        case '%':
             return $nombre1 % $nombre2;        
           
    }
}

// Appels de la fonction calcule() avec "+ - * ect"
echo "10 + 2 = " . calcule(10, '+', 2) . "<br>";
echo "20 - 4 = " . calcule(20, '-', 4) . "<br>";
echo "6 * 9 = " . calcule(6, '*', 9) . "<br>";
echo "15 / 8 = " . calcule(15, '/', 8) . "<br>";
 echo "7 % 9 = " . calcule(7, '%',9) . "<br>" ;
?>
