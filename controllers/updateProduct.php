<?php

$id = (!empty($_POST['id'])) ? $_POST['id'] : '';
$name = (!empty($_POST['nameP'])) ? $_POST['nameP'] : '';
$date = (!empty($_POST['dateP'])) ? $_POST['dateP'] : '';
$description = (!empty($_POST['descriptionP'])) ? $_POST['descriptionP'] : '';

//Update AN PRODUCT
$user = 'root';
$pass = '0000';
try {
    $bdd = new PDO('mysql:host=localhost;dbname=products;charset=utf8', $user, $pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $donnees = $bdd->query("UPDATE product SET nameP='$name', dateP='$date', descriptionP='$description' WHERE id='$id'");
    $donnees->execute();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

header('Location: ../views/frontProducts.php');