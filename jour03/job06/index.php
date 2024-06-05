<?php
function leetSpeak($str) {
    // Tableau de correspondance que l'on crie ou pas comme demandé maj et min
    $leet = array(
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    );

    // Parcourir la chaîne et remplacer les caractères
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (isset($leet[$char])) {
            $result .= $leet[$char];
        } else {
            $result .= $char;
        }
    }

    return $result;
}

// Exemple d'appel de la fonction
$str = "BonJour a tousSs ceci est un Test";
echo leetSpeak($str);
?>
