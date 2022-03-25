<?php require('validacoes/valida-sessao.php'); ?>
<?php require('layout/header.php'); ?>

<?php 

require 'conexao.php';
require 'classes/Colaborador.php';

$colaboradores = new Colaborador;
$colaboradores = $colaboradores->listar($_SESSION['idUsuario']);

?>

<!-- CONTEUDO DA PAGINA -->

<div class="container principal">

    <a href="cadastra-colaborador.php"><button type="button" class="btn btn-success">Cadastrar colaborador</button></a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Cargo</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($colaboradores as $colaborador) { ?>
            <tr>
                <td><?php echo $colaborador['nome']; ?></td>
                <td><?php echo $colaborador['email']; ?></td>
                <td><?php echo $colaborador['telefone']; ?></td>
                <td><?php echo $colaborador['cargo']; ?></td>
                <td>
                    <a title="Excluir" onclick="deletaColaborador(<?php echo $colaborador['id']; ?>)"><i class='bx bx-trash'></i></a>
                    <a title="Editar"><i class='bx bx-edit'></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>    
</div>
<script>

    function deletaColaborador(id){
        $.post("deletarColaborador.php", "id=" + id);
    }

</script>
<?php require('layout/footer.php'); ?>