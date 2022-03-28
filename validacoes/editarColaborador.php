<?php 
    require '../conexao.php';
    require '../classes/Colaborador.php';

    $colaborador = new Colaborador;
    
    $dados = json_decode($_POST['dados']);

    $nome       = $dados->nome;
    $email      = $dados->email;
    $telefone   = $dados->telefone;
    $cargo      = $dados->cargo;
    $sexo       = $dados->sexo;
    $salario    = $dados->salario;
    $nascimento = $dados->nascimento;
    $id         = $dados->id;

    if ($colaborador->editarColaborador($nome, $email, $telefone, $cargo, $sexo, $salario, $nascimento, $id)) {
        echo 1;
    } else {
        echo 0;
    }

?>