<?php
require_once('../controllers/ClientController.php');
$clientCtr=new ClientController();
$res = $clientCtr->getClient($_GET['cin']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Supprimer un Client</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            background-image: linear-gradient(
            to right,
           #e0ddfa,
           #c2f5de,
           #cbf7e4,
           #d4f8ea,
           #e0ddfa
        );
        }
        h1 {
            background-color: #00b6a7;
            color: #ffffff;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-image: linear-gradient(
            to right,
           #e0ddfa,
           #c2f5de,
           #cbf7e4,
           #d4f8ea,
           #e0ddfa
        );
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="date"], input[type="number"], select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"],input[type="reset"] {
            background-color: #00b6a7;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"],input[type="submit"]:hover {
            background-color: #00b6a7;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Supprimer un Client</h1>
        <form action="Supprimer.php" method="post">
            
            <label for="cin">Numero de CIN :</label>
            <input type="number" id="cin" name="cin" required>

            <input type="submit" value="Supprimer le Client">
            <input type="reset" value="Annuler">

        </form>
    </div>
</body>
</html>
