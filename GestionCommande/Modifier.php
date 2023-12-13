<?php
require_once('../controllers/CommandeController.php');
require_once('../models/Commande.php');
$CommandeCtr=new CommandeController();
$Commande=new Commande();

$Commande->setIdCommande($_POST['idCommande']);
$Commande->setCinCli($_POST['CinCli']);
$Commande->setIdProd($_POST['idProd']);
$Commande->setDateCommande($_POST['dateCommande']);
$Commande->setTotal($_POST['total']);
$Commande->setStatut($_POST['statut']);
$Commande->setModePaiement($_POST['modePaiement']);
$Commande->setAdresseLivraison($_POST['adresseLivraison']);
$Commande->setDateLivraison($_POST['dateLivraison']);



$CommandeCtr->modifier_commande($Commande);
header('Location: ../Admin/dashboard.php');

?>