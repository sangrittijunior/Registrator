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
                        <form action="logar.php" method="POST">
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Acessar</button>
                            </div>
                        </form>
                        <div class="cadastrar">
                            <span>Ainda não tem uma conta ? <a href="register.html">Cadastre-se</a></span>
                        </div>  
                    </div>
                </div>
            </div>
        </body>
    </html>