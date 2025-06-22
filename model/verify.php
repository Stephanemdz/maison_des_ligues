<?php

include_once __DIR__.'/user.php';
    if(isset($_SESSION['userid'])){
        $requete = $PDO->prepare('SELECT * FROM user WHERE  id_user = ?');
        if($requete->execute(array($_SESSION['userid'])) && $requete->rowCount() == 1){
        $userfetch = $requete -> fetch();
        $user = new user($userfetch['id_user'], $userfetch['firstname'], $userfetch['lastname']);
        // var_dump ($userfetch);
        // echo $user->id_user, 
        // $user->firstname, $user->lastname ;
            } 
    }

?>