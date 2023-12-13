<?php
include_once('../models/Client.php');
include_once('../database/config.php');/*
include __DIR__ . "/models/Client.php";
include __DIR__ . "/database/config.php";*/

class AdminController extends Connexion
{
    function __construct()
    {
        parent::__construct();
    }
    function liste()
    {
        $query = "SELECT * FROM admin";
        $res = $this->pdo->prepare($query);
        
        try {
            $res->execute();
            return $res;
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération de Admin: " . $e->getMessage();
            return null;
        }
    }
}
?>
