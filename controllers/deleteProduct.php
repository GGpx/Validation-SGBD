<?php
// Contrôlleur pour la suppression d'un produit en BDD
$id = $_POST['id'];

//DELETE AN PRODUCT
$user = 'root';
$pass = '0000';
try {
$bdd = new PDO('mysql:host=localhost;dbname=products;charset=utf8', $user, $pass);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$donnees = $bdd->prepare("DELETE FROM product WHERE id='$id'");
$donnees->execute();
} catch (Exception $e) {
die('Erreur : ' . $e->getMessage());
}

header('Location: ../views/frontProducts.php');