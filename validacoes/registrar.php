<?php

    require '../conexao.php';
    require '../classes/Usuario.php';

    $usuario = new Usuario;

    $nome    = (isset($_POST['nome'])) ? $_POST['nome'] : '';
    $email   = (isset($_POST['email'])) ? $_POST['email'] : '';
    $senha   = (isset($_POST['senha'])) ? $_POST['senha'] : '';
    $empresa = (isset($_POST['empresa'])) ? $_POST['empresa'] : '';

    if (empty($nome) || empty($email) || empty($senha) || empty($empresa)){
        $retorno = array('codigo' => 2);
        echo json_encode($retorno);
        exit();
    }

    if ($usuario->cadastrar($nome, $email, $senha, $empresa)) {
        $retorno = array('codigo' => 1);
        echo json_encode($retorno);
        exit();
    } else {
        $retorno = array('codigo' => 3);
        echo json_encode($retorno);
        exit();
    }

?>