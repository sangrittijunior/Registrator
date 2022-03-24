<?php

    require 'conexao.php';
    require 'classes/Usuario.php';

    $usuario = new Usuario;

    $login = $_POST['email'];
    $senha = $_POST['senha'];

    if ($usuario->login($login, $senha)) {
        header("Location: index.php");
    }else {
        header("Location: login.php");
    }

?>