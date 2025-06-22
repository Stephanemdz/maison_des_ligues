<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maison_des_ligues";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $description = $_POST['description'];

    // Insérer les données dans la table mission (ID auto-incrémenté)
    $sql = "INSERT INTO mission (titre, description) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $titre, $description);

    if ($stmt->execute()) {
        echo "Mission ajoutée avec succès.";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Ajouter une mission</h1>
    <form method="POST" action="">
        <label for="titre">Titre de la mission :</label>
        <input type="text" id="titre" name="titre" required><br><br>

        <label for="description">Description de la tâche :</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>