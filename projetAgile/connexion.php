<?php
    session_start();
    include('conn_db.php');

    if(isset($_SESSION['id'])){
        header('Location: index.php');
        exit;
    }

    if(!empty($_POST)){
        extract($_POST);
        $valid = true;

        if(isset($_POST['connexion'])){
            $mail = htmlentities(strtolower(trim($mail)));
            $mdp = trim($mdp);

            if(empty($mail)){
                $valid = false;
                $er_mail = "Il faut mettre un mail";
            }

            if(empty($mail)){
                $valid = false;
                $er_mdp = "Il faut mettre un mot de passe";
            }

            $req = $DB->query("SELECT * FROM utilisateur WHERE mail = ? AND mdp = ?", array($mail, crypt($mdp, "$6$rounds=5000$macleapersonnaliseretagardersecret$")));
            $req = $req->fetch();

            if($valid){
                $_SESSION['id'] = $req['id'];
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prenom'] = $req['prenom'];
                $_SESSION['mail'] = $req['mail'];

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
        <link rel="stylesheet" href="css/styleform.css">
        <title>Connexion</title>
    </head>
    <body>    
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                  <div class="signup-content">
                    <form id="signup-form" class="signup-form" method="POST">
                        <h2 class="form-title">Authentification</h2>
                        <div class="field" class="form-group">
                            <?php 
                                if(isset($er_mail)){
                            ?>
                            <div><?= $er_mail ?></div>
                            <?php 
                                }
                            ?>
                            <input type="email" placeholder="Adresse mail" name="mail" class="form-input" value="<?php if(isset($mail)){ echo $mail; }?>" required>
                        </div>
                        <div class="field" class="form-group">
                            <?php 
                                if(isset($er_mdp)){
                            ?>
                            <div><?= $er_mdp ?></div>
                            <?php 
                                }
                            ?>
                            <input type="password" placeholder="Mot de passe" name="mdp" class="form-input" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
                        </div>
                        <div class="field" class="form-group">
                            <button type="submit" name="connexion" class="form-submit" >Se connecter</button>
                        </div>
                    </form>
                </div>
              </div>
          </div>
        </section>

    </div>
    </body>
</html>


