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

// Récupérer les données de la table "salle"
try {
    $stmt = $pdo->query("SELECT nom, capacite FROM salle");
    $salles = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur de requête : " . $e->getMessage();
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des salles</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
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
    <h1>Liste des salles</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($salles) > 0): ?>
                <?php foreach ($salles as $salle): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($salle['nom']); ?></td>
                        <td><?php echo htmlspecialchars($salle['capacite']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="2">Aucune salle trouvée.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
