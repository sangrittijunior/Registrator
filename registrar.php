<?php

    require 'conexao.php';
    require 'classes/Usuario.php';

    $usuario = new Usuario;

    $nome = $_POST['nome'];
    $login = $_POST['email'];
    $senha = $_POST['senha'];
    $empresa = $_POST['empresa'];


    if ($usuario->cadastrar($nome, $login, $senha, $empresa)) {
        header("Location: index.php");
    } else {
        header("Location: register.php");
    }

?>