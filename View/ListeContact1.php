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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2 class="text-primary offset-5">LISTES DES CONTACTS</h2>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
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
                                        <?php
                                            if($s['favori']=='non'){
                                                echo "<form action='' method='post'>";
                                                echo "<a href='../View/ModifContact.php?id=$s[id_contact]' type='submit' class='btn btn-success btn-sm'>Modifier✏</a>"; 
                                                echo "<input type='hidden' name='id_contact' value='$s[id_contact]'>";
                                                echo "<button type='submit' name='supprimer' class='btn btn-danger btn-sm offset-1'>Supprimer🗑</button>";
                                                echo "<button type='submit' name='fav' class='offset-1'>Favori⭐</button>";
                                                echo "</form>";
                                            }else{
                                                echo "<form action='' method='post'>";
                                                echo "<a href='../View/ModifContact.php?id=$s[id_contact]' type='submit' class='btn btn-success btn-sm'>Modifier✏</a>";
                                                echo "<input type='hidden' name='id_contact' value='$s[id_contact]'>";
                                                echo "<button type='submit' name='supprimer' class='btn btn-danger btn-sm offset-1'>Supprimer🗑</button>";
                                                echo "</form>";
                                            }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <form action="" method="post">
                        <div class="card-header text-center bg-primary text-white mt-4">
                            AJOUT CONTACT
                        </div>
                        <div class="card-body">
                            <label for="">Nom</label>
                            <input type="text" name="nom" class="form-control">
                            <label for="">Prenom</label>
                            <input type="text" name="prenom" class="form-control">
                            <label for="">Telephone</label>
                            <input type="text" name="telephone" class="form-control">
                            <label for="">Favori</label>
                            <select name="favori" id="" class="form-control">
                                <option value="">... Faites votre choix ...</option>
                                <option value="oui">oui</option>
                                <option value="non">non</option>
                            </select>
                            <button name="inscrire" type="submit" class="btn btn-outline-primary mt-2 offset-5">Ajouter ➡</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>