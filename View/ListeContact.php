<?php
    require_once('../Controler/Traitement.php');
    require_once('../Model/Contact.php');
    
    $select= Contact::ListeContact($BD);
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
    <h1>LISTE DES CONTACTS</h1>
    
    <table>
    <tr style="background-color:lightcoral;">
        
        <th>NOM</th>
        <th>PRENOM</th>
        <th>TELEPHONE</th>
        <th>FAVORI</th>
        <th>ACTION</th>
    </tr>
    <?php foreach($select as $s){?>
        <tr>
            
            <td><?php echo $s['nom_contact'] ?></td>
            <td><?php echo $s['prenom_contact'] ?></td>
            <td><?php echo $s['telephone_contact'] ?></td>
            <td><?php echo $s['favori'] ?></td>
            <td>
                <form action="" method="post">
                    <a href="../View/ModifContact.php?id=<?php echo $s['id_contact'] ?>" type='submit' style='background-color:green; color:white;'>✏</a> 
                    <input type="hidden" name="id_contact" value="<?php echo $s['id_contact'] ?>">
                    <button type="submit" name="supprimer" style="background-color:red; color:white;">🗑</button>
                </form>
            </td>
        </tr>
    <?php } ?>
    </table>
    <a href="../View/FormContact.php">Ajouter Contact</a>
</body>
</html>