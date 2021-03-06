<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">


    <title>Admin Section - Manage Catégories</title>
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
                    <li><a href="../users/index.php">Manage Users</a></li>
                    <li><a href="/index.php">Manage Categories</a></li>
                </ul>
            </div>
        <!--//Left Sidebar-->
        <!--Admin Content-->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Ajoutez une catégorie</a>
                    <a href="index.php" class="btn btn-big">Manage catégories</a>
                </div class="content">
                <h2 class="page-title">Manage Categories</h2>

                <table>
                    <thead>
                        <th>ID</th>
                        <th>Titre</th>
                        
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sport</td>
                            <td>Oumar</td>
                            <td><a href="#" class="edit">Modifier</a></td>
                            <td><a href="#" class="delete">Delete</a></td>
                        </tr>

                        <tr>
                                <td>2</td>
                                <td>Alimentation</td>
                                <td>Oumar</td>
                                <td><a href="#" class="edit">Modifier</a></td>
                                <td><a href="#" class="delete">Delete</a></td>
                            </tr>
                    </tbody>
                </table>

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
        
</body>
</html>