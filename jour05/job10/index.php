<?php
$host = 'localhost'; 
$dbname = 'jour05'; 
$username = 'root'; 
$password = ''; 


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit();
}

// Sélectionner la somme des capacités des salles
try {
    $stmt = $pdo->query("SELECT SUM(capacite) AS capacite_totale FROM salle");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur de requête : " . $e->getMessage();
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Capacité totale des salles</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Capacité totale des salles</h1>
    <table>
        <thead>
            <tr>
                <th>Capacite_totale</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo htmlspecialchars($result['capacite_totale']); ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
