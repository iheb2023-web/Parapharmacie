<?php


$nom=$_POST["name"];
$mail=$_POST["email"];
$message=$_POST["message"];

$con = new mysqli("localhost","root","","pharmacie");
$req ="insert into  reclamation values ('$nom','$mail','$message')";
$res = $con -> query($req);
if ($res) {
    echo "<script>alert('Votre message a ete envoye avec succse'); window.location.href = 'home.html';</script>";
} else {
    echo "Échec de l'insertion : " . $con->error;
}



?>