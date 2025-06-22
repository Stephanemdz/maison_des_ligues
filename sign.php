<?php
    include_once __DIR__.'/controller/baseController.php';
    include_once __DIR__.'/model/config.php';
    include_once __DIR__.'/model/model.php';
?>
<?php 
        if(!empty($_POST['email']) AND !empty($_POST['password'])){
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $birthdate = htmlspecialchars($_POST['birthdate']);
            $email = htmlspecialchars($_POST['email']);
            $password = sha1($_POST['password']);
            
     
           $requete = $PDO->prepare('INSERT INTO user (firstname, lastname, birthdate, email, password) VALUES (?,?,?,?,?)');
           $requete->execute(array($firstname, $lastname, $birthdate, $email, $password));
            // $requete->debugDumpParams();
           if($requete->rowCount() > 0){
            die("Félicitations, bien venu parmi nous petit monstre coquin...");
           }else{
            echo "Bouge toi un peu le cul la soit plus précis.....";
           }
        }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="favicon/logo_m2L.png">
    <title>Projet M2L</title>
</head>
<body>
<header>
        <h1>
            <a href="index.php">
                M2L INTERFACE ITIC PARIS
            </a>
        </h1>
        <nav>
        <a href="index.php">Accueil</a>
        <?php if(isset($user)):?>
        <a href="logout.php">Se deconnecter</a>
        <?php else :?>
        <a href="login.php">Login</a>
        <a href="sign.php">Sign up</a>
        <?php endif;?>
        </nav>
    </header>
    <main>
        <!-- côté image de l'interface -->
        <section class="form">
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
        <!-- côté form de l'interface -->
        <fieldset>
            <legend>Inscription</legend>
            <form method="post" action="">
                <label for="civilite">Civilité :</label><br>
                    <select id="civilite" name="civilite">
                      <option value="Monsieur">Monsieur</option>
                      <option value="Madame">Madame</option>
                      <option value="Autre">Autre</option>
                    </select><br><br>
                <label for="firstname">Prenom:</label><br>
                
                <input type="text" id="firstname" name="firstname" autocomplete="off" required>   <br> 

                <label for="lastname">Nom:</label><br>
                <input type="text" id="lastname" name="lastname" autocomplete="off" required>    <br>

                <label for="birthdate">Date de naissance:</label><br>
                <input type="date" id="birthdate" name="birthdate" autocomplete="off" required> <br> 

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" autocomplete="off" required>   <br>

                <label for="password">Mot de passe :</label> <br>
                <input type="password" id="password" name="password" autocomplete="off" required> <br>

                <input type="submit" name ="envoi">
            </form>
        </fieldset>
        </section>
    </main>
    <footer>
        &copy; - MODZINU Stéphane - 2025
    </footer>
</body>
</html>