<!--Vue de la suppression d'un produit en BDD-->
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
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="display-4">Suppression de produits</h2>
        </div>
    </div>
    <table>
        <tr>
            <th>Nom du produit</th>
            <th>Date de production</th>
            <th>Description du produit</th>
            <th>Suppression</th>
        </tr>
        <?php
        include_once '../controllers/readProduct.php';
        foreach ($allProducts as $key => $allProduct) {
            ?>
            <div id="button">
                <tr>
                    <td><?php echo $allProduct['nameP'] ?></td>
                    <td><?php echo $allProduct['dateP'] ?></td>
                    <td><?php echo $allProduct['descriptionP'] ?></td>
                    <td>
                        <form action="../controllers/deleteProduct.php" method="POST">
                            <input type="hidden" name="id" value=<?php echo $allProduct['id'] ?>>
                            <input type="submit" value="Supprimer">
                        </form>
                    </td>
                </tr>
            </div>
            <?php
        }
        ?>
    </table>
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
</html>