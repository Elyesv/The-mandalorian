<?php
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }

    $pdo = new PDO('mysql:host=localhost;dbname=mandalorian', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>