<?php require('validacoes/valida-sessao.php'); ?>
<?php require('layout/header.php'); ?>

<!-- CONTEUDO DA PAGINA -->

<div class="container principal">
    
    <button type="button" class="btn btn-primary" onclick="colaborador.adicionarColaborador();">
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

    <div class="modal fade" id="modalColaborador" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalColaboradorLabel">Adicionar colaborador</h5>
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
                    <button onclick="colaborador.salvar()" id="botaoAdicionar" class="btn btn-primary">Adicionar</button>
                    <button onclick="colaborador.salvarEdicao()" id="botaoEditar" class="btn btn-primary">Editar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalPonto" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPontoLabel">Bater ponto</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <select id="pontoColaboradores" class="form-control">
                            <option value="" select>Escolha um colaborador</option>
                        </select>

                        <h3>Manhã</h3>
                        <input type="time" class="form-control" id="salario" placeholder="Entrada">
                        <input type="time" class="form-control" id="salario" placeholder="Saida">

                        <h3>Tarde</h3>
                        <input type="time" class="form-control" id="salario" placeholder="Entrada">
                        <input type="time" class="form-control" id="salario" placeholder="Saida">

                    </form>
                </div>
                <div class="modal-footer">
                    
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
<script src="assets/js/ponto.js"></script>