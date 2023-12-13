<?php
require_once('../controllers/CommandeController.php');
require_once('../models/Commande.php');


$CinCli = $_POST['cinCli'];
$idProd = $_POST['idProd'];
$dateCommande = $_POST['dateCommande'];
$total = $_POST['$total'];
$statut = $_POST['statut'];
$modePaiement=$_POST['modePaiement'];
$adresseLivraison=$_POST['adresseLivraison'];
$dateLivraison=$_POST['dateLivraison'];

$nomp=$_POST['nomP'];
$nomc=$_POST['nomC']

$pro = new Commande($CinCli,$nomc,$nomp, $idProd, $dateCommande, $total, $statut, $modePaiement, $adresseLivraison, $dateLivraison);

$ProCtr = new CommandeController();

$res = $ProCtr->insert($pro);

if ($res == true) {
    header('Location: ../Admin/dashboard.php');
} else {
    echo "Erreur lors de l'ajout du Commande.";
}
?>
