<?php
require_once('../controllers/CommandeController.php');
$CommandeCtr=new CommandeController();
$CommandeCtr->delete(($_GET['idCommande']));
$CommandeCtr->delete(($_POST['idCommande']));
header('Location: ../Admin/dashboard.php');
?>
