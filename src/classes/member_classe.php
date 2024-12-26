<?php

class utilisateur {
    protected $id;
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
    public function setEmail($email){
        $email = trime($email);
        if(empty($email) || !preg_match("/^[a-zA-Z]{5,20}\.@gmail.com\$/",$email))
            return "etre le numero detelephene sur forme exmap@gamil.com";
        else 
            $this->email=$email;
        return "";
    }
    public function setId($id){
        if($id instanceof int){
            $this->id =$id;
            return " ";
        }
        else 
            return "entre la id sure type entre";
    }
    public function setpassword($password){
        $password = trime($password);
        if(strlen($password)<8 || !preg_match("/^[a-zA-Z\s]{5,20}[0-9]{1,5}[-_@+)(\'\"$*^:.,]{1,20}$/",$password)){
            return "entre password contains ou mois un nomber etou mois un  caractire spisaile et lengoure superer 8 ";
        }
        else 
            $this->password =$password;
        return "";
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getTelephone(){
        return $this->telephone;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getId(){
        return $this->id;
    }
    public function getRole(){
        return $this->role;
    }
};
?>