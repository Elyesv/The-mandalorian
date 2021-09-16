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
    <header id="bg_Histoire">
    <?php
        include 'php/header.php' ;
    ?>
        <div class="fleche bounce">
            <a href="#rangeHistoire1"><img id="flecheBas" src="image/chevron-arrow-down.png" alt="fleche"></a>
        </div>
    </header>

    <div id="return-to-top"><i class="fas fa-chevron-up bounceInverse"></i></div> <!--Boutton pour revenir en haut de la page-->
    <!--Photo qui apparaît-->
    <div id="rangeHistoire1">
        <div class="textRange1 bgResponsive4">
            <p class="titreTextRange1">Synopsis</p>
            <p class="soustitreTextRange1">Après la chute de l'Empire et la fondation de la Nouvelle République, le métier de chasseur de primes ne paie plus. Le Mandalorien, surnommé Mando, connu pour être un des plus redoutables chasseurs de primes, accepte un contrat non officiel. Il s'agit pour lui, moyennant une prime élevée, de retrouver et de ramener à ses commanditaires un être vivant de 50 ans.</p>
            <button type="button" class="button1"> VOIR LA PHOTO</button>
        </div>
        <div class="photoRange1 disappear"></div>
    </div>
    <!--Liste des épisodes-->
    <div class="range2">
        <p class="titreRange2">Liste des épisodes</p>
        <p class="soustitreRange2">Liste compléte de la saison 1. Les description peuvent spoil alors ne pas les lire si vous n'avez pas vue la saison une !</p>
        <div class="boiteRange2">
            <div class="boite">
                <div class="rondBleu">
                    <img src="image/1.png" alt="rondBleu">
                </div>
                <p class="titreBoite">Le Mandalorien</p>
                <p class="descBoite">Cinq ans après la chute de l'Empire Galactique, un chasseur de primes Mandalorien remet sa dernière proie à Greef Karga sur la planète Nevarro. Puis il accepte une mission d'un client énigmatique avec des connexions impériales.</p>
            </div>
            <div class="boite">
                <div class="rondBleu">
                    <img src="image/2.png" alt="rondBleu">
                </div>
                <p class="titreBoite">L'Enfant </p>
                <p class="descBoite">En retournant sur son vaisseau avec l'Enfant, le Mandalorien combat et tue les chasseurs de primes rivaux qui le prennent en embuscade. Arrivé à son vaisseau, il le trouve dépouillé par des jawas pour des pièces et les confronte violemment.</p>
            </div>
            <div class="boite">
                <div class="rondBleu">
                    <img src="image/3.png" alt="rondBleu">
                </div>
                <p class="titreBoite">Le Péché</p>
                <p class="descBoite">L'Enfant est livré au client sur Nevarro et le Mandalorien récupère la prime de 20 barres d'acier Beskar. De manière inhabituelle, le Mandalorien pose des questions sur les plans du client pour l'Enfant, mais on lui répond que cela enfreint le Code.</p>
            </div>
            <div class="boite">
                <div class="rondBleu">
                    <img src="image/4.png" alt="rondBleu">
                </div>
                <p class="titreBoite">Le Sanctuaire</p>
                <p class="descBoite">En arrivant sur la planète peu peuplée Sorgan, le Mandalorien rencontre Cara Dune, une ancienne soldat de choc rebelle devenu mercenaire. Après une brève bagarre, Dune explique qu'elle se cache après avoir pris une « retraite anticipée ».</p> 
            </div>
            <div class="boite">
                <div class="rondBleu">
                    <img src="image/5.png" alt="rondBleu">
                </div>
                <p class="titreBoite">Le Mercenaire</p>
                <p class="descBoite">Le Mandalorien bat un chasseur de primes lors d'un combat spatial. Il fait atterrir son navire endommagé sur un quai de réparation à proximité, géré par Peli Motto à Mos Eisley, sur Tatooine.</p>
            </div>
            <div class="boite">
                <div class="rondBleu">
                    <img src="image/6.png" alt="rondBleu">
                </div>
                <p class="titreBoite">Le Prisonnier</p>
                <p class="descBoite">Le Mandalorien contacte son ancien partenaire Ran pour du travail. Ran lui souhaite la bienvenue dans sa station spatiale et l'informe qu'il a besoin de son vaisseau pour un travail de cinq hommes.</p>
            </div>
            <div class="boite">
                <div class="rondBleu">
                    <img src="image/7.png" alt="rondBleu">
                </div>
                <p class="titreBoite">La Confrontation</p>
                <p class="descBoite">Le Mandalorien reçoit un message de Greef Karga, dont la ville a été envahie par les troupes impériales dirigées par le Client. Karga propose que le Mandalorien utilise l'Enfant comme appât afin de tuer le Client et de libérer la ville.</p>
            </div>
            <div class="boite">
                <div class="rondBleu">
                    <img src="image/8.png" alt="rondBleu">
                </div>
                <p class="titreBoite">Rédemption </p>
                <p class="descBoite">Alors que les deux Scout Troopers retournent à la ville, ils sont rejoints par IG-11, qui les neutralise et récupère l'Enfant avant de prendre un des motospeeders et de foncer en ville. En ville, le chef impérial pose un ultimatum au petit groupe de mercenaires.</p>
            </div>
        </div>
    </div>

    <?php
        include 'php/footer.php' ;
    ?>

<script src="js/script_histoire.js"></script>

</body>
</html>