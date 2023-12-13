<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits - Parapharmacie ParaSante</title>
    <!-- Inclure le fichier CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Barre de navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
    <div class="container">
    <a href=""><img src="./assets/images/logo.png" alt="logo" width="50" height="50"></a><a class="navbar-brand" href="#">Parapharmacie ParaSante</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.html">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <!-- Ajoutez le bouton pour la partie admin -->
                <li class="nav-item">
                    <a class="nav-link" href="../Admin/login.html">Admin</a>
                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0" action="recherche.php" method="post">
        <table>
            <tr>
                <td><input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="rech"></td>
                <td><button class="btn btn-dark my-2 my-sm-0" type="submit">chercher</button></td>
            </tr>
        </table>
        
          </form>
    </div>
</nav>
<br><br>
<!-- Contenu de la page -->
<div class="container mt-5">


<?php
require_once('../controllers/ProduitController.php');
require_once('../models/Produit.php');
$produitController = new ProduitController();
$produits = $produitController->liste();

?>

<div class="row">
    <?php foreach ($produits as $produit) { ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="./assets/images/<?php echo $produit['img']; ?>.webp" class="card-img-top" alt="<?php echo $produit['libelle']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produit['libelle']; ?></h5>
                    <p class="card-text"><?php echo $produit['description']; ?></p>
                    <a href="#" class="btn btn-primary">Acheter</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
    
    </div>

<!-- Inclure le fichier JS Bootstrap et les dependances (jQuery) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
