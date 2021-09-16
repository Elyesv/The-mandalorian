<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css" type="text/css" />
    <title>The Mandalorian</title>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2a053f15fd.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
    <header id="bg_blog">
        <?php 
            include 'php/header.php';
            require_once 'php/database.php'
        ?>
        <div class="fleche bounce">
            <a href="#blog"><img id="flecheBas" src="image/chevron-arrow-down.png" alt="fleche"></a>
        </div>
    </header>

    <div id="return-to-top"><i class="fas fa-chevron-up bounceInverse"></i></div>

    <div id="blog">
        <p class="titreBlog">Découvrez nos articles sur la série</p>
        <div class="allArticle">
        <?php 
            $req = $pdo->query('SELECT * FROM `blog` ORDER BY `blog`.`date` DESC');
            $allArticle = $req->fetchAll();
            foreach ($allArticle as $article){ 
                $resume = strip_tags(htmlspecialchars_decode($article['message']));
            ?>
                <div class="Article">
                    <div class="imgArticle">
                        <img src="<?= $article['linkimage'] ?>" alt="test">
                    </div>
                    <div class="articleContent">
                        <div class="articleHead">
                            <p><?= $article['titre']?></p>
                            <p><?= $article['date'] ?></p>
                        </div>
                        <div class="articleBody">
                            <p><?= substr($resume, 0, 200); ?> <a href="article.php?id=<?=$article["id"]?>" class="linkArticle">Voir la suite</a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    
    <?php 

    include 'php/footer.php';

    ?>

    <script src="js/script_blog.js"></script>

</body>