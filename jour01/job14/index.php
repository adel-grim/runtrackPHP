<?php
// Définition de la fonction pour convertir en Leet Speak
function toLeetSpeak($str) {
    // Tableau associatif des substitutions Leet Speak
    $leetSubstitutions = array(
        'a' => '4',
        'e' => '3',
        'l' => '1',
        'o' => '0',
        's' => '5',
        't' => '7'
    );

    // Convertir la chaîne en minuscules pour éviter les problèmes de casse
    $str = strtolower($str);

    // Parcourir la chaîne de caractères et appliquer les substitutions Leet Speak
    foreach ($leetSubstitutions as $key => $value) {
        $str = str_replace($key, $value, $str);
    }

    // Retourner la chaîne convertie en Leet Speak
    return $str;
}

// Test de la fonction avec une chaîne de caractères
echo toLeetSpeak("I love Zimmerman");
?>
