<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css" type="text/css" />
    <title>The Mandalorian</title>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/2a053f15fd.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body class='backPage'>
    <header id='backHeader'>
        <nav class="navbar">
            <h1><a class="retourIndex" href="index.php">Administration</a></h1>
            <ul>
                <li><a href="#utilisateur" class='navbarItem'>Utilisateur</a></li>
                <li><a href="#contact" class='navbarItem'>Contact</a></li>
                <li><a href="back2.php" class='navbarItem'>Blog</a></li>
                <li><a href="deco.php" class='navbarItem'>Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <?php 
        require_once 'php/database.php';

        if (isset($_POST['envoyer'])){
            if (!empty($_POST['username']) and !empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['role'])){
                $username = htmlspecialchars($_POST['username']);
                $email = htmlspecialchars($_POST['email']);
                $password = password_hash(addslashes($_POST['password']), PASSWORD_DEFAULT);
                $role = htmlspecialchars($_POST['role']);

                $verifUsername = $pdo -> prepare("SELECT * FROM utilisateur WHERE username = '$username'");
                $verifUsername -> execute();
                if ($verifUsername){
                    $verifUsername = $verifUsername -> fetch();
                }

                $verifMail = $pdo -> prepare("SELECT * FROM utilisateur WHERE email = '$email'");
                $verifMail -> execute();
                if ($verifMail){
                    $verifMail = $verifMail -> fetch();
                }

                if ($username == ''){
                    $errorUsername = "La case est vide !";
                }
                elseif(!is_bool($username) && $username == $verifUsername['username']){
                    $errorUsername = "Le pseudo n'est pas disponible !";
                }
                elseif ($email == '') {
                    $erreurEmail = "Veuillez renseigner un email !";
                } 
                elseif (!is_bool($verifMail) && $email == $verifMail['email']) {
                    $erreurEmail = "Cette adresse mail existe déjà !";
                }
                elseif ($_POST['password'] == '') {
                    $erreurMDP = "Veuillez renseigner un mot de passe !";
                } 
                else {
                    $insert = $pdo->prepare('INSERT INTO utilisateur(username, email, password, role) VALUES(?,?,?,?)');
                    $insert->execute(array($username, $email, $password, $role));
                    header('Location: back.php');
                }

            } 
        }

        if (isset($_POST['modify'])){
            if (!empty($_POST['username']) and !empty($_POST['email']) and !empty($_POST['role'])){
                $username_modify = htmlspecialchars($_POST['username']);
                $email_modify = htmlspecialchars($_POST['email']);
                $role_modify = htmlspecialchars($_POST['role']);
                $id_modify = $_POST['id'];
            }
        }
        if (isset($_POST['modifier'])){
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $role = htmlspecialchars($_POST['role']);
            $id = $_POST['id'];
            $send = $pdo -> prepare("UPDATE utilisateur SET username = '$username', email = '$email', role = '$role' WHERE id = $id");
            $send -> execute();
        }
        

    ?>

    <div id="utilisateur">
        <p class="titreAllUser">Ajouter un utilisateur</p>
        <form method="POST" class="formCreateUser">
            <div class="formCreatePos">
                <input type="text" name="username" placeholder="Pseudo" class="formCreateInput" value="<?php 
                    if (isset($username_modify)){
                        echo $username_modify;
                    }
                ?>">
                <?php if (isset($errorUsername)) : ?>
                <p><?php echo $errorUsername; ?></p>
                <?php endif; ?>
            </div>
            <div class="formCreatePos">
                <input type="text" name="email" placeholder="Email" class="formCreateInput" value="<?php 
                    if (isset($email_modify)){
                        echo $email_modify;
                    }
                ?>">
                <?php if (isset($erreurEmail)) : ?>
                <p><?php echo $erreurEmail; ?></p>
                <?php endif; ?>
            </div>
            <div class="formCreatePos">
                <input type="password" name="password" placeholder="Mot de passe" class="formCreateInput">
                <?php if (isset($erreurMDP)) : ?>
                <p><?php echo $erreurMDP; ?></p>
                <?php endif; ?>
            </div>
            <div class="formSelect">
                <select name="role" id="formCreateSelect">
                    <option value="admin" <?php 
                        if (isset($role_modify)){
                            if ($role_modify == 'admin'){
                                echo 'selected';
                            }
                        }
                        ?>>Admin</option>
                    <option value="editor" <?php 
                        if (isset($role_modify)){
                            if ($role_modify == 'editor'){
                                echo 'selected';
                            }
                        }
                        ?>>Editeur</option>
                    <option value="user" <?php 
                        if (isset($role_modify)){
                            if ($role_modify == 'user'){
                                echo 'selected';
                            }
                        }
                        ?>>Utilisateur</option>
                </select>
            </div>
            <?php 
                if(isset($_POST['modify'])){ ?>
                    <input type="hidden" name ="id" value="<?= $id_modify ?>">
                <?php }
            ?>
                
            <div class="submitFormCreate">
                <input type="submit" class="button" name="<?php 
                if (isset($_POST['modify'])){
                    echo 'modifier';
                    }
                else{
                    echo 'envoyer';
                } ?>" value="<?php
                if (isset($_POST['modify'])){
                    echo 'Modifier';
                }
                else{
                    echo 'Créer';
                }?>">
            </div>
        </form>
        <p class="titreAllUser">Gestion des utilisateur</p>
        <div class="allUser">
            <?php 
        
        $req = $pdo->query('SELECT * FROM `utilisateur` ORDER BY `utilisateur`.`date` ASC');
        $allUser = $req->fetchAll();
        foreach ($allUser as $user){?>
            <form method="POST">
                <div class="user">

                    <p>Nom d'utilisateur :</p>
                    <p><?= $user['username']?></p>
                    <input type="hidden" name="username" value="<?=$user['username']?>">
                    <p>Adresse mail :</p>
                    <p><?= $user['email']?></p>
                    <input type="hidden" name="email" value="<?=$user['email']?>">
                    <p>Rôle :</p>
                    <p><?= $user['role']?></p>
                    <input type="hidden" name="role" value="<?=$user['role']?>">
                    <input type="hidden" name="id" value="<?=$user['id']?>">
                    <a href="php/delete_user.php?id=<?=$user["id"]?>" class="removeUser">Supprimer</a>
                    <input class="modifyUser" type="submit" name="modify" value="Modifier">

                </div>
            </form>
            <?php } ?>
        </div>
    </div>

    <div id="contact">
        <p class="titreContact">Contact</p>
        <div class="allContact">
            <?php 
                $req = $pdo->query('SELECT * FROM `contact` ORDER BY `contact`.`date` DESC');
                $allContact = $req->fetchAll();
                foreach ($allContact as $com){ ?>
                <div class="MessageContact">  
                    <p>Message de : <?= $com['prenom']. ' '. $com['nom'] ?></p>
                    <p>E-mail : <?= $com['email']?></p>
                    <p><?= $com['message']?></p>
                    <a href="php/delete_contact.php?id=<?=$com['id']?>" class="deleteContact">X</a>
                </div>
                <?php }
            ?> 
        </div>
    </div>

    <script src="js/script_back.js"></script>

</body>


