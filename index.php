<?php 

    session_start();
    
    if (!isset($_SESSION['idUsuario'])){
        header("Location: login.php");
    }


?>

<?php require('layout/header.php'); ?>

<?php require('layout/footer.php'); ?>