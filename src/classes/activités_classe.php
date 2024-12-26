<?php

class activités{
    private $id_activité;
    private $id_admin;
    private $nom_activité;
    private $description;
    private $capacité;
    private $date_debu;
    private $date_fin;
    private $disponibilite;
    public function __construct($id_activité='', $id_admin='', $nom_activité='', $description='', $capacité='', $date_debu='', $date_fin='', $disponibilite=''){
       $this->id_activité =$id_activité;
       $this->id_admin =$id_admin;
       $this->nom_activité =$nom_activité;
       $this->description =$description;
       $this->capacité =$capacité;
       $this->date_debu =$date_debu;
       $this->date_fin =$date_fin;
       $this->disponibilite =$disponibilite;
    }

    
    public function set_id_activité($id_activité) {
        $this->id_activité = $id_activité;  
    }

    public function get_id_activité() {
        return $this->id_activité;
    }

    public function set_id_admin($id_admin) {
        $this->id_admin = $id_admin;  
    }

    public function get_id_admin() {
        return $this->id_admin;
    }

    public function set_nom_activité($nom_activité) {
        $this->nom_activité = $nom_activité;  
    }

    public function get_nom_activité() {
        return $this->nom_activité;
    }

    public function set_description($description) {
        $this->description = $description;  
    }

    public function get_description() {
        return $this->description;
    }

    public function set_capacité($capacité) {
        $this->capacité = $capacité;  
    }

    public function get_capacité() {
        return $this->capacité;
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

    public function add_activité(){
      
    }
 
    
}

?>
