<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">


    <title>Admin Section - add Users</title>
    <link rel="stylesheet" href="../../asset/CSS/style.css">
    <link rel="stylesheet" href="../../asset/CSS/admin.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1 class="logo-text"><span>SOLID </span>SANTE</h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
           
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    Votre Profil
                    <i class="fa fa-chevron-down" style="font-size: -8em;"></i>
                </a>
                <ul>
                        <li><a href="../../index.php" class="logout">Deconnexion</a></li>
                </ul>
            </li>
            
        </ul>
    </header>


    <!-- Admin Page Wrapper-->
    <div class="admin-Wrapper">
        <!--Left Sidebar-->
            <div class="left-sidebar">
                <ul>
                    <li><a href="../posts/index.php">Manage Posts</a></li>
                    <li><a href="/index.php">Manage Users</a></li>
                    <li><a href="../topics/index.php">Manage Categories</a></li>
                </ul>
            </div>
        <!--//Left Sidebar-->
        <!--Admin Content-->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Ajoutez un User</a>
                    <a href="index.php" class="btn btn-big">Manage User</a>
                </div class="content">
                <h2 class="page-title">Ajoutez User</h2>

               <form action="create.php" method="POST">
                   <div>
                       <label >Username</label>
                       <input type="text" name="username" class="text-input">
                   </div>
                   <div>
                       <label>Email</label>
                       <input type="emai" name="email" class="text-input">
                   </div>
                   <div>
                       <label>Mot de passe</label>
                       <input type="password" name="password" class="text-input">
                   </div>
                   <div>
                       <label>Confirmation Mot de passe</label>
                       <input type="password" name="passwordConf" class="text-input">
                   </div>

                   <div>
                        <label >Role</label>
                        <select name="topic" class="text-input">
                            <option value="medecin">Médecin</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                   
                   <div>
                       <button type="submit" class="btn btn-big">Ajoutez un user</button>
                   </div>
               </form>

                <div>

                </div>
            </div>
        <!--//Admin Content-->
           
            
    </div>
        <!-- //Page Wrapper-->
    
       <!--JQuery source-->
       <script type="text/javascript" src="../../asset/JS/jquery-3.2.1.js"> </script>
    
       <!--Source JS-->
       <script src="../../asset/JS/article.js"></script>

        <!--Ckeditor 5-->
        <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    
      
        
</body>
</html>