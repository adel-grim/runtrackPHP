<?php
function occurrences($str, $char) {
    $count = 0;
    $length = strlen($str);

    // Parcourir chaque caractère de la chaîne
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] == $char) {
            $count++;
        }
    }

    return $count;
}

// Exemple d'appel de la fonction
$str = "sajodjzofhcvhhhhhhhhcxzodzoidofzifoidddddddddjjjjj";
$char = "d";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char);
?>
