<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire test job 05</title>
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

<h2 style="text-align:center;">Formulaire test job 05</h2>
<form method="POST" action="">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Se connecter">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'John' && $password === 'Rambo') {
        echo '<p class="message">Ce n\'est pas ma guerre</p>';
    } else {
        echo '<p class="message">Votre pire cauchemar</p>';
    }
}
?>

</body>
</html>
