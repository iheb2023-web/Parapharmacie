<?php
require_once('../controllers/ClientController.php');
require_once('../models/Client.php');
$clientCtr=new ClientController();
$client=new Client();

$client->setCin($_POST['cin']);
$client->setNom($_POST['nom']);
$client->setPrenom($_POST['prenom']);
$client->setDateNaissance($_POST['datenaissance']);
$client->setNumDossier($_POST['numerodossier']);
$client->setAdresse($_POST['adresse']);

$clientCtr->modifier_user($client);
header('Location: ../Admin/dashboard.php');

?>