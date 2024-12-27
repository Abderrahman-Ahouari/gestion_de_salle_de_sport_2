<?php


 
    class Activites{
        private $id_activite;
        private $id_admin;
        private $nom_activite;
        private $description;
        private $capacite;
        private $date_debu;
        private $date_fin;
        private $disponibilite;
        public function __construct($id_activite='', $id_admin='', $nom_activite='', $description='', $capacite='', $date_debu='', $date_fin='', $disponibilite=''){
        $this->id_activite =$id_activite;
        $this->id_admin =$id_admin;
        $this->nom_activite =$nom_activite;
        $this->description =$description;
        $this->capacite =$capacite;
        $this->date_debu =$date_debu;
        $this->date_fin =$date_fin;
        $this->disponibilite =$disponibilite;
        }

        
        public function set_id_activite($id_activite) {
            $this->id_activite = $id_activite;  
        }

        public function get_id_activite() {
            return $this->id_activite;
        }

        public function set_id_admin($id_admin) {
            $this->id_admin = $id_admin;  
        }

        public function get_id_admin() {
            return $this->id_admin;
        }

        public function set_nom_activite($nom_activite) {
            $this->nom_activite = $nom_activite;  
        }

        public function get_nom_activite() {
            return $this->nom_activite;
        }

        public function set_description($description) {
            $this->description = $description;  
        }

        public function get_description() {
            return $this->description;
        }

        public function set_capacite($capacite) {
            $this->capacite = $capacite;  
        }

        public function get_capacite() {
            return $this->capacite;
        }

        public function set_date_debu($date_debu) {
            $this->date_debu = $date_debu;  
        }

        public function get_date_debu() {
            return $this->date_debu;
        }

        public function set_date_fin($date_fin) {
            $this->date_fin = $date_fin;  
        }

        public function get_date_fin() {
            return $this->date_fin;
        }

        public function set_disponibilite($disponibilite) {
            $this->disponibilite = $disponibilite;  
        }

        public function get_disponibilite() {
            return $this->disponibilite;
        }

    
    }

?>
