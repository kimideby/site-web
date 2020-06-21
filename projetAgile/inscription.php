<?php
  // Permet de savoir s'il y a une session. 
  // C'est-à-dire si un utilisateur s'est connecté à votre site 
  session_start(); 
  
  // Fichier PHP contenant la connexion à votre BDD
  include('conn_db.php'); 

  if(isset($_SESSION['id'])){
      header('Loaction: index.php');
      exit;
  }

  if(!empty($_POST)){
      extract($_POST);
      $valid = true;

      if(isset($_POST['inscription'])){
          $nom = htmlentities(trim($nom));
          $prenom = htmlentities(trim($prenom));
          $mail = htmlentities(strtolower(trim($mail)));
          $mdp = trim($mdp);
          $confmdp = trim($confmdp);

        if(empty($nom)){
            $valid = false;
            $er_nom = "Le nom d'utilisateur ne peut être vide";   
        }

        if(empty($prenom)){
            $valid = false;
            $er_prenom = "Le prenom d'utilisateur ne peut être vide";
        }

        if(empty($mail)){
            $valid = false;
            $er_mail = "Le prenom d'utilisateur ne peut être vide";
            
        }elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)){
            $valid = false;
            $er_mail = "Ce mail n'est pas valide";
        }
        else{
        $req_mail = $DB->query("SELECT mail FROM utilisateur WHERE mail=?", array($mail));
        $req_mail = $req_mail->fetch();

        if($req_mail['mail'] <> ""){
            $valid = false;
            $er_mail = "Ce mail exste déjà";
        }
      }

      if(empty($mdp)){
        $valid = false;
          $er_mdp = "Le mot de passe ne peut être vide";
      }elseif($mdp != $confmdp){
        $valid = false;
        $er_mdp = "La confirmation du mot de passe ne correspond pas";
      }
      
      if($valid){
        $mdp = crypt($mdp, "$6$rounds=5000$macleapersonnaliseretagardersecret$");
        $date_creation_compte = date('Y-m-d H:i:s');
      
      $DB->insert("INSERT INTO utilisateur (nom, prenom, mail, mdp, date_creation_compte) 
      VALUES (?, ?, ?, ?, ?)", array($nom, $prenom, $mail, $mdp, $date_creation_compte));
      header('Location: index.php');
      exit;
    }

  }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inscription</title>
        <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>    
            
        <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Créer un compte</h2>
                        <div class="form-group" >
                          <?php 
                            if(isset($er_nom)){
                          ?>
                          <div class="rouge"><?= $er_nom ?></div>  
                          <?php     
                              }
                          ?>
                          <input type="text" class="form-input" name="nom" id="name" value="<?php if(isset($nom)){ echo $nom; }?>" placeholder="Nom Utilisateur"/  required>
                        </div>
                        <div class="form-group">
                          <?php 
                            if(isset($er_prenom)){
                          ?>
                          <div class="rouge"><?= $er_prenom ?></div>  
                          <?php     
                              }
                          ?>
                          <input type="text" class="form-input" name="prenom" id="prename" value="<?php if(isset($prenom)){ echo $prenom; }?>" placeholder="Prenom Utilisateur"/  required>
                        </div>
                        <div class="form-group">
                            <?php 
                              if(isset($er_mail)){
                            ?>
                            <div class="rouge"><?= $er_mail ?></div>  
                            <?php     
                                }
                            ?>
                            <input type="text" class="form-input" name="mail" id="mail" value="<?php if(isset($mail)){ echo $mail; }?>" placeholder="Adresse mail"/  required>
                        </div>
                        <div class="form-group">
                          <?php 
                             if(isset($er_mdp)){
                          ?>
                          <div class="rouge"><?= $er_mdp ?></div>  
                          <?php     
                              }
                          ?>
                            <input type="text" class="form-input" name="mdp" id="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" placeholder="Mot de passe"/  required>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" placeholder="Confirmer le mot de passe" name="confmdp" required>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>J'accepte les conditions d'utilisation <a href="conditions.txt" class="term-service"></a></label>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="inscription" class="form-submit">Envoyer</button>
                        </div>
                    </form>
                    <p class="loginhere">
                        Avez-vous déjà un compte ? <a href="connexion.php" class="loginhere-link">Connectez-vous ici</a>
                    </p>
                </div>
            </div>
        </section>

    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>