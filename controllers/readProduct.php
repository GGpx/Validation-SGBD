<?php
// Contrôlleur pour la lecture des produits en BDD
function getAllProducts(){
    $user = 'root';
    $pass = '0000';
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=products;charset=utf8', $user, $pass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $donnees = $bdd->prepare("SELECT * FROM product");
        $donnees->execute();
        return $donnees->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
$allProducts = getAllProducts();
