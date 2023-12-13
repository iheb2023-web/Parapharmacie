<?php
require_once('../controllers/ProduitController.php');
$clientCtr=new ProduitController();
$res = $clientCtr->getProduitAff($_GET['idProd']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier un Client</title>
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
        <h1>Modifier un Produit</h1>
        <form action="ModifierProduit.php" method="post">
        <label for="nom">idProduit :</label>
            <input type="text" id="nom" name="idProd"  value="<?php echo$res['idProd']?>">


            <label for="nom">Libelle :</label>
            <input type="text" id="nom" name="libelle"  value="<?php echo$res['libelle']?>">

            <label for="prenom">Description :</label>
            <input type="text" id="prenom" name="desc"  value="<?php echo$res['description']?>">

            <label for="cin">Prix :</label>
            <input type="number" id="cin" name="prix"  value="<?php echo$res['prix']?>">

            <label for="cin">Quantite(kg) :</label>
            <input type="number" id="cin" name="qt"  value="<?php echo$res['quantite']?>">

            <label for="numero_dossier">Image :</label>
            <input type="text" id="numero_dossier" name="img"  placeholder="Nom de l'image" value="<?php echo$res['img']?>">

            <input type="submit" value="Modifier le Produite">
            <input type="reset" value="Annuler l'ajoute">
            

        </form>
    </div>
</body>
</html>
