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

// Sélectionner le nom des salles et le nom de leur étage
try {
    $stmt = $pdo->query("SELECT salle.nom AS nom_salle, etage.nom AS nom_etage FROM salle INNER JOIN etage ON salle.id_etage = etage.id");
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
    <title>Noms des salles et de leur étage</title>
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
    <h1 style="text-align: center;">Noms des salles et de leur étage</h1>
    <table>
        <thead>
            <tr>
                <th>Nom de la salle</th>
                <th>Nom de l'étage</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['nom_salle']); ?></td>
                <td><?php echo htmlspecialchars($row['nom_etage']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
