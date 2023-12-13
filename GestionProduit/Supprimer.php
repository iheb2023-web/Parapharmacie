<?php
require_once('../controllers/ProduitController.php');
$ProduitCtr=new ProduitController();
$ProduitCtr->delete(($_GET['idProd']));

$ProduitCtr->deleteT($_POST['cin']);

header('Location: ../Admin/dashboard.php');
?>

