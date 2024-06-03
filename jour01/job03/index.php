<?php
// Définition des variables de types primitifs
$integerVar = 10;         // Entier
$floatVar = 14.5;         // Flottant
$stringVar = "La plateforme";     // Chaîne de caractères
$booleanVar = true;       // Booléen

// Tableau des variables avec leurs types, noms et valeurs
$variables = [
    ["type" => "integer", "name" => "integerVar", "value" => $integerVar],
    ["type" => "float", "name" => "floatVar", "value" => $floatVar],
    ["type" => "string", "name" => "stringVar", "value" => $stringVar],
    ["type" => "boolean", "name" => "booleanVar", "value" => $booleanVar ? 'true' : 'false']
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Variables Primitives</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Tableau des Variables Primitives</h1>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variables as $variable): ?>
                <tr>
                    <td><?php echo $variable['type']; ?></td>
                    <td><?php echo $variable['name']; ?></td>
                    <td><?php echo $variable['value']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
