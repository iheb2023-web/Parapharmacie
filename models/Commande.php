<?php

class Commande {
    private $CinCli,$nomCli,$nomProd, $idProd, $dateCommande,$total,$statut,$modePaiment,$adresseLivraison,$dateLivraison;

    function __construct($CinCli = "",$nomCli="",$nomProd="", $idProd = "", $dateCommande = "", $total = "", $statut = "", $modePaiement = "", $adresseLivraison = "", $dateLivraison = "") {
        $this->CinCli = $CinCli;
        $this->nomCli=$nomCli;
        $this->nomProd=$nomProd;
        $this->idProd = $idProd;
        $this->dateCommande = $dateCommande;
        $this->total = $total;
        $this->statut = $statut;
        $this->modePaiement = $modePaiement;
        $this->adresseLivraison = $adresseLivraison;
        $this->dateLivraison = $dateLivraison;
    }

    public function getIdCommande() {
        return $this->idCommande;
    }

    public function setIdCommande($idCommande) {
        $this->idCommande = $idCommande;
    }

    public function getCinCli() {
        return $this->CinCli;
    }

    public function setCinCli($CinCli) {
        $this->CinCli = $CinCli;
    }

    public function getNomCli() {
        return $this->nomCli;
    }

    public function setNomCli($NomCli) {
        $this->nomCli = $NomCli;
    }

    public function getNomProd() {
        return $this->nomProd;
    }

    public function setNomProd($NomProd) {
        $this->nomProd = $NomProd;
    }

    public function getIdProd() {
        return $this->idProd;
    }

    public function setIdProd($idProd) {
        $this->idProd = $idProd;
    }

    public function getDateCommande() {
        return $this->dateCommande;
    }

    public function setDateCommande($dateCommande) {
        $this->dateCommande = $dateCommande;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function getStatut() {
        return $this->statut;
    }

    public function setStatut($statut) {
        $this->statut = $statut;
    }

    public function getModePaiement() {
        return $this->modePaiement;
    }

    public function setModePaiement($modePaiement) {
        $this->modePaiement = $modePaiement;
    }

    public function getAdresseLivraison() {
        return $this->adresseLivraison;
    }

    public function setAdresseLivraison($adresseLivraison) {
        $this->adresseLivraison = $adresseLivraison;
    }

    public function getDateLivraison() {
        return $this->dateLivraison;
    }

    public function setDateLivraison($dateLivraison) {
        $this->dateLivraison = $dateLivraison;
    }
}


?>
