<?php
require_once('../controllers/ProduitController.php');
require_once('../models/Produit.php');


$libelle = $_POST['libelle'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$quantite = $_POST['quantite'];
$img = $_POST['img'];

$pro = new Produit($libelle, $description, $prix, $quantite, $img);

$ProCtr = new ProduitController();

$res = $ProCtr->insert($pro);

if ($res == true) {
    header('Location: ../admin/dashboard.php');
} else {
    echo "Erreur lors de l'ajout du Produit.";
}
?>
