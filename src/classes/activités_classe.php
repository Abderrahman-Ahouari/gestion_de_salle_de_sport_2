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
    private function __construct($id_activité='', $id_admin='', $nom_activité='', $description='', $capacité='', $date_debu='', $date_fin='', $disponibilite=''){
       $this->id_activité =$id_activité;
       $this->id_admin =$id_admin;
       $this->nom_activité =$nom_activité;
       $this->description =$description;
       $this->capacité =$capacité;
       $this->date_debu =$date_debu;
       $this->date_fin =$date_fin;
       $this->disponibilite =$disponibilite;
    }
    public function set_id_activité($id_activité){
        $this->id_activité=$id_activité;  
    }
    public function get_id_activité($id_activité){
        return $this->id_activité;
    }
}

?>
