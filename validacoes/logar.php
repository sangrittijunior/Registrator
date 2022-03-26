<?php

    require '../conexao.php';
    require '../classes/Usuario.php';

    $usuario = new Usuario;

    $email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';

    if(empty($email) || empty($senha)){
        $retorno = array('codigo' => 2);
        echo json_encode($retorno);
        exit();
    }

    if ($usuario->login($email, $senha)) {
        $retorno = array('codigo' => 1);
        echo json_encode($retorno);
        exit();
    } else {
        $retorno = array('codigo' => 0);
        echo json_encode($retorno);
        exit();
    }

?>