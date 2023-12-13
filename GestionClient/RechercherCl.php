<?php
include_once('../controllers/ClientController.php');

$message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $critere = $_POST["critere"];
    $valeur = $_POST["cin"];

    $clientController = new ClientController();
    $client = $clientController->getClient($valeur);

    if ($client) {
        $message = "Client existe";
    } else {
        $message = "Client ne pas existe";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rechercher un Client</title>
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
            background-color: #0077b6;
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
            background-color: #0e82c1;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"],input[type="submit"]:hover {
            background-color: #005b82;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>chercher un Client</h1>
        <form action="Rechercher.php" method="post">
            <table border="0">
            <tr>
                <h4>Veuillez selectionner un critere de recherche :</h4>
                
                <td><select name="critere">
                    <option value="codeEtudiant">CodeEtudiant</option>
                    <option value="nom">Nom</option>
                    <option value="prenom">Prenom</option>
                    <option value="adresse">Adresse</option>
                    <option value="classe">Classe</option>
                </select></td>
            </tr>
            <tr>
            <td>
            <label for="cin">Valeur :</label>
            <input type="number" id="cin" name="cin" required></td>
            </tr><tr>
            <td><input type="submit" value="chercher le Client">
            <input type="reset" value="Annuler "></td>
        </tr>
        </table>

        </form>
        <?php if (!empty($message)) : ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
