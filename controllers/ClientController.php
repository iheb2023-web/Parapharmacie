<?php
include_once('../models/Client.php');
include_once('../database/config.php');

class ClientController extends Connexion
{
    function __construct()
    {
        parent::__construct();
    }

    function insert(Client $c)
    {
        $query = "INSERT INTO client (cin, nom, prenom, numdossier, datenaiss, adresse) VALUES (?, ?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);

        $aryy = array($c->getCin(), $c->getNom(), $c->getPrenom(), $c->getNumDossier(), $c->getDateNaissance(), $c->getAdresse());

        try {
            $res->execute($aryy);
            return true;
        } catch (PDOException $e) {
            echo "Erreur lors de l'insertion du client: " . $e->getMessage();
            return false;
        }
    }

    function getClient($id)
    {
        $query = "SELECT * FROM client WHERE cin = ?";
        $res = $this->pdo->prepare($query);

        try {
            $res->execute(array($id));
            $array = $res->fetch();
            return $array;
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération du client: " . $e->getMessage();
            return null;
        }
    }

    function delete($idClient)
    {
        $query = "DELETE FROM client WHERE cin=?";
        $res = $this->pdo->prepare($query);

        try {
            return $res->execute(array($idClient));
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression du client: " . $e->getMessage();
            return false;
        }
    }

    function liste()
    {
        $query = "SELECT * FROM client";
        $res = $this->pdo->prepare($query);

        try {
            $res->execute();
            return $res;
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération de la liste des clients: " . $e->getMessage();
            return null;
        }
    }

    function modifier_user(Client $c)
    {
        $sql = "UPDATE client SET nom=?, prenom=?, numdossier=?, datenaiss=?, adresse=? WHERE cin=?";
        $stmt = $this->pdo->prepare($sql);

        try {
            $stmt->execute(array($c->getNom(), $c->getPrenom(), $c->getNumDossier(), $c->getDateNaissance(), $c->getAdresse(), $c->getCin()));
        } catch (PDOException $e) {
            echo "Erreur lors de la modification du client: " . $e->getMessage();
        }
    }
}
?>
