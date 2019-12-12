<?php
session_start();

if (!isset($_SESSION['pseudo']) && (!isset($_SESSION['password']))) {
    header('location:../controllers/login/login.php');
}
