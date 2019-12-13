<?php
// Contrôlleur pour la création d'un produit en BDD
$user = 'root';
$pass = '0000';
$bdd = new PDO('mysql:host=localhost;dbname=products;charset=utf8', $user, $pass);


//CREATE AN PRODUCT
$name = (!empty($_POST['nameP'])) ? $_POST['nameP'] : '';
$date = (!empty($_POST['dateP'])) ? $_POST['dateP'] : '';
$description = (!empty($_POST['descriptionP'])) ? $_POST['descriptionP'] : '';

try {
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $donnees = $bdd->prepare("INSERT INTO product (nameP, dateP ,descriptionP) VALUES (:nameP, :dateP, :descriptionP)");
    $donnees->bindParam(':nameP', $name);
    $donnees->bindParam(':dateP', $date);
    $donnees->bindParam(':descriptionP', $description);

    $donnees->execute();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
header('Location: ../views/frontProducts.php');
