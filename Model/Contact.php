<?php
    require_once('../Model/IContact.php');
    require_once('../Model/Bd.php');

    class Contact implements IContact{
        private $nom;
        private $prenom;
        private $telephone;
        private $favori;

        public function __construct($nomC,$prenomC,$telephoneC,$favoriC){
            $this->setNom($nomC);
            $this->setPrenom($prenomC);
            $this->setTelephone($telephoneC);
            $this->setFavori($favoriC);
        }

        public function getNom(){
            return $this->nom;
        }

        public function setNom($nomC){
            $regexName='/^[a-z]{2,20}$/i';
            if(preg_match($regexName,$nomC)){
                $this->nom=$nomC;
            }else{
                throw new Exception("Entrer un nom valide");
            }
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function setPrenom($prenomC){
            $regexName='/^[a-z]{2,20}$/i';
            if(preg_match($regexName,$prenomC)){
                $this->prenom=$prenomC;
            }else{
                throw new Exception("Entrer un prenom valide");
            }  
        }

        public function getTelephone(){
            return $this->telephone;
        }

        public function setTelephone($telephoneC){
            $regex='/^(77|76|75|78|76)+[0-9]/';
            if(preg_match($regex,$telephoneC) && strlen($telephoneC)===9){
                $this->telephone=$telephoneC;
            }else{
                throw new Exception("Entrer un numéro de telephone valide");
            }
            
        }

        public function getFavori(){
            return $this->favori;
        }

        public function setFavori($favoriC){
            if($favoriC =='oui' || $favoriC =='non'){
                $this->favori=$favoriC;
            }else{
                throw new Exception("La reponse doit etre oui/non");
            }
        }

        public function AjouterContact($BD){
            $insert="INSERT INTO contact(nom_contact,prenom_contact,telephone_contact,favori) 
            VALUES('$this->nom','$this->prenom','$this->telephone','$this->favori')";
            $BD->query($insert);
            echo "Enregistrement réussi";
        }
        public static function GetContact($BD,$id){
            $contact="SELECT * FROM contact WHERE id_contact=$id";
            return $BD->query($contact)->fetch();
        }

        public function ModifierContact($BD,$id){
            $modif="UPDATE contact SET nom_contact='$this->nom',prenom_contact='$this->prenom',telephone_contact='$this->telephone', favori='$this->favori' WHERE id_contact=$id";
            $BD->query($modif);
            echo "Modification réussi";
        }

        public static function SupprimerContact($BD,$id){
            $sup="DELETE FROM contact WHERE id_contact=$id";
            $BD->query($sup);
            echo "Suppression réussi";
        }

        public static function MarquerFavori($BD,$id){
            $fav="UPDATE contact SET favori='oui' WHERE id_contact=$id";
            $BD->query($fav);
        }

        public static function ListeContact($BD){
            $selection="SELECT * FROM contact";
            return $BD->query($selection)->fetchAll();;
        }
    }
?>