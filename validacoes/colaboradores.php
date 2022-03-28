<?php

    session_start();

    require '../conexao.php';
    require '../classes/Colaborador.php';

    $colaborador = new Colaborador;
    $cadastrou = $_SESSION['idUsuario'];

    $dados = json_decode($_POST['dados']);

    $nome       = $dados->nome;
    $email      = $dados->email;
    $telefone   = $dados->telefone;
    $cargo      = $dados->cargo;
    $sexo       = $dados->sexo;
    $salario    = $dados->salario;
    $nascimento = $dados->nascimento;

    if ($colaborador->cadastrar($nome, $email, $telefone, $sexo, $nascimento, $cargo, $cadastrou, $salario)){
        echo 1;
    } else {
        echo 0;
    }

?>