<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i >= 0 && $i <= 20) {
        // Écrire en italique
        echo "<i>$i</i>"; 
    } elseif ($i === 42) {
        // Afficher "La Plateforme" à la place de 42
        echo "La Plateforme";
    } elseif ($i >= 25 && $i <= 50) {
        // Souligner le nombre
        echo "<u>$i</u>";
   
    } else {
        echo $i;
    }
    echo "<br>";
}
?>
