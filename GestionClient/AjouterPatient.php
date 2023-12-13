<?php

//tester sur le dossier courant + concat sinon voir documentation __dir

require_once('../controllers/ClientController.php');
require_once('../models/Client.php');

$ncin = $_POST['cin'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$datenaissance = $_POST['datenaissance'];
$adresse = $_POST['adresse'];
$numerodossier = $_POST['numerodossier'];

$client = new Client($ncin, $nom, $prenom, $numerodossier, $datenaissance, $adresse);
$clientCtr = new ClientController();
$res = $clientCtr->insert($client);

if ($res == true) {
    header('Location: ../Admin/dashboard.php');
} else {
    echo "Erreur lors de l'ajout du client.";
}
?>
