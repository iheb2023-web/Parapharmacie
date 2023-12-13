<?php

class Admin {
    private $login, $mot2pass;

    function __construct($login = "", $mot2pass = "") {
        $this->login = $login;
        $this->mot2pass = $mot2pass;
    }

    public function getlogin() {
        return $this->login;
    }

    public function getmot2pass() {
        return $this->mot2pass;
    }

    public function setlogin($login) {
        $this->login = $login;
    }

    public function setmot2pass($mot2pass) {
        $this->mot2pass = $mot2pass;
    }
}

?>
