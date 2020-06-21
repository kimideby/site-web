<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Authentification</title>
    <link rel="stylesheet" href="asset/CSS/styleform.css">
    
</head>
<body>
    <div class="main">

    

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                  <div class="signup-content">
                    <form id="signup-form" class="signup-form" method="POST" action="scripts_php/connexion.php">
                        <h2 class="form-title">Authentification</h2>
                        <div class="field" class="form-group">
                            <input type="text" class="form-input" name="login" id="password" placeholder="Login"/>
                        </div>
                        <div class="field" class="form-group">
                            <input type="text" class="form-input" name="mdp" id="password" placeholder="Mot de passe"/>
                        </div>
                        <div class="field" class="form-group">
                            <input id="bouton" type="submit" name="Bconnexion" value="Connexion" id="submit" class="form-submit">
                        </div>
                        <div class="bottom-text">
                            <p>Vous n'avez pas de compte?  <a href="inscription.php">S'inscrire</a></p>
                           </div>
                    </form>
                </div>
                
        
              </div>
          </div>
        </section>
        
    </div>
</body>
</html>