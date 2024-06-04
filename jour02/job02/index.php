<!DOCTYPE html>
<html>
<head>
    <title>Formulaire GET et Tableau des Arguments</title>
</head>
<body>

<?php
// Vérifier si des données ont été envoyées via GET
if (!empty($_GET)) {
    echo "<h1>Tableau des arguments GET</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    // Parcourir les arguments $_GET et les afficher dans un tableau
    foreach ($_GET as $key => $value) {
        if (isset($_GET[$key])) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($key) . "</td>";
            echo "<td>" . htmlspecialchars($value) . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
}
?>

<h1>Formulaire GET</h1>
<form action="" method="GET">
    <label for="param1">Paramètre 1:</label>
    <input type="text" id="param1" name="param1"><br><br>

    <label for="param2">Paramètre 2:</label>
    <input type="text" id="param2" name="param2"><br><br>

    <label for="param3">Paramètre 3:</label>
    <input type="text" id="param3" name="param3"><br><br>

    <input type="submit" value="Envoyer">
</form>

</body>
</html>
