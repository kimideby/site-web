<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WeerYaram</title>

    <link rel="stylesheet" href="asset/CSS/hug.css">
</head>
<body>
    <div class="cards">
        <div class="card">
            <span class="close"></span>
            <span class="arrow"></span>
            <article>
                <h2>Alimentation anti-fatigue</h2>
                <div class="title">Certains aliments peuvent booster votre forme. Nos idées de menus pour faire le plein d’énergie.</div>
                <div class="pic">
                    <img src="asset/images/alimentationWrapper.jpg" alt="">
                </div>
                    <div class="desc">  
                        <br><a href="Alimentation_anti_fatigue.php" class="btn read-more">Voir Plus</a>
                    </div>
            </article>
        </div>

            <div class="card">
                <span class="close"></span>
                <span class="arrow"></span>
                <article>
                    <h2>Mélanges végétariens pour faire le plein en fer</h2>
                    <div class="title"> <br><br><br>  Découvrez quelques idées de mélanges savoureux</div>
                    <div class="pic">
                        <img src="asset/images/Vegetarien.jpg" alt="">
                    </div>
                        <div class="desc">  
                            <a href="melange_vegetarien.php" class="btn read-more">Voir Plus</a>
                        </div>
                </article>
            </div>

            <div class="card">
                    <span class="close"></span>
                    <span class="arrow"></span>
                    <article>
                        <h2>Tous les bienfaits santé des olives</h2>
                        <div class="title">les olives sont excellentes pour maintenir l’organisme en bonne santé et en bonne forme </div>
                        <div class="pic">
                            <img src="asset/images/olives.jpg" alt="">
                        </div>
                            <div class="desc">  
                                <a href="Olives.php" class="btn read-more">Voir Plus</a>
                            </div>
                    </article>
                </div>

                <div class="card">
                        <span class="close"></span>
                        <span class="arrow"></span>
                        <article>
                            <h2>4 idées de petits déjeuners riches en protéines</h2>
                            <div class="title"> Découvrez quatre idées de recettes savoureuses et faciles, à préparer tous les matins</div>
                            <div class="pic">
                                <img src="asset/images/alimentationPetitDej.jpg" alt="">
                            </div>
                                <div class="desc">  
                                    <a href="petit_dejeuner.php" class="btn read-more">Voir Plus</a>
                                </div>
                        </article>
                </div>

                <div class="card">
                        <span class="close"></span>
                        <span class="arrow"></span>
                        <article>
                            <h2>Quinoa : 3 bonnes raisons d'en manger !</h2>
                            <div class="title">le quinoa est une petite graine devenue très tendance, qui permet de changer du riz et des pâtes</div>
                            <div class="pic">
                                <img src="asset/images/quinoa.jpg" alt="">
                            </div>
                                <div class="desc">  
                                    <a href="quinoa.php" class="btn read-more">Voir Plus</a>
                                </div>
                        </article>
                    </div>
    

      </div>

    <script>
    var closeBtn= document.querySelectorAll(".close"),
        card=document.querySelectorAll(".card"),
        btnActions= document.querySelectorAll(".btn") ;

        closeBtn.forEach(function(el){
            el.addEventListener("click",closeCard);
        });

        card.forEach(function(el){
            el.addEventListener("click",openCard) ;
        });
        
        btnActions.forEach(function(el){
            el.addEventListener("click",clickBtn);
        });

        function closeCard(event){
            event.stopPropagation();

            event.target.closest(".card").classList.add("closed");
        }

        function openCard(event){
            if(event.currentTarget.classList.contains("closed")){
                event.currentTarget.classList.remove("closed");
        }
    }

    
    
    </script>
</body>
</html>