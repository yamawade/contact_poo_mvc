<?php
    require_once('../Controler/Traitement.php');
    //Design Pattern Abstrac Factory
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="FormContact.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class="formulaire">
        <h1>Contact</h1>
        <br>
        <div class="test">
            <div>
                <Label>PRENOM</Label>
                <br>
                <br>
                <input type="text" name="prenom" id="" placeholder="Entre Votre Prenom" >
            </div>
            <div id="nom">
                <Label >NOM</Label>
                <br>
                <br>
                <input type="text" name="nom" placeholder="Entre Votre Nom" >
            </div>
        </div>
        <br>
        <br>
        <div>
            <Label>TELEPHONE</Label>
            <br>
            <input type="text" name="telephone" id="tel" placeholder="Entrer Votre N° Telephone" >
        </div>
        <br>
        <br>
        <div>
            <Label>Mettre en favori</Label>
            <br>
            <select name="favori" id="favori">
                <option value="">------------------------------------Choisissez------------------------------------</option>
                <option value="oui">oui</option>
                <option value="non">non</option>
            </select>
        </div>
        <br>
        <br>
        <button type="submit" name="inscrire" class="inscrire">Ajouter ➡</button>
    </form>
    <div>
        <form action="../View/ListeContact1.php" method="post">
            <button type="submit" name="liste" class="listeUser">Voir Liste Contact</button>
        </form>
    </div>
    
</body>
</html>