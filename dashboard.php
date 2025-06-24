<?php
include_once __DIR__.'/controller/baseController.php';
include_once __DIR__.'/model/config.php';
include_once __DIR__.'/model/model.php';
include_once __DIR__.'/model/verify.php';
    
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
        <a href="logout.php">Se déconnecter</a>
    </header>
    <main>
        <section class="acceuil">
            <h2>
                Bienvenue sur la base de données ITIC PARIS
            </h2>
            <p>
                Dans le tableau qui suit vous trouverez la liste des professeurs et les missions qui leur sont
                confiés par l'etablissement.
            </p>
        </section>
        <section class="usermission">
            <h2>
                Voici les missions
            </h2>
            <table>
                <thead>
                    <tr>
                        <th>Numero</th>
                        <th>titre de la mission</th>
                        <th>description</th>
                    </tr>
                </thead>
                <?php
                $top10 = myMission($PDO);
                foreach($mission as $column):?>
                <tbody>
                    <tr>
                        <?=
                    "<td>".($column['id_mission'])."</td>
                    <td>".($column['title'])."</td>
                    <td>".($column['description'])."</td>"
                    ?>
                    </tr>
                </tbody>
                <?php   endforeach;?>
            </table>
        </section>
        <section class="AjoutDeMission">
            <button>
                <a href="addmission.php">Ajouter une mission</a>
            </button>
        </section>
    </main>
</body>
</html>