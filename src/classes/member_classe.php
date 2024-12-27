<?php
require_once ("connect.php");
require_once("reservation_classe.php");
require_once("activites_classe.php");
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
    public function setSession(){
        session_start();
        $_SESSION['email']=$this->getEmail();
        $_SESSION['role'] =$this->getRole();
    }
    public function logout(){
        session_unset();
        session_destroy();
    }
    public function login(){
        $error ="";
        $connect = new Connect("localhost","root","12345");
        $stmt =$connect->getConnect()->prepare("select * from  utilisateur  where email =  :email");
        $stmt->bindParam(":email",$this->getEmail());
        $stmt->execute();
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            if (verify_password($this->getPassword(), $row['password'])) {
                $this->setSession();
                if($row['role']==1){
                    header('../../views/admin_dashboard.php');
                    exit;
                }
                elseif($row['role']==2){
                    header('../../views/user_dashboard.php');
                    exit;
                }
            }else 
            $error ="mode passe ne pas vrée";
        }else
        $error ="email  ne existe pas";
        return  $error;
    }

    public function signin($nom , $prenom ,$email,$role,$password,$telephone ){
        $connect = new Connect("localhost","root","12345");
        $stmt =$connect->getConnect()->prepare("select * from utilisateurs  where email = :email");
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        if(!($row = $stmt->fetch(PDO::FETCH_ASSOC))){
            $this->setPrenom($prenom );
            $this->setnom($nom );
            $this->setemail($email );
            $this->setrole($role );
            $password = password_hash($password, PASSWORD_BCRYPT);
            $this->setpassword($password); 
            $this->settelephone($telephone );
            $stmt =$connect->getConnect()->prepare("insert into utilisateurs (nom,prenom,email,telephone,role,password) values (:nom,:prenom,:email,:telephone,:role,:password)");
            $stmt->bindParam(":nom", $nom);
            $stmt->bindParam(":prenom", $prenom);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":telephone", $telephone);
            $stmt->bindParam(":role", $role);
            $stmt->bindParam(":password", $password);
            $stmt->execute();
            return 1;
        }
        return 0;
    }
    
};
 

