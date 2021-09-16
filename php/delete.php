<?php

    $pdo = new PDO('mysql:host=localhost;dbname=mandalorian', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['id'])) {
        $req = $pdo->query('SELECT * FROM commentaire WHERE id = '.$_GET['id']);
        $commentaire = $req->fetchAll();
        if ($commentaire) {
            $req = $pdo->query('DELETE FROM commentaire WHERE id = '.$_GET['id']);
            header('location:../galerie.php');
        }
        else{
            header('location:../galerie.php');
        }
    }
    else{
        header('location:../galerie.php');
    }

?>