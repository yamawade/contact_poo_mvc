<?php

    class ConnectDatabase{
        public function Database(){
            try
            {
                $BD = new PDO('mysql:host=localhost;dbname=gestion_contact_poo;charset=utf8', 'root', '');
                return $BD;
            }
            catch (Exception $e)
            {
                    die('erreur de connection ' . $e->getMessage());
            }
        }
    }
   $con= new ConnectDatabase();
   $BD= $con->Database();
   
?>