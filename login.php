<?php require('validacoes/valida-sessao-login.php'); ?>

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
            <link href="assets/css/login.css" rel="stylesheet">
        </head>

        <body>
            <div class="main">
                <div class="card card-login">
                    <div class="card-body">
                        <h5 class="card-title">Login</h5>
                        <div class="alinha-image-login">
                            <img class="image-login" src="assets/imagens/user-login.png">
                        </div>
                        <form id="login-form" action="validacoes/logar.php" method="POST">
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-primary" name="btn-login" id="btn-login">Acessar</button>
                            </div>
                        </form>
                        <div class="cadastrar">
                            <span>Ainda não tem uma conta ? <a href="register.php">Cadastre-se</a></span>
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
            
        </body>
    </html>
    <script src="assets/js/login.js"></script>