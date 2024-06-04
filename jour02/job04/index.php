<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des données POST</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Formulaire</h2>
<form method="POST" action="">
    <label for="nom">Nom :</label><br>
    <input type="text" id="nom" name="nom"><br><br>
    <label for="email">Email :</label><br>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="Envoyer">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<h2>Données reçues via POST</h2>';
    echo '<table>';
    echo '<tr><th>Argument</th><th>Valeur</th></tr>';
    foreach ($_POST as $key => $value) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($key) . '</td>';
        echo '<td>' . htmlspecialchars($value) . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>

</body>
</html>
