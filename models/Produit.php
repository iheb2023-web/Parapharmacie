<?php

class Produit {
    private $libelle, $description, $prix, $quantite,$img;

    public function __construct($libelle = "", $description = "", $prix = 0, $quantite = 0, $img = "") {
        $this->libelle = $libelle;
        $this->description = $description;
        $this->prix = $prix;
        $this->quantite = $quantite;
        $this->img = $img;
    }

    public function getIdProd() {
        return $this->idProd;
    }
    public function setIdProd($idProd) {
        $this->idProd=$idProd;
    }
    public function getLibelle(){
        return $this->libelle;
    }
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    public function getImg() {
        return $this->img;
    }

    public function setImg($img) {
        $this->img = $img;
    }
}
?>
