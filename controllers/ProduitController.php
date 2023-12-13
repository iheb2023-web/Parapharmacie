<?php
include_once('../models/Produit.php'); 
include_once('../database/config.php');

class ProduitController extends Connexion
{
    function __construct()
    {
        parent::__construct();
    }

    function insert(Produit $p)
    {
        $query = "INSERT INTO produit (libelle, description, prix, quantite, img) VALUES (?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);

        $aryy = array($p->getLibelle(), $p->getDescription(), $p->getPrix(), $p->getQuantite(), $p->getImg());

        try {
            $res->execute($aryy);
            return true;
        } catch (PDOException $e) {
            echo "Erreur lors de l'insertion du produit: " . $e->getMessage();
            return false;
        }
    }

    function getProduit($id)
    {
        $query = "SELECT * FROM produit WHERE libelle = ?";
        $res = $this->pdo->prepare($query);

        try {
            $res->execute(array($id));
            $array = $res->fetch();
            return $array;
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération du produit: " . $e->getMessage();
            return null;
        }
    }
    function getProduitAff($id)
    {
        $query = "SELECT * FROM produit WHERE idProd = ?";
        $res = $this->pdo->prepare($query);

        try {
            $res->execute(array($id));
            $array = $res->fetch();
            return $array;
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération du produit: " . $e->getMessage();
            return null;
        }
    }

    function delete($idProduit)
    {
        $query = "DELETE FROM produit WHERE idProd=?";
        $res = $this->pdo->prepare($query);

        try {
            return $res->execute(array($idProduit));
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression du produit: " . $e->getMessage();
            return false;
        }
    }
    function deleteT($idProduit)
    {
        $query = "DELETE FROM produit WHERE libelle=?";
        $res = $this->pdo->prepare($query);

        try {
            return $res->execute(array($idProduit));
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression du produit: " . $e->getMessage();
            return false;
        }
    }

    function liste()
    {
        $query = "SELECT * FROM produit";
        $res = $this->pdo->prepare($query);

        try {
            $res->execute();
            return $res;
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération de la liste des produits: " . $e->getMessage();
            return null;
        }
    }

    function modifier_produit(Produit $p)
    {
        $sql = "UPDATE produit SET libelle=?, description=?, prix=?, quantite=?, img=? WHERE idProd=?";
        $stmt = $this->pdo->prepare($sql);

        try {
            $stmt->execute(array($p->getLibelle(), $p->getDescription(), $p->getPrix(), $p->getQuantite(), $p->getImg(), $p->getIdProd()));
        } catch (PDOException $e) {
            echo "Erreur lors de la modification du produit: " . $e->getMessage();
        }
    }
}
?>
