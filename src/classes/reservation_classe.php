<?php 
class Reservation {
    
    private $id_reservation ;
    private $id_Membre ;
    private $id_activite; 
    private $date_reservation ; 
    private  $statut;
    public function __construct($id_reservation,$id_Membre,$id_activite,$date_reservation=null,$statut='encour')
    {
        $this->id_reservation = $id_reservation ;
        $this->id_Membre =$id_Membre ;
        $this->id_activite=  $id_activite; 
        $this->date_reservation =  $date_reservation ; 
        $this->statut = $statut;
    }
    public function setID($id){
         $this->id_reservation =$id;
    }
    public function setIdMember($id){
        $this->id_Membre = $id;
    }
    public function setIdActivite($id){
        $this->id_activite =$id;
    }
    public function setIddate($date){
        $this->date_reservation =$date;
    }
    public function setIdStatut($statut){
        $this->statut;
    }
    public function getID(){
        return   $this->id_reservation;
    }
    public function getIdMember(){
        return $this->id_Membre;
    }
    public function getIdActivite(){
        return $this->id_activite;
    }
    public function getIdate(){
        return $this->date_reservation;
    }
    public function getIdStatut(){
        return $this->statut;
    }    
}

?>