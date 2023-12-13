<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styeles.css" />
    <title>Reclamation</title>
    <style>
        body {
    overflow-x: hidden;
    background: linear-gradient(to right, #a8ff78, #78ffd6);
  }
    </style>
</head>

<body>
<?php
require_once(".../controllers/ReclController.php");
require_once(".../models/Recl.php");
$produitController = new ReclController();
$produits = $produitController->liste();
?>
<div class="row my-5">
    <h3 class="fs-4 mb-3">Liste des Reclamations</h3>
    <div class="col">
        <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produits as $index => $produit) { ?>
                    <tr>
                        <th scope="row"><?php echo $index + 1; ?></th>
                        <td><?php echo $produit['nom']; ?></td>
                        <td><?php echo $produit['mail']; ?></td>
                        <td><?php echo $produit['message']; ?></td>
                        <td><a class="btn btn-danger" href="Supprimer.php?nom=<?php echo $produit['nom']; ?>"><img src="../CoteClient/assets/images/delete.png" height="32" width="32"></a>
                        </td>
                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>