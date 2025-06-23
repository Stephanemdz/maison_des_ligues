<?php
    include_once __DIR__.'/controller/baseController.php';
    include_once __DIR__.'/model/config.php';
    include_once __DIR__.'/model/model.php';
    include_once __DIR__.'/model/verify.php';
// echo $_SESSION['userid'];
// var_dump($_SESSION['userid']);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>      
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE ITIC PROJECT</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./favicon/logo_m2L.png">
</head>
<body>
    <header>
        <h1>
            <a href="index.php">
                M2L INTERFACE ITIC PARIS
            </a>
        </h1>
    </header>
    <main>
        <section class="acceuil">
            <div class="imga" id="imga">
                <img src="asset/ai.jpg" alt="Image d'accueil">
                    <p>
                        <strong>
                            Bienvenue à la maison des ligues
                        </strong><br>
                        Bienvenue à la Maison des Ligues ! Découvrez notre plateforme intuitive, conçue pour optimiser la 
                        gestion de notre compagnie. Explorez nos outils et ressources interactives pour une expérience 
                        fluide et enrichissante.
                    </p>
                </div>
            </section>
            <nav>
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="sign.php">Sign up</a></li>
                </ul>
            </nav>
        </main>
    </body>
    </html>