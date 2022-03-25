<?php

    session_start();
    
    require 'conexao.php';
    require 'classes/Colaborador.php';

    $colaborador = new Colaborador;

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $nascimento = $_POST['nascimento'];
    $cargo = $_POST['cargo'];
    $cadastrou = $_SESSION['idUsuario'];
    $colaborador->cadastrar($nome, $email, $telefone, $sexo, $nascimento, $cargo, $cadastrou);

    header("Location: colaboradores.php");

?>