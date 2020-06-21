<?php
/*adresse du serveur: adresse IP ou le nom de la Hote (localhost=serveur local).
 $server="localhost"; 
/*nom de l'utilisateur ayant droit sur la bdd, ici c'est l'administrateur général root
 $user="userDuDev"; 
//mot de passe de cet utilisateur 
 $pwd="userDuDev"; 
/*nom de la base de données.
 $db = "sitedudev";  
// connexion au serveur MYSQL et à la source de données 
 $conn=mysqli_connect ($server, $user, $pwd, $db)or die('ERROR pour se connecter'.mysqli_connect_error()) ;*/
 ?>
  
  <?php
  // Déclaration d'une nouvelle classe
  class connexionDB {
    private $host    = 'localhost';   // nom de l'host
    private $name    = 'sitedudev';     // nom de la base de donnée
    private $user    = 'userDuDev';        // utilisateur
    private $pass    = 'userDuDev';        // mot de passe
    //private $pass    = '';          // Ne rien mettre si on est sous windows
    private $connexion;
                    
    function __construct($host = null, $name = null, $user = null, $pass = null){
      if($host != null){
        $this->host = $host;           
        $this->name = $name;           
        $this->user = $user;          
        $this->pass = $pass;
      }
      try{
        $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->name,
          $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8', 
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
      }catch (PDOException $e){
        echo 'Erreur : Impossible de se connecter  à la BDD !';
        die();
      }
    }
    
    public function query($sql, $data = array()){
      $req = $this->connexion->prepare($sql);
      $req->execute($data);
      return $req;
    }
    
    public function insert($sql, $data = array()){
      $req = $this->connexion->prepare($sql);
      $req->execute($data);
    }
  }
  
  // Faire une connexion à votre fonction
  $DB = new connexionDB();
  ?>