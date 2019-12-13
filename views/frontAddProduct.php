<?php
include_once '../controllers/login/sessionStart.php';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Les Produits</title>
</head>
<body>
<main style="height: 100vh">
    <?php
    include_once 'navBarBoostrap.php';
    ?>
<br>
<br>
<br>
<br>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2 class="display-4">Ajout d'un nouveau produit</h2>
    </div>
</div>
<br>
<br>
<div class="formulaire">
    <form action="../controllers/createProduct.php" method="POST">
        <div class="form-group">
            <label for="name">Nom du produit</label>
            <input type="text" name="nameP" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="date">Date de production</label>
            <input type="date" name="dateP" class="form-control" id="date">
        </div>
        <div class="form-group">
            <label for="description">Description du produit</label>
            <input type="text" name="descriptionP" class="form-control" id="description">
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Enregistrez</button>
    </form>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</html>
