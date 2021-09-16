<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_back2.css" type="text/css" />
    <title>The Mandalorian</title>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/2a053f15fd.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>

<body>
    <header id='backHeader'>
        <nav class="navbar">
            <h1><a class="retourIndex" href="index.php">Administration</a></h1>
            <ul>
                <?php 

                require_once 'php/database.php';

                if($_SESSION['role'] == 'admin'){
                    echo "<li><a href='#utilisateur' class='navbarItem'>Utilisateur</a></li>";
                    echo "<li><a href='#contact' class='navbarItem'>Contact</a></li>";
                } 
                ?>

                <li><a href="#blog" class='navbarItem'>Article</a></li>
                <li><a href="deco.php" class='navbarItem'>Déconnexion</a></li>
            </ul>
        </nav>
    </header>

    <?php 

        

        if(isset($_POST['envoyer'])){
            if(!empty($_POST['titreArticle']) and !empty($_POST['summernote'])){
                $titre = htmlspecialchars($_POST['titreArticle']);
                $message = htmlspecialchars($_POST['summernote']);
                $image = $_FILES['image'];
                $directory = 'image';
                $link_image = $directory.'/'.$image['name'];
                move_uploaded_file($image['tmp_name'], $link_image);
                $insert = $pdo->prepare('INSERT INTO blog(titre, message, linkimage) VALUES(?,?,?)');
                $insert->execute(array($titre, $message, $link_image));
                header('Location: back2.php');
            }
        }

        if (isset($_POST['modify'])){
            $titre_modify = htmlspecialchars($_POST['titreArticle']);
            $message_modify = htmlspecialchars($_POST['summernote']);
            $img_modify = $_POST['img'];
            $id_modify = $_POST['id'];
        }

        if (isset($_POST['modifier'])){
            $titre_modify = htmlspecialchars($_POST['titreArticle']);
            $message_modify = htmlspecialchars($_POST['summernote']);
            $id_modify = $_POST['id'];
            if($_FILES['image']['name'] != ''){
                $image = $_FILES['image'];
                $directory = 'image';
                $link_image = $directory.'/'.$image['name'];
                move_uploaded_file($image['tmp_name'], $link_image);
            }
            else{
                $link_image = $_POST['img'];
            }
            $send = $pdo -> prepare("UPDATE blog SET titre = '$titre_modify', message = '$message_modify', linkimage = '$link_image' WHERE id = $id_modify");
            $send -> execute();
            header('Location: back2.php');
        }
        

    ?>

    <div id="blog">
        <p class="titreBlog">Ajouter/Modifier un article</p>
        <form method="POST" class="formArticle" enctype="multipart/form-data">
            <input type="text" id="titreArticle" name="titreArticle" placeholder="Titre de l'article" value="<?php 
                if (isset($titre_modify)){
                    echo $titre_modify;
                }
            ?>">
            <textarea id="summernote" name="summernote"><?php 
                if (isset($message_modify)){
                    echo $message_modify;
                }
            ?></textarea>
            <input type="file" name="image" id="imageUp">  

            <?php 
                if(isset($_POST['modify'])){ ?>
                    <input type="hidden" name ="id" value="<?= $id_modify ?>">
                    <input type="hidden" name ="img" value="<?= $img_modify ?>">
                <?php }
            ?>

            <input type='submit' class="button" name="<?php 
                if (isset($_POST['modify'])){
                    echo 'modifier';
                    }
                else{echo 'envoyer';
                }?>" 
            value="<?php
                if (isset($_POST['modify'])){
                    echo 'Modifier';
                }
                else{
                    echo 'Créer';
                }?>">
        </form>
    </div>

    <div id="allArticle">
    <p class="titreArticle">Liste des articles en ligne</p>
    <?php 
        $req = $pdo->query('SELECT * FROM `blog` ORDER BY `id` DESC');
        $allArticle = $req->fetchAll();
        foreach ($allArticle as $article){
    ?>
    
        <form method="POST">
            <div class="article">
               <p>Titre de l'article</p>
               <p><?= $article['titre'] ?></p>
               <input type="hidden" name="titreArticle" value="<?= $article['titre'] ?>">
               <input type="hidden" name="summernote" value="<?= $article['message'] ?>"> 
               <input type="hidden" name="id" value="<?= $article['id'] ?>">
               <input type="hidden" name="img" value="<?= $article['linkimage']?>">
               <?php 
                    if($_SESSION['role'] == 'admin'){ ?>
                        <a href="php/delete_article.php?id=<?=$article["id"]?>" class="removeArticle">Supprimer</a>
                    <?php }
               ?>
               <input type="submit" name="modify" value="Modifier" class="button">
            </div>
        </form>  
        <?php } ?>
    </div>

    <script src="js/script_back.js"></script>

    <script>
        $('#summernote').summernote({
            placeholder: "Contenue de l'article",
            tabsize: 2,
            height: 250,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>

</body>
</html>