class Members extends Utilisateur{
    public  function reservez($activite){
        $connect =  new Connect("localhost","root","12345");
        if($activite instanceof Activites){
            $stmt = $connect->getConnect()->prepare("");
            $stmt->bindParam(":id",$this->getId());
            $stmt->execute();
        }
    }
    public function editReservation($reservation,$newReservation){
        $connect = new Connect("localhost","root","12345");
        if($reservation instanceof Reservation  && $newReservation instanceof Reservation){
            $stmt = $connect->getConnect()->prepare("update reservation  set date_reservation =:date where id_reservation = :id ");
            $stmt->bindParam(":date",$newReservation->getIdate());
            $stmt->bindParam(":id",$reservation->getId());
            $stmt->execute();
        }
    }
    public function sepprimeReservation($reservation){
        $connect = new Connect("localhost","root","12345");
        if($reservation instanceof Reservation){
            $stmt = $connect->getConnect()->prepare("delete from reservation where id_reservation = :id ");
            $stmt->bindParam(":id",$reservation->getId());
            $stmt->execute();
    }
    }
    public function listeRservation(){
        $connect = new Connect("localhost","root","12345");
            $stmt = $connect->getConnect()->prepare("select *   from  reservation id_Membre = :id");
            $stmt->bindParam(":id",$this->getId());
            $stmt->execute();
        return $stmt;
    }
    public function listActivite(){
        $connect = new Connect("localhost","root","12345");
        $stmt = $connect->getConnect()->prepare("select *   from  activite  where   disponibilite = 1");
        $stmt->bindParam(":id",$this->getId());
        $stmt->execute();
        return $stmt;
    }
};
class Admin extends Utilisateur{
    public function crrerActivite($activite){
        $connect =  new Connect("localhost","root","12345");
        if($activite instanceof Activites){            
            $stmt = $connect->getConnect()->prepare("insert into activite  (id_admin,nom,descriptionA,capacite,date_fin,disponibilite) values (:id_admin,:nom,:descriptionA,:capacite,:date_fin,:disponibilite)");
            $stmt->bindParam(":id_admin",$activite->get_id_admin());
            $stmt->bindParam(":nom",$activite->get_nom_activite());
            $stmt->bindParam(":descriptionA",$activite->get_description());
            $stmt->bindParam(":capacite",$activite->get_capacite());
            $stmt->bindParam(":date_fin",$activite->get_date_fin());
            $stmt->bindParam(":disponibilite",$activite->get_disponibilite());
            $stmt->execute();
        }

    }
    public function  editActivite($activite,$newActivite){
        if($activite instanceof Activites  && $newActivite instanceof Activites){
            $connect =  new Connect("localhost","root","12345");
            $stmt = $connect->getConnect()->prepare("update Activites set id_admin = :id_admin , nom = :nom , descriptionA = :descriptionA , capacite = :capacite , date_fin = :date_fin , disponibilite = :disponibilite)");
            $stmt->bindParam(":id_admin",$this->getId());
            $stmt->bindParam(":nom",$this->getId());
            $stmt->bindParam(":descriptionA",$this->getId());
            $stmt->bindParam(":capacite",$this->getId());
            $stmt->bindParam(":date_fin",$this->getId());
            $stmt->bindParam(":disponibilite",$this->getId());
            $stmt->execute();
        }
    }
    public function sepprimeActivite($activite){
        $connect = new Connect("localhost","root","12345");
        if($activite instanceof Activites){
            $stmt = $connect->getConnect()->prepare("delete from activite where id_activite = :id ");
            $stmt->bindParam(":id",$activite->get_id_activite());
            $stmt->execute();
        }
    } 
    public function confirfeReservation($reservation){
        $connect = new Connect("localhost","root","12345");
        if($reservation instanceof Reservation){
            $stmt = $connect->getConnect()->prepare("update reservation set statut = 'confirmee' where id_reservation = :id ");
            $stmt->bindParam(":id",$reservation->getId());
            $stmt->execute();
        }
    }
    public function anulleReservation($reservation){
        $connect = new Connect("localhost","root","12345");
        if($reservation instanceof Reservation){
            $stmt = $connect->getConnect()->prepare("update reservation set statut = 'annulee' where id_reservation = :id ");
            $stmt->bindParam(":id",$reservation->getId());
            $stmt->execute();
        }
    }
    public function listeRservation(){
        $connect = new Connect("localhost","root","12345");
            $stmt = $connect->getConnect()->prepare("select r.*   from  reservation r, activite a where  a.id_activite = r.id_activite and a.id_admin = :id");
            $stmt->bindParam(":id",$this->getId());
            $stmt->execute();
        return $stmt;
    }
    public function listActivite(){
        $connect = new Connect("localhost","root","12345");
        $stmt = $connect->getConnect()->prepare("select *   from  activite  where   id_admin = :id");
        $stmt->bindParam(":id",$this->getId());
        $stmt->execute();
    return $stmt;
    }

};

function  autandification(){
    session_start();
    if(!isset($_SESSION['role'])){
        // header("location: login.php");
        // exit;
    }elseif($_SESSION['role']==1){
        header("location: home_admin.php");
        exit;
    }elseif($_SESSION['role']==2){
        header("location: home_user.php");
        exit;
    }
};
function  autandificationC(){
    session_start();
    if(!isset($_SESSION['role'])){
        header("location: login.php");
        exit;
    }elseif($_SESSION['role']==1){
        header("location: home_admin.php");
        exit;
    }elseif($_SESSION['role']==2){
        // header("location: home_user.php");
        // exit;
    }
};
function  autandificationA(){
    session_start();
    if(!isset($_SESSION['role'])){
        header("location: login.php");
        exit;
    }elseif($_SESSION['role']==1){
        // header("location: home_admin.php");
        // exit;
    }elseif($_SESSION['role']==2){
        header("location: home_user.php");
        exit;
    }
};
?>