<?php
//FONCTION QUI PERMET DE CRéER UN UTILISATEUR DANS LA BASE DE DONNéE

$userPseudo = (!empty($_POST['pseudoU'])) ? $_POST['pseudoU'] : '';
$userPass = (!empty($_POST['passwordU'])) ? $_POST['passwordU'] : '';

$user = 'root';
$pass = '0000';
$bdd = new PDO('mysql:host=localhost;dbname=products;charset=utf8', $user, $pass);
try {
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(($userPseudo !== '')&&($userPass !== '')){
        $donnees = $bdd->prepare("INSERT INTO users (pseudo, password) VALUES ('$userPseudo','$userPass')");
        $donnees->execute();
        header ('Location: ../../');
    } else {
        header('Location: ../../views/createSession.php');
    }
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

