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

<body class="">
    <!-- Header avec le menu burger pour naviguer sur le site-->
    <header id="bg_Contact">
        <!-- de ici  -->
        <?php
            include 'php/header.php' ;
            require_once 'php/database.php';
        ?>
        <!-- a ici pour l'opti php -->
        <div class="fleche bounce">
            <a href="#titreContact"><img id="flecheBas" src="image/chevron-arrow-down.png" alt="fleche"></a>
        </div>
    </header>


    <div id="return-to-top"><i class="fas fa-chevron-up bounceInverse"></i></div>
    <!--Boutton pour revenir en haut de la page-->

    <!--Début du formulaire de contact-->
    <div id="titreContact">
        <p class="titre">CONTACTEZ-LE</p>
        <p class="sousTitre">Vous avez un contrat ou une cible à éliminée. Mando est votre homme !</p>
    </div>
    <?php 
        if(isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['message'])){
            if(!empty($_POST['firstName']) and !empty($_POST['lastName']) and !empty( $_POST['email']) and !empty( $_POST['message'])){
                $firstname = htmlspecialchars($_POST['firstName']);
                $lastname = htmlspecialchars($_POST['lastName']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);
                $insert = $pdo->prepare('INSERT INTO contact(prenom, nom, email, message) VALUES(?,?,?,?)');
                $insert->execute(array($firstname, $lastname, $email, $message));
            }
        }
    ?>
    <form action= " " method="POST" class="formulaire">
        <div class="name">
            <div class="firstNamePos">
                <label for="firstName">Votre prénom</label>
                <input type="text" name="firstName" id="firstName" placeholder="Prénom" required>
                <ul>
                    <li class="verifFirstName">La case ne doit pas être vide</li>
                    <li class="verifFirstName">Votre prénom ne doit pas contenir de chiffre ou de caractères spéciaux
                    </li>
                </ul>
            </div>
            <div class="LastNamePos">
                <label for="lastName">Votre nom</label>
                <input type="text" name="lastName" id="lastName" placeholder="Nom" required>
                <ul>
                    <li class="verifLastName">La case ne doit pas être vide</li>
                    <li class="verifLastName">Votre nom ne doit pas contenir de chiffre ou de caractères spéciaux</li>
                </ul>
            </div>
        </div>
        <div class="mail">
            <label for="mail">Votre mail</label>
            <input type="text" name="email" id="email" placeholder="Eg. exemple@gmail.com" required>
            <ul>
                <li class="verifMail">La case ne doit pas être vide</li>
                <li class="verifMail">Votre adresse mail doit être valide (Contenir un '@' et un '.')</li>
            </ul>
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
    </form>

    <?php
        include 'php/footer.php' ;
    ?>

    <script src="js/script_contact.js"></script>

</body>

</html>