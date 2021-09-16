<?php

    $pdo = new PDO('mysql:host=localhost;dbname=mandalorian', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['id'])) {
        $req = $pdo->query('SELECT * FROM contact WHERE id = '.$_GET['id']);
        $utilisateur = $req->fetchAll();
        if ($utilisateur) {
            $req = $pdo->query('DELETE FROM contact WHERE id = '.$_GET['id']);
            header('location:../back#contact.php');
        }
        else{
            header('location:../back#contact.php');
        }
    }
    else{
        header('location:../back#contact.php');
    }

?>