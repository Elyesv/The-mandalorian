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
    <?php 
        
        require_once 'php/database.php';

        if (isset($_GET['id'])) {
            $req = $pdo->query('SELECT * FROM blog WHERE id = '.$_GET['id']);
            $article = $req->fetch();
            if ($article){
                $image = $article['linkimage'];
            }  
        }
    ?>
    <header style="background-image: url('<?= $image ?>')">
        <?php 
            include 'php/header.php';
            
        ?>
        <div class="fleche bounce">
            <a href="#voirArticle"><img id="flecheBas" src="image/chevron-arrow-down.png" alt="fleche"></a>
        </div>
    </header>
    
    <div id="voirArticle">
        <p class="voirArticleTitre"><?= $article['titre'] ?></p>
        <div class="voirArticleContent">
            <?= html_entity_decode($article['message']) ?>
        </div>
    </div>

    <?php 
        include 'php/footer.php'
    ?>

    <script src="js/script_blog.js"></script>

</body>