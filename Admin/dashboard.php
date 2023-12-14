<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styeles.css" />
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>ParaSante</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                        <a href="../CoteClient/home.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                            class="fas fa-paperclip me-2"></i>Accueil</a>
                <a href="#cli" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" data-bs-toggle="collapse" aria-expanded="false"><i class="fas fa-project-diagram me-2" ></i>Gestion des Clients</a>
                        <div class="collapse" id="cli">
                            <a href="../GestionClient/AjouterPatient.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                Ajouter Client
                            </a>
                            <a href="../GestionClient/ModifierClientht.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                Modifier Client
                            </a>
                            <a href="../GestionClient/SupprimerClient.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                Supprimer Client
                            </a>
                            <a href="../GestionClient/RechercherCl.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                Chercher Client
                            </a>
                        </div>
                        <a href="#pro" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" data-bs-toggle="collapse" aria-expanded="false"><i class="fas fa-shopping-cart me-2" ></i>Gestion des Produits</a>
                        <div class="collapse" id="pro">
                            <a href="../gestionProduit/AjouterProd.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                Ajouter Produit
                            </a>
                            <a href="../gestionProduit/ModifierProd.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                Modifier Produit
                            </a>
                            <a href="../gestionProduit/SupprimerProd.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                Supprimer Produit
                            </a>
                            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                Chercher Produit
                            </a>
                        </div>
                        <a href="#cmd" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" data-bs-toggle="collapse" aria-expanded="false"><i class="fas fa-gift me-2" ></i>Gestion des Commandes</a>
                        <div class="collapse" id="cmd">
                            <a href="../GestionCommande/AjouterCmd.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                Ajouter Commande
                            </a>
                            <a href="../GestionCommande/ModifierCmd.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                Modifier Commande
                            </a>
                            <a href="../GestionCommande/Supprimer.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                Supprimer Commande
                            </a>
                            
                        </div>
               
                <a href="reclamation.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Contact</a>
                
                <a href="../CoteClient/home.html" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Deconnexion</a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Iheb deruich
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="../CoteClient/home.html">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <?php 
                                require_once(".../controllers/ProduitController.php");
                                require_once(".../models/Produit.php");
                                $produitController = new ProduitController();
                                $produits = $produitController->liste(); 
                                foreach ($produits as $index => $produit){ 
                                    $i+=1;
                                    }?>
                                <h3 class="fs-2"><?php echo $i; ?></h3>
                                <p class="fs-5">Produits</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                            <?php 
                                require_once(".../controllers/CommandeController.php");
                                require_once(".../models/Commande.php");
                                $produitController = new CommandeController();
                                $produits = $produitController->liste(); 
                                foreach ($produits as $index => $produit){ 
                                    $i+=1;
                                    }?>
                                <h3 class="fs-2"><?php echo $i; ?></h3>
                                <p class="fs-5">Vendre</p>
                            </div>
                            <i
                                class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3 "></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
    <?php 
        require_once(".../controllers/CommandeController.php");
        require_once(".../models/Commande.php");
        
        $commandeController = new CommandeController();
        $commandes = $commandeController->liste(); 

        $total = 0; 

        foreach ($commandes as $index => $commande) { 
            $total += $commande['total']; 
        }
    ?>
    <h3 class="fs-2"><?php echo $total; ?></h3>
    <p class="fs-5">Budget</p>
</div>
                            <i class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%25</h3>
                                <p class="fs-5">Augmenter</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

