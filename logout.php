<?php
        include_once __DIR__.'/model/config.php';
    if (isset($_POST['logout'])) {
        session_regenerate_id();
header('Location: index.php');
exit;
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="favicon/logo_m2L.png">
    <title>Deconnexion</title>
</head>
<body>
    <header>
        <h1>
            <a href="dashboard.php">
                M2L INTERFACE ITIC PARIS
            </a>
        </h1>
    <h2>
        Page de déconnexion
    </h2>
    <h2>Êtes-vous sûr de vouloir vous déconnecter ?</h2>
    <form method="post">
        <input type="submit" name="logout" value="Se déconnecter">
    </form>
</body>
</html>