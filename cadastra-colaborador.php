<?php require('validacoes/valida-sessao.php'); ?>
<?php require('layout/header.php'); ?>

<!-- CONTEUDO DA PAGINA -->

<div class="container principal">
    <div class="card card-colaborador">
        <div class="card-body">
            <h5 class="card-title">Cadastro colaborador</h5>
            <form action="cadastrar-colaborador.php" method="POST">
                <div class="imputCadastro">
                    <input type="text" class="form-control" name="nome" placeholder="Nome completo" required>
                    <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                    <input type="text" class="form-control"  name="telefone" placeholder="Telefone" required>
                    <select class="form-select" name="sexo">
                        <option selected>Sexo</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outro">Outro</option>
                    </select>
                    <input type="text" class="form-control"  name="cargo" placeholder="Cargo" required>
                    <input type="date" class="form-control" name="nascimento" placeholder="Data de nascimento" required>
                </div>
          
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require('layout/footer.php'); ?>