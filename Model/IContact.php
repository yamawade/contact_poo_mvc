<?php
    Interface IContact{
        public function AjouterContact($BD);
        public function ModifierContact($BD,$id);
        public static function SupprimerContact($BD,$id);
       // public static function MarquerFavori($BD,$id);
        public static function GetContact($BD,$id);
        public static function ListeContact($BD);
    }
?>