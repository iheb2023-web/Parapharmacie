<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once('../controllers/ProduitController.php');
require_once('../models/Produit.php');
$produitController = new ProduitController();
$produits = $produitController->liste();
?>
<div class="row my-5">
    <h3 class="fs-4 mb-3">Liste des Produits</h3>
    <div class="col">
        <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produits as $index => $produit) { ?>
                    <tr>
                        <th scope="row"><?php echo $index + 1; ?></th>
                        <td><?php echo $produit['libelle']; ?></td>
                        <td><?php echo $produit['description']; ?></td>
                        <td><?php echo $produit['prix']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>