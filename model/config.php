<?php
session_start();
    // Grâce  a ça on va se connecter a la base de données. 
$servername = 'localhost';
$dbname = 'itic_paris';
$username = 'root';
$password = '';
$PDO = null;
$user = null;
try {
    $PDO = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $PDO->exec("set names utf8");

    
 }
  catch (PDOException $e) {
    die("Connection impossible : " . $e->getMessage());
 }

 