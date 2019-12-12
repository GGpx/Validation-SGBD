<?php
    include 'controllers/login/sessionStart.php';
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Les Produits</title>
</head>
<body>
<main style="height: 100vh">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 style="text-align:center" class="display-4">Bienvenue !!</h1>
        </div>
    </div>
    <div class="connexion">
        <form action="controllers/login/login.php" method="POST">
            <div class="form-group">
                <label for="pseudoU">Pseudo/Email :</label>
                <input type="text" name="pseudoU" class="form-control">
            </div>
            <div class="form-group">
                <label for="passwordU">Mot de passe :</label>
                <input type="password" name="passwordU" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
    </div>
    <a href="#" class="buttonMagique" onclick="buttonHelp()"><p class='pButtonMagique'>CLIQUE ICI !! (John)</p></a>
</main>
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
<script>
let button = document.querySelector('.buttonMagique');
let pButton = document.querySelector('.pButtonMagique');
pButton.style.color="white";

function buttonHelp(){
    button = alert('Pseudo : gg  Mot de Passe : 123 ');
}
</script>
</html>