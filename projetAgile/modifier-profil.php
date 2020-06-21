<?php
	session_start();
	include 'conn_db.php';
	if(!isset($_SESSION['id'])){
		header("Location: index.php");
		exit;
	}

	//On récupère les données du user connecté
	$afficher_profil = $DB->query("SELECT * FROM utilisateur WHERE id = ?", array($_SESSION['id']));
	$afficher_profil = $afficher_profil->fetch();

	if(!empty($_POST)){
		extract($_POST);
		$valid = true;

		if(isset($_POST['modification'])){
			$nom = htmlentities(trim($nom));
			$prenom = htmlentities(trim($prenom));
			$mail = htmlentities(strtolower(trim($mail)));

			if(empty($nom)){
				$valid = false;
				$er_nom = "Il faut mettre un nom";
			}

			if(empty($prenom)){
				$valid = false;
				$er_prenom = "Il faut mettre un prénom";
			}

			if(empty($mail)){
				$valid = false;
				$er_mail = "Il faut mettre un mail";
			}elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)){
            $valid = false;
            $er_mail = "Ce mail n'est pas valide";
        	}else{
				$req_mail = $DB->query("SELECT mail FROM utilisateur WHERE mail = ?", array($mail));
				$req_mail = $req_mail->fetch();

				if ($req_mail['mail'] <> "" && $_SESSION['mail'] != $req_mail['mail']) {
					$valid = false;
					$er_mail = "Ce mail existe déjà";
				}
			}
			if($valid){
			$DB->insert("UPDATE utilisateur SET prenom  = ?, nom = ?, mail = ? WHERE id = ? ", array($prenom, $nom, $mail, $_SESSION['id']));

			$_SESSION['nom'] = $nom;
			$_SESSION['prenom'] = $prenom;
			$_SESSION['mail'] = $mail;

			header("Location: profil.php");
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
        <title>Modification</title>
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
                        <h2 class="form-title">Modification</h2>
                        <div class="form-group" >
                          <?php 
                            if(isset($er_nom)){
                          ?>
                          <div class="rouge"><?= $er_nom ?></div>  
                          <?php     
                              }
                          ?>
                          <input type="text" class="form-input" name="nom" id="name" value="<?php if(isset($nom)){ echo $nom; }else{ echo $afficher_profil['nom'];}?>" placeholder="Nom Utilisateur"/  required>
                        </div>
                        <div class="form-group">
                          <?php 
                            if(isset($er_prenom)){
                          ?>
                          <div class="rouge"><?= $er_prenom ?></div>  
                          <?php     
                              }
                          ?>
                          <input type="text" class="form-input" name="prenom" id="prename" value="<?php if(isset($prenom)){ echo $prenom; }else{ echo $afficher_profil['prenom'];}?>" placeholder="Prenom Utilisateur"/  required>
                        </div>
                        <div class="form-group">
                            <?php 
                              if(isset($er_mail)){
                            ?>
                            <div class="rouge"><?= $er_mail ?></div>  
                            <?php     
                                }
                            ?>
                            <input type="text" class="form-input" name="mail" id="mail" value="<?php if(isset($mail)){ echo $mail; }else{ echo $afficher_profil['mail'];}?>" placeholder="Adresse mail"/  required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="modification" class="form-submit">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>


