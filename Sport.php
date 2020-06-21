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
                <h2>Le Sport reduit le risque de cancert</h2>
                <div class="title"> Maintenir une activité physique, entre modérée et soutenue, permettrait de réduire le risque de treize types de cancers</div>
                <div class="pic">
                    <img src="asset/images/cancer.jpg" alt="">
                </div>
                    <div class="desc">  
                        <br><a href="sport_cancer.php" class="btn read-more">Voir Plus</a>
                    </div>
            </article>
        </div>

            <div class="card">
                <span class="close"></span>
                <span class="arrow"></span>
                <article>
                    <h2>Conseils pour atténuer la douleur lors du sport</h2>
                    <div class="title"> <br><br><br> Comment alléger la pratique du sport ?</div>
                    <div class="pic">
                        <img src="asset/images/allegerDouleurSport.jpg" alt="">
                    </div>
                        <div class="desc">  
                            <a href="sport_facile.php" class="btn read-more">Voir Plus</a>
                        </div>
                </article>
            </div>

            <div class="card">
                    <span class="close"></span>
                    <span class="arrow"></span>
                    <article>
                        <h2>Plus de sport ne vous fera pas maigrir</h2>
                        <div class="title">Bouger au quotidien est une habitude saine, mais pour mincir, il faut surtout réduire ses apports caloriques. </div>
                        <div class="pic">
                            <img src="asset/images/sport+alimentation.jpg" alt="">
                        </div>
                            <div class="desc">  
                                <a href="sport_maigrir.php" class="btn read-more">Voir Plus</a>
                            </div>
                    </article>
                </div>

                <div class="card">
                        <span class="close"></span>
                        <span class="arrow"></span>
                        <article>
                            <h2>Le sport dans une ville polluée: bonne ou mauvaise idée?</h2>
                            <div class="title">En cas d’effort intense,le débit ventilatoire augmente fortement,et avec lui le volume de polluants inhalés </div>
                            <div class="pic">
                                <img src="asset/images/jolie-fille.jpeg" alt="">
                            </div>
                                <div class="desc">  
                                    <a href="Sport_ville_pollué.php" class="btn read-more">Voir Plus</a>
                                </div>
                        </article>
                </div>

                <div class="card">
                        <span class="close"></span>
                        <span class="arrow"></span>
                        <article>
                            <h2>Les effets d'un nouveau sport sur le cerveau</h2>
                            <div class="title">Se lancer dans un nouveau sport, peut renforcer et même modifier le cerveau</div>
                            <div class="pic">
                                <img src="asset/images/sport_cerveau.jpg" alt="">
                            </div>
                                <div class="desc">  
                                    <a href="Sport&cerveau.php" class="btn read-more">Voir Plus</a>
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