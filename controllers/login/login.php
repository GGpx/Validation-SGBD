<?php
session_start();
include_once 'connexionUsers.php';

$userPseudo = (!empty($_POST['pseudoU'])) ? $_POST['pseudoU'] : '';
$userPass = (!empty($_POST['passwordU'])) ? $_POST['passwordU'] : '';

foreach ($resultUsers as $key => $resultUser){
    $_SESSION['pseudo'] = $resultUser['pseudo'];
    $_SESSION['password'] = $resultUser['password'];
    $sessionPseudo = $_SESSION['pseudo'];
    $sessionPass = $_SESSION['password'];

    if (($userPseudo == $sessionPseudo) && ($userPass = $sessionPass)) {
        header('location: ../../views/frontProducts.php');
    } else {
        header('location: ../../');
    }
}
