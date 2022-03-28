<?php require('validacoes/valida-sessao.php'); ?>
<?php require('layout/header.php'); ?>

<!-- CONTEUDO DA PAGINA -->

<div class="container principal">
    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalColaborador">
        Cadastrar colaborador
    </button>
    
    <table class="table table-hover" id="tabelaColaboradores">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Sexo</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Cargo</th>
                <th scope="col">Salario</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody id="tbody">
        </tbody>
    </table>    

    <div class="modal fade" id="modalColaborador" tabindex="-1" aria-labelledby="modalColaboradorLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalColaboradorLabel">Adicionar colaborador</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="text" class="form-control" id="nome" placeholder="Nome colaborador">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                        <input type="tel" class="form-control" id="telefone" placeholder="Telefone Ex: (54)99160-6094">
                        <select id="sexo" class="form-control">
                            <option value="" select>Escolha um gênero</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                        <input type="date" class="form-control" id="nascimento" placeholder="Data de Nascimento">
                        <input type="text" class="form-control" id="cargo" placeholder="Cargo">
                        <input type="number" class="form-control" id="salario" placeholder="Salario">
                    </form>
                </div>
                <div class="modal-footer">
                    <button onclick="colaborador.cancelar()" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button onclick="colaborador.salvar()" class="btn btn-primary">Adicionar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="toast align-items-center text-white bg-danger border-0" id="erro" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
            
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<?php require('layout/footer.php'); ?>
<script>
    $('.nav_link').removeClass('active');
    $('.colaborador').addClass('active');
</script>
<script src="assets/js/colaboradores.js"></script>

