<?php

    session_start();

    require '../conexao.php';
    require '../classes/Colaborador.php';

    $colaborador = new Colaborador;
    $user = $_SESSION['idUsuario'];

    $listagem = $colaborador->listar($user);
    $listagem = json_encode($listagem);

    echo $listagem;
    
?>