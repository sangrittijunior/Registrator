<?php 
    require 'conexao.php';
    require 'classes/Colaborador.php';

    $colaborador = new Colaborador;
    $id = $_POST['id'];

    $colaborador->deletarColaborador($id);
    return true;
    header("Location: colaboradores.php");
?>