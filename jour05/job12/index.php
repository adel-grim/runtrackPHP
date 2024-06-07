<?php
$host = 'localhost'; // Nom d'hôte
$dbname = 'jour05'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur de la base de données
$password = ''; // Mot de passe de la base de données (laisser vide si vous n'en avez pas)

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit();
}

// Sélectionner l'ensemble des informations des salles et les trier par capacité décroissante
try {
    $stmt = $pdo->query("SELECT * FROM salle ORDER BY capacite ASC");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur de requête : " . $e->getMessage();
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Informations des salles (triées par capacité décroissante)</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
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
    <h1 style="text-align: center;">Informations des salles (triées par capacité décroissante)</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Capacité</th>
                
            </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row): ?>
    <tr>
        <td><?php echo isset($row['id']) ? htmlspecialchars($row['id']) : ''; ?></td>
        <td><?php echo isset($row['nom']) ? htmlspecialchars($row['nom']) : ''; ?></td>
        <td><?php echo isset($row['capacite']) ? htmlspecialchars($row['capacite']) : ''; ?></td>
        
    </tr>
<?php endforeach; ?>

        </tbody>
    </table>
</body>
</html>
