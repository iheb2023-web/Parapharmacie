<?php
require_once('../controllers/CommandeController.php');
$clientCtr=new CommandeController();
$res = $clientCtr->getCommande($_GET['idCommande']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier un Commande</title>
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
        <h1>Modifier un Commande</h1>
        <form action="Modifier.php" method="post">
            <label for="cin">id Commande :</label>
            <input type="number" id="cin" name="idCommande"  value="<?php echo$res['idCommande']?>">

            <label for="nom">Cin de Client :</label>
            <input type="text" id="nom" name="CinCli"  value="<?php echo$res['CinCli']?>">

            <label for="prenom">id Produit :</label>
            <input type="text" id="prenom" name="idProd"  value="<?php echo$res['idProd']?>">

            <label for="date_naissance">Date de Commande :</label>
            <input type="date" id="date_naissance" name="dateCommande"  value="<?php echo$res['dateCommande']?>">

            <label for="adresse">Total :</label>
            <input type="text" id="adresse" name="total"  value="<?php echo $res['total']?>">

            <label for="numero_dossier">Statut :</label>
            <input type="text" id="numero_dossier" name="statut"  value="<?php echo$res['statut']?>">
            
            <label for="modePaiement">Mode de Paiement :</label>
            <input type="text" id="modePaiement" name="modePaiement"  value="<?php echo$res['modePaiement']?>">

            <label for="adresseLivraison">Adresse de Livraison :</label>
            <input type="text" id="adresseLivraison" name="adresseLivraison"  value="<?php echo$res['adresseLivraison']?>">

            <label for="dateLivraison">Date de Livraison :</label>
            <input type="text" id="dateLivraison" name="dateLivraison"  value="<?php echo$res['dateLivraison']?>">
            
            <input type="submit" value="Modifier la Commande">
            <input type="reset" value="Annuler">

        </form>
    </div>
</body>
</html>
