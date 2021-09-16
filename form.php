<?php 

if (!isset($_POST['nom']) and !isset($_POST['prenom']) and !isset($_POST['email']) and !isset($_POST['password']))
    if (empty($_POST['nom']) and empty($_POST['prenom']) and empty($_POST['email']) and empty($_POST['password']))
        echo '<form action="form.php" method="post">'; 
        echo    '<p>Votre nom : <input type="text" name="nom" /></p>';
        echo    '<p>Votre prénom : <input type="text" name="prenom" /></p>';
        echo    '<p>Votre e-mail : <input type="email" name="email" /></p>';
        echo    '<p>Votre mot de passe : <input type="password" name="password" /></p>';
        echo    '<p><input type="submit" value="OK"></p>';
        echo '</form>';


if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['password']))
    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['password']))
        echo "<ul>";
        echo "<li>". $_POST['nom'] ."</li>";
        echo "<li>". $_POST['prenom'] ."</li>";
        echo "<li>". $_POST['email'] ."</li>";
        echo "<li>". $_POST['password'] ."</li>";
        echo "</ul>";
?>