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
                        <form>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo">
                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Confirme a senha">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </html>