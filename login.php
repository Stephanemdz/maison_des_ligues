<?php
    include_once __DIR__.'/controller/baseController.php';
    include_once __DIR__.'/model/config.php';
    include_once __DIR__.'/model/model.php';

     // Démarrer la session pour l'utilisateur

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = sha1($_POST['password']);

        $requete = $PDO->prepare('SELECT * FROM user WHERE email = ? AND password = ?');
        $requete->execute(array($email, $password));

        // Vérifier si un utilisateur correspond bien aux identifiants que j'ai entré
        if ($requete->rowCount() > 0) {
            $user = $requete->fetch();
            $_SESSION['userid'] = $user['id']; // Stocker l'ID utilisateur dans la session qui lui ai attribué
            $_SESSION['email'] = $user['email']; // Stocker l'email utilisateur dans la session qui .....

            // Redirection vers la page d'accueil après la connexion réussie
            header('Location: dashboard.php');
            exit();
        } else {
            echo "<p style='color:red;'>Email ou mot de passe incorrect.</p>";
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
                <!-- completer dans action le lien vers la connexion base de données -->
                <form class="form-container" action="" method="post" id="connexion-form">
                    <label for="email">Email :</label><br>
                    <input type="email" id="email" name="email" required><br><br>
                    <label for="mot_de_passe">Mot de passe :</label><br>
                    <input type="password" id="pasword" name="password" placeholder="12 caractères minimum"><br><br>
                    <button type="button" ><a href="index.html">Inscription</a></button>
                    <button type="submit">Soumettre</button>
                    </form>
            </fieldset>
        </section>
    </main>
    <footer>
        &copy; - MODZINU Stéphane - 2025
    </footer>
</body>
</html>