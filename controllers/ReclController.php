<?php
include_once('../models/Recl.php');
include_once('../database/config.php');

class ReclController extends Connexion
{
    function __construct()
    {
        parent::__construct();
    }

    function insert(Recl $r)
    {
        $query = "INSERT INTO reclamation (nom, email, message) VALUES (?, ?, ?)";
        $res = $this->pdo->prepare($query);

        $array = array($r->getNom(), $r->getEmail(), $r->getMessage());

        try {
            $res->execute($array);
            return true;
        } catch (PDOException $e) {
            echo "Erreur lors de l'insertion de la réclamation: " . $e->getMessage();
            return false;
        }
    }

    function getReclamation($id)
    {
        $query = "SELECT * FROM reclamation WHERE idReclamation = ?";
        $res = $this->pdo->prepare($query);

        try {
            $res->execute(array($id));
            $array = $res->fetch();
            return $array;
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération de la réclamation: " . $e->getMessage();
            return null;
        }
    }

    function delete($idReclamation)
    {
        $query = "DELETE FROM reclamation WHERE nom=?";
        $res = $this->pdo->prepare($query);

        try {
            return $res->execute(array($idReclamation));
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression de la réclamation: " . $e->getMessage();
            return false;
        }
    }

    function liste()
    {
        $query = "SELECT * FROM reclamation";
        $res = $this->pdo->prepare($query);

        try {
            $res->execute();
            return $res;
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération de la liste des réclamations: " . $e->getMessage();
            return null;
        }
    }

    function modifier_reclamation(Recl $r)
    {
        $sql = "UPDATE reclamation SET nom=?, email=?, message=? WHERE idReclamation=?";
        $stmt = $this->pdo->prepare($sql);

        try {
            $stmt->execute(array($r->getNom(), $r->getEmail(), $r->getMessage(), $r->getIdReclamation()));
        } catch (PDOException $e) {
            echo "Erreur lors de la modification de la réclamation: " . $e->getMessage();
        }
    }
}
?>
