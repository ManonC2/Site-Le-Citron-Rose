<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Le Citron Rose</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Bebas+Neue&display=swap" rel="stylesheet">        
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/logo2.png" />
    
</head>

    <body>
        <header>
            <a id="logo" href="index.html"><img src="images/logo2.png" alt="Logo du Citron Rose"></a>
        </header>
        
        <?php include("php/Menu.html"); ?>

        <p class="accroche">Le Citron Rose, coaching et salle de sport à Rennes.</p>

        <div class="separateur"></div>

        <div class="presentation">
            <img src="images/accueil_droite.jpg" alt="Cours de yoga">            
            <div class="bienvenue">
                <p class="bienvenue">Bienvenue au Citron Rose, <br> salle de sport et coaching à domicile à Rennes.</p>
                <p class="bienvenue">Chez nous le sport est accessible à tous quels que soient vos envies, 
                vos attentes, votre âge ou votre condition physique ! <br>  Convivialité et bienveillance garanties !</p> 
            </div>
            <img src="images/accueil_gauche.jpg" alt="Coaching musculation">
        </div>

        <div class="separateur"></div>

        <div class="horaires">
            <h1>Horaires d'ouverture :</h1>
            <p>Du lundi au samedi : 7h - 23h</br>
            Dimanche : 9h - 19h</p>
        </div>


        <div class="presentation2">
            <p>Idéalement situé en plein centre-ville de Rennes, dans la rue Maréchal Foch, sur une surface de 360m2, le club est parfaitement 
                aménagé pour vous offrir confort et convivialité, et notre coach à domicile Léa peut facilement se déplacer dans un périmètre de 20 kilomètres autour 
                de la ville de Rennes.</p>

            <p>Au Citron Rose, votre suivi n’est pas une option, vous serez accueilli par nos coaches, 
                qui répondront à toutes vos questions, et vous serez ensuite pris en charge pour un bilan physique, afin de déterminer votre programme.</p> 
                
             <p>Bilans personnalisés et réguliers, programmes sur mesure, suivi au club et à domicile, suivez votre évolution 
                grâce à notre balance médicale impédancemètre dernière génération.</p>   
        </div>

        <div class="carrousel">        
            <h1 class="carrousel">Les avis de nos clients</h1>
        </div>

        <div class="separateur"></div>

        <div class="container">
            <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
             
              <!-- Carrousel -->
              <div class="carousel-inner">
                <div class="carousel-item active" data-interval="4000">
                    <img src="images/avis2.png" alt="avatar">
                  <h1>Anne</h1>
                  <p>Lieu très agréable et très propre avec une équipe accueillante et à l’écoute ! 
                  </br>Rien à redire !</p>
                </div>
                <div class="carousel-item" data-interval="4000">
                    <img src="images/avis1.png" alt="avatar">
                    <h1>Louis</h1>
                    <p>Top, petite salle mais fonctionnelle avec une bonne ambiance!
                    </br> Une équipe très gentille en plus de ça !</p>                
                </div>
                <div class="carousel-item" data-interval="4000">
                    <img src="images/avis3.png" alt="avatar">
                    <h1>Marion</h1>
                    <p>J'ai connu cette salle de sport par hasard et j'en suis tombé amoureuse. </br>
                        L'équipe d'animateurs est formidable, toujours à l'écoute et disponible.</p>                
                </div>
              </div>
              
              <!-- Contrôles -->
              <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
              </a>
              <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
              </a>
            </div>
          </div>

          <div class="separateur-footer"></div>

        <footer>
            <div class="reseaux">
                <img src="images/facebook.png" alt="Facebook">
                <img src="images/instagram.png" alt="Instagram">
            </div>
            <div class="adresse">
                <p> Le Citron Rose</p>
                <p>12 rue Maréchal Foch</p>
                <p>35000 RENNES</p>
                <p>Tél. : 02.99.35.35.35</p>
                <p>Mail : contact@leCitronrose.bzh</p>
            </div>

            <div class="carteFooter">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.9821020590325!2d-1.6876309845551478!3d48.110580979221254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede2d8757945d%3A0x65ab2cd78e788095!2s12%20Place%20Mar%C3%A9chal%20Foch%2C%2035000%20Rennes!5e0!3m2!1sfr!2sfr!4v1616788465541!5m2!1sfr!2sfr" title="Carte" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>           </div>
        </footer>
        
        <script src="carrousel.js"></script>
        <script>cssSlidy();</script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    </body>


</html>