<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <link rel="icon" type="image/png" sizes="16x16" href="assets/imagens/logo.png">
            <title>Registrator - Controle de Ponto Online !</title>
            
            <!-- IMPORTS JQUERY -->
            <script src="assets/js/jquery.min.js"></script>

            <!-- IMPORTS BOOTSTRAP 5.1 -->
            <script src="assets/js//bootstrap.min.js"></script>
            <link href="assets/css/bootstrap.min.css" rel="stylesheet">

            <!-- CSS para customização -->
            <link href="assets/css/register.css" rel="stylesheet">
        </head>

        <body>
            <div class="main">
                <div class="card card-login">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de usuário</h5>
                        <div class="alinha-image-login">
                            <img class="image-login" src="assets/imagens/user-register.png">
                        </div>
                        <form id="cadastro-form" action="validacoes/registrar.php" method="POST">
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" required>
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                            <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Nome da empresa" required>
                            <input type="password" class="form-control" id="password" name="senha" placeholder="Senha" required>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" name="btn-cadastrar" id="btn-cadastrar" type="button">Cadastrar</button>
                            </div>
                        </form>
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
            
        </body>
    </html>
    <script src="assets/js/registrar.js"></script>