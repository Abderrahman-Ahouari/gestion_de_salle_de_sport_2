<?php

class utilisateur {
    protected $nom;
    protected $prenom;
    protected $email;
    protected $role;
    protected $password;
    protected $telephone ;
    public function __construct($nom ='' ,$prenom ='',$email='',$role='client',$password ='',$telephone=''){
        $this->nom =$nom;
        $this->prenom =$prenom;
        $this->email =$email;
        $this->role =$role;
        $this->password =$password;
        $this->telephone =$telephone;
    }
    public function  __destruct(){}
    public function setNom($nom){
        $nom =trime($nom);
        $condition = "/^[a-zA-Z\s]{3,40}/i";
        if(empty($nom)){
            echo "entre un mot ne pas vide ";
        }else 
        if(preg_match($condition,$nom)){
            $this->nom=$nom;
        } 
        else 
            echo " le forme de mot il entre ne pas vrue";
    }
    public function setPrenom($prenom){
        $prenom = trime($prenom);
        if(empty($prenom) || !preg_match("/^[a-zA-Z\s]{3,40}/i",$prenom))
            return  " entre votre prenom ne pas  vide et containe sof le caractire (a-z A-Z)";        
        else
            $this->prenom =$prenom;
        return "";
    }
    public function setTelephone($telephone){
        $telephone = trime($telephone);
        if(empty($telephone) || !preg_match("/^\+212[6|7|5]{1}[0-9]{8}$/",$telephone))
            return "etre le numero detelephene sur forme +2125******** ou +2126******** ou +2127********";
        else 
            $this->telephone=$telephone;
        return "";
    }
    
}
?>