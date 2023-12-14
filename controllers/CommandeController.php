<?php
include_once('../models/Commande.php');  
include_once('../database/config.php');

class CommandeController extends Connexion
{
    function __construct()
    {
        parent::__construct();
    }

    function insert(Commande $commande)
    {
            $query = "INSERT INTO commande (CinCli, idProd, dateCommande, total, statut, modePaiement, adresseLivraison, dateLivraison) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $res = $this->pdo->prepare($query);
            $array = array(
                $commande->getCinCli(),
                $commande->getIdProd(),
                $commande->getDateCommande(),
                $commande->getTotal(),
                $commande->getStatut(),
                $commande->getModePaiement(),
                $commande->getAdresseLivraison(),
                $commande->getDateLivraison()
            );

            try {
                $res->execute($array);
                return true;
            } catch (PDOException $e) {
                echo "Erreur lors de l'insertion de la commande: " . $e->getMessage();
                return false;
            }
    }

    function getCommande($id)
    {
        $query = "SELECT * FROM commande WHERE idCommande = ?";
        $res = $this->pdo->prepare($query);

        try {
            $res->execute(array($id));
            $array = $res->fetch();
            return $array;
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération de la commande: " . $e->getMessage();
            return null;
        }
    }

    function delete($idCommande)
    {
        $query = "DELETE FROM commande WHERE idCommande=?";
        $res = $this->pdo->prepare($query);

        try {
            return $res->execute(array($idCommande));
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression de la commande: " . $e->getMessage();
            return false;
        }
    }

    function liste()
    {
        $query = "SELECT * FROM commande";
        $res = $this->pdo->prepare($query);
    
        try {
            $res->execute();
            
            return $res;
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération de la liste des commandes: " . $e->getMessage();
            return null;
        }
    }

    function modifier_commande(Commande $commande)
    {
        $sql = "UPDATE commande SET CinCli=?, idProd=?, dateCommande=?, total=?, statut=?, modePaiement=?, adresseLivraison=?, dateLivraison=? WHERE idCommande=?";
        $stmt = $this->pdo->prepare($sql);

        try {
            $stmt->execute(array(
                $commande->getCinCli(),
                $commande->getIdProd(),
                $commande->getDateCommande(),
                $commande->getTotal(),
                $commande->getStatut(),
                $commande->getModePaiement(),
                $commande->getAdresseLivraison(),
                $commande->getDateLivraison(),
                $commande->getIdCommande()
            ));
        } catch (PDOException $e) {
            echo "Erreur lors de la modification de la commande: " . $e->getMessage();
        }
    }
}
?>
