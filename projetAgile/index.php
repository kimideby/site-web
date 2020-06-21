<?php
  // Permet de savoir s'il y a une session. 
  // C'est-à-dire si un utilisateur s'est connecté à votre site 
  session_start(); 
  
  // Fichier PHP contenant la connexion à votre BDD
  include('conn_db.php'); 
?>

<!DOCTYPE html>
<html>
  ﻿<head>
    ﻿<meta charset="utf-8"/>
    ﻿<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  ﻿  <title>Accueil</title>
  </head>
  ﻿<body>
    ﻿<h1>Mon site</h1>
﻿    <?php
          if(!isset($_SESSION['id'])){
     ?>
      <a href="inscription.php">Inscription</a> <!-- Liens de nos futures pages -->
      ﻿<a href="connexion.php">Connexion</a>
      <a href="motdepasse.php">Mot de passe oublié</a>
    <?php
          }else{
     ?>
      ﻿<a href="profil.php">Mon profil</a>
      ﻿<a href="modifier-profil.php">Modifier mon profil</a>
      <a href="deconnexion.php">Déconnexion</a>
     <?php
          }
     ?>
  </body>
</html>