<?php
    require_once('../Controler/Traitement.php');
    require_once('../Model/Contact.php');

    $modifier= Contact::GetContact($BD,$_GET['id']);
    // var_dump($modifier);
    // die();
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
                <input type="text" name="prenom" id="" value="<?php echo $modifier['prenom_contact']?>" >
            </div>
            <div id="nom">
                <Label >NOM</Label>
                <br>
                <br>
                <input type="text" name="nom" value="<?php echo $modifier['nom_contact']?>" >
            </div>
        </div>
        <br>
        <br>
        <div>
            <Label>TELEPHONE</Label>
            <br>
            <input type="text" name="telephone" id="tel" value="<?php echo $modifier['telephone_contact']?>" >
        </div>
        <br>
        <br>
        <div>
            <Label>Mettre en favori</Label>
            <br>
            <select name="favori" id="favori">
                <option value="oui" <?php if($modifier['favori']=='oui') echo "selected" ?>>oui</option>
                <option value="non" <?php if($modifier['favori']=='non') echo "selected" ?>>non</option>
            </select>
        </div>
        <br>
        <br>
        <button type="submit" name="modifier" class="inscrire">Modifier ➡</button>
    </form> 
</body>
</html>