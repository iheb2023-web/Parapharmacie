<?php
require_once('../controllers/ClientController.php');
$clientCtr=new ClientController();
$clientCtr->delete(($_GET['cin']));
$clientCtr->delete(($_POST['cin']));
header('Location: ../Admin/dashboard.php');
?>
