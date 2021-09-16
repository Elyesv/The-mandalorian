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

<body >
    <!-- Header avec le menu burger pour naviguer sur le site--> 
    <header id="bg_galerie">
        <?php
            include 'php/header.php';
            require_once 'php/database.php';
        ?>
        <div class="fleche bounce">
            <a href="#titreGalerie"><img id="flecheBas" src="image/chevron-arrow-down.png" alt="fleche"></a>
        </div>
    </header>

    <div id="return-to-top"><i class="fas fa-chevron-up bounceInverse"></i></div> <!--Boutton pour revenir en haut de la page-->

    <div id="galerie">
        <div id="titreGalerie">
            <p class="titre">Galerie</p>
            <p class="sousTitre">Vous pouvez retrouvez toutes les photos lié à la série</p>
        </div>
        <div id="filtre">
            <ul>
                <li><button class="button1">Photo du tournage</button></li>
                <li><button class="button1">Photo de la série</button></li>
                <li><button class="button1">Toutes les photos</button></li>
            </ul>
        </div>
        <div class="photo">
            <div class="tournage photo1" data-url="url(image/tournage1.jpg)"></div>
            <div class="serie photo8" data-url="url(image/serie1.jpg)"></div>
            <div class="tournage photo2" data-url="url(image/tournage2.jpg)"></div>
            <div class="serie photo9" data-url="url(image/serie2.jpg)"></div>
            <div class="tournage photo3" data-url="url(image/tournage3.jpg)"></div>
            <div class="serie photo10" data-url="url(image/serie3.jpg)"></div>
            <div class="tournage photo4" data-url="url(image/tournage4.jpg)"></div>
            <div class="tournage photo5" data-url="url(image/tournage5.jpg)"></div>
            <div class="serie photo11" data-url="url(image/serie4.jpg)"></div>
            <div class="serie photo12" data-url="url(image/bg_header2.jpg)"></div>
            <div class="tournage photo6" data-url="url(image/tournage6.jpg)"></div>
            <div class="tournage photo7" data-url="url(image/tournage7.jpg)"></div>
            <div class="serie photo13" data-url="url(image/bg2.jpg)"></div>
            <div class="serie photo14" data-url="url(image/serie7.jpg)"></div>  
        </div>
        <div class="allCom">
            <div class="titreCom">
                <p class="titre">Commentaire</p>
                <p class="sousTitre">Vous avez quelque chose à dire, faite le en dessous</p>
                <ul>
                    <li><button class="button1">Poster un commentaire</button></li>
                </ul>
            </div>
            <?php 
                if (isset($_POST['firstName'], $_POST['message'])){
                    if (!empty($_POST['firstName']) and !empty($_POST['message'])){
                        $name = htmlspecialchars($_POST['firstName']);
                        $message = htmlspecialchars($_POST['message']);
                        $insulte = __DIR__ . DIRECTORY_SEPARATOR . 'ressources/insultes.txt';
                        $insultes = file($insulte);
                        $sansEspace = array_map("trim", $insultes);
                        $allInsulte = array_map("strtolower", $sansEspace);
                        foreach($allInsulte as $string)
                        {
                            if(strpos($message, $string) !== false) 
                            {
                                $foudnInsult = "Votre commentaire ne doit pas contenir d'insulte";
                            }
                        }
                        if (!isset($foudnInsult)){
                            $insert = $pdo->prepare('INSERT INTO commentaire(name, message) VALUES(?,?)');
                            $insert->execute(array($name, $message));
                        } 
                    }
                } 
            ?>
            <form method="POST" class="formulaireCom displayNone">
                <div class="name2">
                    <div class="firstNamePosCom">
                        <label for="firstName">Votre pseudo</label>
                        <input type="text" name="firstName" id="firstName" placeholder="Prénom" required>
                        <ul>
                            <li class="verifFirstName">La case ne doit pas être vide</li>
                        </ul>
                    </div>
                </div>
                <div class="message">
                    <label for="message">Votre message</label>
                    <textarea id="contenu" name="message" placeholder="Mettez votre message ici" required></textarea>
                    <ul>
                        <li class="verifMsg">La case ne doit pas être vide</li>
                        <li class="verifMsg">Votre message doit contenir au moins 3 caractères</li>
                    </ul>
                </div>
                <div class="bouttonForm">
                    <input type="submit" class="button">
                    <input type="reset" class="button">
                </div>
                <div id="redirect"></div>
            </form>
            <p class="foundInsult"><?php if(isset($foudnInsult)){
                echo $foudnInsult;
            } ?></p>
            <?php 
                $req = $pdo->query('SELECT * FROM `commentaire` ORDER BY `commentaire`.`date` DESC');
                $allCom = $req->fetchAll();
                foreach ($allCom as $com){ ?>
                    <div class="commentaire">
                        <div class="info">
                            <div>
                                <p class="pseudo"><?= $com['name'] ?></p>
                                <p class="heure"><?= $com['date'] ?></p>
                            </div>  
                            <p class="messageCom"><?= $com['message'] ?></p>     
                        </div>
                        <?php
                        if(!isset($_SESSION['role'])){
                            echo '';
                        }
                        elseif($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'editor'){ ?>
                            <a href="php/delete.php?id=<?=$com["id"]?>">
                                <div class="delete displayNone">
                                    <img src="image/delete.png" alt="delete">
                                </div>
                            </a>
                        <?php } ?>

                    </div>
                <?php } ?>
        </div>
    </div>

    <div class="fondNoir">
        <div class="photoGrand"></div>
    </div>

    <?php
        include 'php/footer.php' ;
    ?>
    
    <script src="js/script_galerie.js"></script>

</body>
</html>

