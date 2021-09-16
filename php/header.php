<?php 
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
?>

<div id="nav-icon">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>
<div id="fondBlanc" class="invisible">
    <div id="burgerList">
        <ul id="burgerShortcut">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="histoire.php">Histoire</a></li>
            <li><a href="galerie.php">Galerie</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li>
                <p id="darkthemeButton">Mode lumineux</p>
            </li>
            <li>
            <?php
                if(!isset($_SESSION['role'])){
                    echo ('<a href="login.php"><p id="login">Connexion</p></a>');
                }
                elseif($_SESSION['role'] == 'admin'){
                    echo ('<a href="back.php"><p id="login">Gestion</p></a>');
                }
                elseif($_SESSION['role'] == 'editor'){
                    echo ('<a href="back2.php"><p id="login">Gestion</p></a>');
                }
                elseif($_SESSION['role'] == 'user'){
                    echo ('<a href="deco.php"><p id="deco">Déconnexion</p></a>');
                } 
            ?>
            
            </li>
        </ul>
    </div>
</div>
<a href="index.html"><img id="mando" src="image/mandalorian_logo.png" alt="mandalorian"></a>
