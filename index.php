<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">


    <title>Solid Sante</title>
    <link rel="stylesheet" href="asset/CSS/style.css">
</head>
<body>
    
<header>
        <div class="logo">
            <h1 class="logo-text"><span>SOLID </span>SANTE</h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
        <li><a href="connexion.php">Se Connecter</a></li>
            
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    Votre Profil
                    <i class="fa fa-chevron-down" style="font-size: -8em;"></i>
                </a>
                <ul>
                        <li><a href="admin/admin.php">tableau de bord</a></li>
                        
                        <li><a href="" class="logout">Deconnexion</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <!-- Page Wrapper-->
    <div class="page-Wrapper">
            <!-- Post Slider-->
            <div class="post-slider">
                <h1 class="slider-title">Articles recents</h1>
               <i class="fas fa-chevron-left prev"></i>
               <i class="fas fa-chevron-right next"></i>
    
               <div class="post-wrapper">
                    <div class="post">
                        <img src="asset/images/jolie-fille.jpeg" alt="" class="slider-image">
                        <div class="post-info">
                            <h4><a href="Sport_ville_pollué.php">Faire du sport dans une ville polluée: bonne ou mauvaise idée?</a></h4>
                            <i class="far fa-user">El Hadji</i>
                            &nbsp;
                            <i class="far fa-calendar"> Mar 24,2019</i>
                        </div>
                    </div>
                    <div class="post">
                            <img src="asset/images/alimentationWrapper.jpg" alt="" class="slider-image">
                            <div class="post-info">
                                <h4><a href="Alimentation_anti_fatigue.php">Alimentation anti-fatigue : des menus pour retrouver de l'énergie</a></h4>
                                <i class="far fa-user">Deborah</i>
                                
                                <i class="far fa-calendar"> Mar 24,2019</i>
                            </div>
                    </div>
                    <div class="post">
                            <img src="asset/images/Vegetarien.jpg" alt="" class="slider-image">
                            <div class="post-info">
                                <h4><a href="melange_vegetarien.php">Végétariens : 5 mélanges pour faire le plein en fer</a></h4>
                                <i class="far fa-user">Bousso</i>
                                
                                <i class="far fa-calendar"> Mar 24,2019</i>
                            </div>
                    </div>
                    <div class="post">
                            <img src="asset/images/cancer.jpg" alt="" class="slider-image">
                            <div class="post-info">
                                <h4><a href="sport_cancer.php">Avoir une activité physique régulière réduirait le risque de 13 types de cancer</a></h4>
                                <i class="far fa-user">El Hadji</i>
                                
                                <i class="far fa-calendar"> Mar 24,2019</i>
                            </div>
                    </div>
                    <div class="post">
                            <img src="asset/images/sport+alimentation.jpg" alt="" class="slider-image">
                            <div class="post-info">
                                <h4><a href="sport_maigrir.php">Augmenter votre activité sportive ne vous fera pas maigrir</a></h4>
                                <i class="far fa-user">El Hadji</i>
                                
                                <i class="far fa-calendar"> Mar 24,2019</i>
                            </div>
                    </div>
                </div>
    
            </div>
            <!-- //Post Slider -->
            <!--Content-->
            <div class="content clearfix">
                <!--main content-->
                <div class="main-content">
                    <h1 class="recent-post-title">Recentes publications</h1>

                    <div class="post">
                        <img src="asset/images/jolie-fille.jpeg" alt="" class="post-image">
                        <div class="post-preview">
                            <h2><a href="Sport_ville_pollué.php">Faire du sport dans une ville polluée: bonne ou mauvaise idée?</a></h2>
                            <i class="far fa-user">El Hadji</i>
                            &nbsp;
                            <i class="far calendar"> Mar 24,2019</i>
                            <p class="preview-text">En cas d’effort intense, le débit ventilatoire augmente fortement, et avec lui le volume de polluants inhalés, selon le Dr Dixsaut.</p>
                            <a href="Sport_ville_pollué.php" class="btn read-more">Voir plus</a>
                        </div>
                    </div>

                    <div class="post">
                            <img src="asset/images/sport+alimentation.jpg" alt="" class="post-image">
                            <div class="post-preview">
                                <h2><a href="sport_maigrir.php">Augmenter votre activité sportive ne vous fera pas maigrir</a></h2>
                                <i class="far fa-user">El Hadji</i>
                                &nbsp;
                                <i class="far calendar"> Mar 24,2019</i>
                                <p class="preview-text">Bouger au quotidien est une habitude saine, mais pour mincir, il faut surtout réduire ses apports caloriques. Stephanie Scheirlynck est nutritionniste du sport et spécialiste de l'alimentation, elle nous donne quelques explications à ce sujet.</p>
                                <a href="sport_maigrir.php" class="btn read-more">Voir plus</a>
                            </div>
                        </div>
                </div>
                <!-- //main content-->
                <div class="sidebar">

                    <div class="section search">
                        <h2 class="section-title">Recherche</h2>
                        <form action="index.php" method="POST">
                            <input type="text" name="search-term" class="text-input" placeholder="Recherche...">
                        </form>
                    </div>

                    <div class="section topics">
                        <h2 class="section-title">Catégories</h2>
                        <ul>
                            <li><a href="Sport.php">Sport</a></li>
                            <li><a href="Alimentation.php">alimentation</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- // Content -->
        </div>
        <!-- //Page Wrapper-->
    
        <!--JQuery source-->
        <script type="text/javascript" src="asset/JS/jquery-3.2.1.js"> </script>
    
        <!--Source JS-->
        <script src="asset/JS/article.js"></script>
        <!--Slick carousel-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>