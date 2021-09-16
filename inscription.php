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
        href="https://fonts.googleapis.com/c    ss2?family=Dancing+Script:wght@400;500;600;700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/2a053f15fd.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
    <header class="bgLogin">
        <?php 
            include 'php/header.php';
            require_once 'php/database.php';

            if (isset($_POST['username'], $_POST['email'], $_POST['password'])){
                $username = htmlspecialchars($_POST['username']);
                $email = htmlspecialchars($_POST['email']);
                $password = password_hash(addslashes($_POST['password']), PASSWORD_DEFAULT);

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
                elseif ($_POST['passwordVerif'] == '') {
                    $erreurVerifMDP = "Veuillez confirmer votre mot de passe !";
                } 
                elseif ($_POST['password'] != $_POST['passwordVerif']) {
                    $erreurVerifMDP = "Les mots de passe ne correspondent pas !";
                }
                else {
                    $insert = $pdo->prepare('INSERT INTO utilisateur(username, email, password) VALUES(?,?,?)');
                    $insert->execute(array($username, $email, $password));
                    $_SESSION['role'] = 'user';
                    $_SESSION['name'] = $username;
                    // header('Location: index.php');
                }
            } 
        ?>
        <form method="POST" class="formulaireLogin inscription">
            <div class="Pos">
                <label for="username">Pseudo</label>
                <input type="text" name="username" placeholder="Pseudo">
                <?php if (isset($errorUsername)) : ?>
                    <p><?php echo $errorUsername; ?></p>
                <?php endif; ?>
            </div>
            <div class="Pos">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email">
                <?php if (isset($erreurEmail)) : ?>
                    <p><?php echo $erreurEmail; ?></p>
                <?php endif; ?>
            </div>
            <div class="Pos">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" placeholder="Mot de passe">
                <?php if (isset($erreurMDP)) : ?>
                    <p><?php echo $erreurMDP; ?></p>
                <?php endif; ?>
            </div>
            <div class="Pos">
                <label for="passwordVerif">Vérification mot de passe</label>
                <input type="password" name="passwordVerif" placeholder="Vérification du mot de passe">
                <?php if (isset($erreurVerifMDP)) : ?>
                    <p><?php echo $erreurVerifMDP; ?></p>
                <?php endif; ?>
            </div>
            <div class="Pos buttonLog">
                <input class='button' type="submit" value="S'inscrire">
            </div>
        </form>

        
        <div class="register">
            <a href="login.php">Déjà inscrit ? Connectez-vous ici !</a>
        </div>
    </header>
    <script src="js/script_inscription.js"></script>

</body>