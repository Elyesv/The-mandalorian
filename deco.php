<?php 
    require_once 'php/database.php'; 

    unset($_SESSION['role']);
    session_destroy();

    header('location:index.php')
    
?>