<?php 
    require '../conexao.php';
    require '../classes/Colaborador.php';

    $colaborador = new Colaborador;
    $id = $_POST['dados'];

    $colaborador->deletarColaborador($id);

?>