<?php
require_once(".../controllers/ProduitController.php");
require_once(".../models/Produit.php");
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
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produits as $index => $produit) { ?>
                    <tr>
                        <th scope="row"><?php echo $index + 1; ?></th>
                        <td><?php echo $produit['libelle']; ?></td>
                        <td><?php echo $produit['description']; ?></td>
                        <td><?php echo $produit['prix']; ?></td>
                        <td><a class="btn btn-danger" href="../GestionProduit/Supprimer.php?idProd=<?php echo $produit['idProd']; ?>"><img src="../assests/delete.png" height="32" width="32"></a>
                        <a class="btn btn-warning" href="../GestionProduit/ModifierProd.php?idProd=<?php echo $produit['idProd']; ?>"><img src="../assests/edit.png" height="32" width="32" ></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
require_once('.../controllers/ClientController.php');
require_once('.../models/Client.php');
$produitController = new ClientController();
$produits = $produitController->liste();
?>
<div class="row my-5">
    <h3 class="fs-4 mb-3">Liste des Clients</h3>
    <div class="col">
        <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Cin</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Naissance</th>
                    <th scope="col">Num Dossier</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produits as $index => $produit) { ?>
                    <tr>
                        <th scope="row"><?php echo $index + 1; ?></th>
                        <td><?php echo $produit['cin']; ?></td>
                        <td><?php echo $produit['nom']; ?></td>
                        <td><?php echo $produit['prenom']; ?></td>
                        <td><?php echo $produit['adresse']; ?></td>
                        <td><?php echo $produit['datenaiss']; ?></td>
                        <td><?php echo $produit['numdossier']; ?></td>
                        <td><a class="btn btn-danger" href="../GestionClient/Supprimer.php?cin=<?php echo $produit['cin']; ?>"><img src="../assests/delete.png" height="32" width="32"></a>
                        <a class="btn btn-warning" href="../GestionClient/ModifierClientht.php?cin=<?php echo $produit['cin']; ?>"> <img src="../assests/edit.png" height="32" width="32" ></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
require_once(".../controllers/CommandeController.php");
require_once(".../models/Commande.php");
$CommandeController = new CommandeController();
$commandes = $CommandeController->liste();

require_once(".../controllers/ProduitController.php");
require_once(".../models/Produit.php");
$produitController = new ProduitController();

require_once('.../controllers/ClientController.php');
require_once('.../models/Client.php');
$ClientController = new ClientController();

?>
<div class="row my-5">
    <h3 class="fs-4 mb-3">Liste des Commandes</h3>
    <div class="col">
        <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">CinCli</th>
                    <th scope="col">NomCli</th>
                    <th scope="col">NomProd</th>
                    <th scope="col">idProd</th>
                    <th scope="col">Date Commande</th>
                    <th scope="col">Total</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Mode de Paiement</th>
                    <th scope="col">Adresse Livraison</th>
                    <th scope="col">Date Livraison</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($commandes as $index => $commande) { 
                    $Client = $ClientController->getClient($commande['CinCli']);
                    $produits = $produitController->getProduitAff($commande['idProd']);?>
                    <tr>
                        <th scope="row"><?php echo $index + 1; ?></th>
                        <td><?php echo $commande['CinCli']; ?></td>
                        <td><?php echo $Client['nom']; ?></td>
                        <td><?php echo $produits['libelle']; ?></td>
                        <td><?php echo $commande['idProd']; ?></td>
                        <td><?php echo $commande['dateCommande']; ?></td>
                        <td><?php echo $commande['total']; ?></td>
                        <td><?php echo $commande['statut']; ?></td>
                        <td><?php echo $commande['modePaiement']; ?></td>
                        <td><?php echo $commande['adresseLivraison']; ?></td>
                        <td><?php echo $commande['dateLivraison']; ?></td>
                        <td>
                            <a class="btn btn-danger" href="../GestionCommande/SupprimerCmd.php?idCommande=<?php echo $commande['idCommande']; ?>">
                                <img src="../assests/delete.png" height="32" width="32">
                            </a>
                            <a class="btn btn-warning" href="../GestionCommande/ModifierCmd.php?idCommande=<?php echo $commande['idCommande']; ?>">
                                <img src="../assests/edit.png" height="32" width="32">
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</div>
 </div>
    </div>
   
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>
