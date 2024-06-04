<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification du Nombre</title>
    <style>
        form {
            width: 300px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        label, input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            width: auto;
            cursor: pointer;
        }
        .message {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Vérification du Nombre</h2>
<form method="GET" action="">
    <label for="nombre">Entrez un nombre :</label>
    <input type="number" id="nombre" name="nombre" required>
    <input type="submit" value="Vérifier">
</form>

<?php
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

    if (is_numeric($nombre)) {
        if ($nombre % 2 == 0) {
            echo '<p class="message">Nombre pair</p>';
        } else {
            echo '<p class="message">Nombre impair</p>';
        }
    } else {
        echo '<p class="message">Veuillez entrer un nombre valide</p>';
    }
}
?>

</body>
</html>
