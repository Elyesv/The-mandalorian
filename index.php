<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css" type="text/css"/>
    <title>The Mandalorian</title>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2a053f15fd.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
     <!-- Header avec le menu burger pour naviguer sur le site--> 
        <header>
        <?php
            include 'php/header.php' ;
            require_once 'php/database.php';
        ?>
        <div class="fleche bounce">
            <a href="#range2"><img id="flecheBas" src="image/chevron-arrow-down.png" alt="fleche"></a>
        </div>
        </header>

        <div id="return-to-top"><i class="fas fa-chevron-up bounceInverse"></i></div> <!--Boutton pour revenir en haut de la page-->


        <!--1ère rangée avec le slider-->
        <div id="range1">
            <p class="titreRange">CAST & CREW</p>
            <p id="nomCrew">Pedro Pascal</p>
            <div id="crew"> 
                <img id="arrowLeft" src="image/arrow_left.png" alt="arrow left">
                <div id="photoCrew"></div>
                <img id="arrowRight" src="image/arrow_right.png" alt="arrow right">
            </div>
        </div>
        <hr>
        <!--2ème rangée avec le trailer-->
        <div id="range2">
            <p class="titreRange">Trailer</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/aOC8E8z_ifw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <!-- 3ème rangée avec la frise-->
        <div id="range3">
            <div class="titreRange">
                <p class="taille02 texte02 positionDateCles">Dates Clés</p>
            </div>
            <div class="frise">
                <div class="texteBox gauche">
                    <div class="texteFrise">
                        <h2>1977 </h2>
                        <p>Publication de la trilogie originale. Épisode IV, V et VI</p>
                    </div>
                </div>
                <div class="texteBox droite">
                    <div class="texteFrise">
                        <h2>1999 </h2>
                        <p>Publication de la deuxième trilogie. Épisode I, II et III</p>
                    </div>
                </div>
                <div class="texteBox gauche">
                    <div class="texteFrise">
                        <h2>2012</h2>
                        <p>Les droits d'auteur de Star Wars sont achetés par la <a class="souligne" href="https://fr.wikipedia.org/wiki/The_Walt_Disney_Company" target="_blank">Walt Disney Company</a> pour 4,05 milliards de dollars.</p>
                    </div>
                </div>
                <div class="texteBox droite">
                    <div class="texteFrise">
                        <h2>2015</h2>
                        <p>Début de la troisième trilogie. Épisode VII, VIII et IX</p>
                    </div>
                </div>
                <div class="texteBox gauche">
                    <div class="texteFrise">
                        <h2>2016</h2>
                        <p>La Walt Disney Company et <a class="souligne" href="https://fr.wikipedia.org/wiki/Lucasfilm" target="_blank">Lucas Film</a> inaugurent en 2016 une série de films dérivés regroupés sous le sigle A Star Wars Story. </p>
                    </div>
                </div>
                <div class="texteBox droite">
                    <div class="texteFrise">
                        <h2>2019</h2>
                        <p>La franchise se développe également sur la plateforme de streaming <a href="https://fr.wikipedia.org/wiki/Disney%2B" target="_blank">Disney+</a>, lancée en novembre 2019 avec la série <a href="https://fr.wikipedia.org/wiki/The_Mandalorian" target="_blank">The Mandalorian.</a></p>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="script.js"></script>
        <?php
            include 'php/footer.php' ;
        ?>

    <script src="js/script.js"></script>

</body>
</html>