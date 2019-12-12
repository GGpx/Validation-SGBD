<?php
function resultUsers(){
    $user = 'root';
    $pass = '0000';
    $bdd = new PDO('mysql:host=localhost;dbname=products;charset=utf8', $user, $pass);
    try {
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $donnees = $bdd->prepare("SELECT * FROM users");
        $donnees->execute();
        return $donnees->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
$resultUsers = resultUsers();