<?php
require_once("../controllers/AdminController.php");

$adminController = new AdminController();
$username = $_POST["username"];
$password = $_POST["password"];

$res = $adminController->liste(); 

$loginSuccessful = false;

if (is_array($res) || is_object($res)) {
    foreach ($res as $row) {
        if ($row['login'] == $username && $row['mot2pass'] == $password) {
            $loginSuccessful = true;
            break;
        }
    }
}

if ($loginSuccessful) {
    header('Location: dashboard.php');
} else {
    echo '<div class="container mt-5 alert alert-danger text-center" style="color: red; font-weight: bold; font-size: larger;">Login et/ou mot de passe incorrect(s).</div>';
}

?>
