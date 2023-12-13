<?php
require_once('../controllers/ReclController.php');
$clientCtr=new ReclController();
$clientCtr->delete(($_GET['nom']));

header('Location: reclamation.php');
?>
