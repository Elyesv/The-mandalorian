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
    
            if (isset($_POST['username'], $_POST['password'])){
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);
                $verif = $pdo -> prepare("SELECT * FROM utilisateur WHERE username = '$username'");
                $verif -> execute();
                if ($verif != false) {
                    $verif = $verif -> fetch();
                }
                if ($username == '') {
                    $miss_pseudo = "Veuillez renseignez votre pseudo";
                } elseif (is_bool($verif) || $username != $verif['username']) {
                    $miss_pseudo = "Ce pseudo n'existe pas";
                } elseif ($password == '') {
                    $miss_password = "Veuillez renseigner un mot de passe !";
                } elseif (password_verify($password, $verif['password'])) {
                    $_SESSION['role'] = $verif['role'];
                    $_SESSION['id'] = $verif['id'];
                    $_SESSION['name'] = $verif['pseudo'];
                    header('Location: index.php');
                }
            }
            ?>

        <form method="POST" class="formulaireLogin">
            <div class="Pos">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="username" placeholder="Pseudo">
                <?php if (isset($miss_pseudo)) : ?>
                    <p><?php echo $miss_pseudo; ?></p>
                <?php endif; ?> 
            </div>
            <div class="Pos">
                <label for="MDP">Mot de passe</label>
                <input type="password" name="password" placeholder="Mot de passe">
                <?php if (isset($miss_password)) : ?>
                    <p><?php echo $miss_password; ?></p>
                <?php endif; ?> 
            </div>
            <div class="Pos buttonLog">
                <input class='button ' type="submit" value="Se connecter">
            </div>
        </form>

        <div class="register">
            <a href="inscription.php">Nouveau utilisateur ? Inscrivez vous ici</a>
        </div>
    </header>
    
    <script src="js/script_login.js"></script>

</body>