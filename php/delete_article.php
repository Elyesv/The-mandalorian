<?php

    $pdo = new PDO('mysql:host=localhost;dbname=mandalorian', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['id'])) {
        $req = $pdo->query('SELECT * FROM blog WHERE id = '.$_GET['id']);
        $article = $req->fetchAll();
        if ($article) {
            $req = $pdo->query('DELETE FROM blog WHERE id = '.$_GET['id']);
            header('location:../back2.php');
        }
        else{
            header('location:../back2.php');
        }
    }
    else{
        header('location:../back2t.php');
    }

?>