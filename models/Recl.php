<?php

class Recl {
    private $nom, $email, $message;

    function __construct($nom = "", $email = "", $message = "") {
        $this->nom = $nom;
        $this->email = $email;
        $this->message = $message;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setMessage($message) {
        $this->message = $message;
    }
}


?>
