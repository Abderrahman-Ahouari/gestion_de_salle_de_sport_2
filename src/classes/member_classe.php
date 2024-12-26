<?php
require("connect.php");
require("./reservation_classe.php
git");
class Utilisateur {
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
        $nom =trim($nom);
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
        $prenom = trim($prenom);
        if(empty($prenom) || !preg_match("/^[a-zA-Z\s]{3,40}/i",$prenom))
            return  " entre votre prenom ne pas  vide et containe sof le caractire (a-z A-Z)";        
        else
            $this->prenom =$prenom;
        return "";
    }
    public function setTelephone($telephone){
        $telephone = trim($telephone);
        if(empty($telephone) || !preg_match("/^\+212[6|7|5]{1}[0-9]{8}$/",$telephone))
            return "etre le numero detelephene sur forme +2125******** ou +2126******** ou +2127********";
        else 
            $this->telephone=$telephone;
        return "";
    }
    public function setEmail($email){
        $email = trim($email);
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
    public function setRole($role){
        if($role != 1 || $role != 2)
            return "error";
        else 
            $this->role = $role;
    }
    public function setPassword($password){
        $password = trim($password);
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

    public function setSESSION(){
        session_start();
        $_SESSION['email']=$this->getEmail();
        $_SESSION['role'] =$this->getRole();
    }

    public function login(){
        $error ="";
        $connect = new Connect("localhost","root","12345");
        $stmt =$connect->getConnect()->prepare("select * from  utilisateur  where email =  :email");
        $stmt->bindParam(":email",$this->getEmail());
        $stmt->execute();
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            if(md5($this->getPassword() )==$row['password']){
                $this->setSESSION();
                if($row['role']==1)
                header('../../views/admin_dashboard.php');
                elseif($row['role']==2)
                header('../../views/user_dashboard.php');
            }else 
            $error ="mode passe ne pas vrée";
        }else
        $error ="email  ne existe pas";
        return  $error;
    }
    public function signin($nom , $prenom ,$email,$role,$password,$telephone ){
        $connect = new Connect("localhost","root","12345");
        $stmt =$connect->getConnect()->prepare("select * from  utilisateur  where email =  :email");
        $stmt->bindParam(":email",$this->getEmail(),PDO::PARAM_STR);
        $stmt->execute();
        if(!($row = $stmt->fetch(PDO::FETCH_ASSOC))){
            $this->setPrenom($prenom );
            $this->setnom($nom );
            $this->setemail($email );
            $this->setrole($role );
            $this->setpassword($password );
            $this->settelephone($telephone );
        $stmt =$connect->getConnect()->prepare("insert into   utilisateurs(nom,prenom,email,telephone,role,password) values (:nom,:prenom,:eamil,:telephone,:role,:password)");
        $stmt->bindParam(":nom",$nom);
        $stmt->bindParam(":prenom",$prenom);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":telephone",$telephone);
        $stmt->bindParam(":role",$role);
        $stmt->bindParam(":password",$password);
        $stmt->execute();
        }
    }
};
 

class Members extends Utilisateur{
    public  function reservez(){

    }
    public function editReservation(){

    }
    public function sepprimeReservation(){

    }
};
class Admin extends Utilisateur{
    public function crrerActivite(){

    }
    public function  editActivite(){

    }
    public function sepprimeActivite(){

    } 
    public function confirfeReservation(){

    }
    public function anulleReservation(){

    }
};
?>