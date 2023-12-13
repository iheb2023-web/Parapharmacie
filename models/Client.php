<?php

class Client {
    private $cin, $nom, $prenom, $numdossier, $datenaiss, $adresse;

    function __construct($cin = "", $nom = "", $prenom = "", $numdossier = "", $datenaiss = "", $adresse = "") {
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numdossier = $numdossier;
        $this->datenaiss = $datenaiss;
        $this->adresse = $adresse;
    }

    public function getCin() {
        return $this->cin;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getNumDossier() {
        return $this->numdossier;
    }

    public function getDateNaissance() {
        return $this->datenaiss;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setCin($cin) {
        $this->cin = $cin;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setNumDossier($numdossier) {
        $this->numdossier = $numdossier;
    }

    public function setDateNaissance($datenaiss) {
        $this->datenaiss = $datenaiss;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }
}

?>
