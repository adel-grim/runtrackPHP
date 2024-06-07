<?php
$host = 'localhost'; 
$dbname = 'jour05'; 
$username = 'root'; 
$password = ''; 

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit();
}

// Récupérer les données des étudiants qui ont moins de 18 ans
try {
    $stmt = $pdo->query("SELECT * FROM etudiant WHERE YEAR(CURDATE()) - YEAR(naissance) < 18");
    $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur de requête : " . $e->getMessage();
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
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
    <h1>Liste des étudiants</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($etudiants) > 0): ?>
                <?php foreach ($etudiants as $etudiant): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($etudiant['id']); ?></td>
                        <td><?php echo htmlspecialchars($etudiant['prenom']); ?></td>
                        <td><?php echo htmlspecialchars($etudiant['nom']); ?></td>
                        <td><?php echo htmlspecialchars($etudiant['naissance']); ?></td>
                        <td><?php echo htmlspecialchars($etudiant['sexe']); ?></td>
                        <td><?php echo htmlspecialchars($etudiant['email']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">Aucun étudiant trouvé.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
