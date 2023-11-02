<?php
    require_once('../Model/Contact.php');

    if(isset($_POST['inscrire'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $telephone=$_POST['telephone'];
        $favori=$_POST['favori'];

        if(empty($nom) || empty($prenom) || empty($telephone) || empty($favori)){
            echo "Veuillez renseigner tous les champs !!!";
        }else{
            $contact= new Contact($nom,$prenom,$telephone,$favori);
            $contact->AjouterContact($BD);
        }
    }

    if(isset($_POST['supprimer'])){
        $id = $_POST['id_contact'];
        Contact::SupprimerContact($BD,$id);
        header("location:../View/ListeContact.php");
        
    }

    if(isset($_POST['modifier'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $telephone=$_POST['telephone'];
        $favori=$_POST['favori'];

        if(empty($nom) || empty($prenom) || empty($telephone) || empty($favori)){
            echo "Veuillez renseigner tous les champs !!!";
        }else{
            $contact= new Contact($nom,$prenom,$telephone,$favori);
            $contact->ModifierContact($BD,$_GET['id']);
            header("location:../View/ListeContact.php");
        }
    }

?>