<?php
require_once('../controllers/ProduitController.php');
require_once('../models/Produit.php');
$ProduitCtr=new ProduitController();
$Produit=new Produit();

$Produit->setIdProd($_POST['idProd']);
$Produit->setLibelle($_POST['libelle']);
$Produit->setDescription($_POST['desc']);
$Produit->setPrix($_POST['prix']);
$Produit->setQuantite($_POST['qt']);
$Produit->setImg($_POST['img']);


$ProduitCtr->modifier_produit($Produit);
header('Location: ../Admin/dashboard.php');

?>