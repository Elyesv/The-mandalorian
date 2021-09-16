<?php

    $pdo = new PDO('mysql:host=localhost;dbname=mandalorian', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['id'])) {
        $req = $pdo->query('SELECT * FROM utilisateur WHERE id = '.$_GET['id']);
        $utilisateur = $req->fetchAll();
        if ($utilisateur) {
            $req = $pdo->query('DELETE FROM utilisateur WHERE id = '.$_GET['id']);
            header('location:../back.php');
        }
        else{
            header('location:../back.php');
        }
    }
    else{
        header('location:../back.php');
    }

?>