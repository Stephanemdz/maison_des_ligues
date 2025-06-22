<?php
require_once 'config.php';
//fonction pour afficher tous les user
 function myUser($connexion){
    $query = "SELECT * FROM User"; // Il va aller recupérer tous les users sur la base de données.
    $statement = $connexion->prepare($query);
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
 }
function myMission($connexion){
    $query = "SELECT * FROM mission"; // Il va aller recupérer tous les missions sur la base de données.
    $statement = $connexion->prepare($query);
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
 }
 function myContract($connexion){
    $query = "SELECT * FROM contract"; // Il va aller recupérer tous les contrats sur la base de données.
    $statement = $connexion->prepare($query);
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
 }


 ?>