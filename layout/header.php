<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <link rel="icon" type="image/png" sizes="16x16" href="../assets/imagens/logo.png">
            <title>Registrator - Controle de Ponto Online !</title>
            
            <!-- IMPORTS JQUERY -->
            <script src="../assets/js/jquery.min.js"></script>

            <!-- IMPORTS BOOTSTRAP 5.1 -->
            <script src="../assets/js//bootstrap.min.js"></script>
            <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">

            <!-- CSS para customização -->
            <link href="../assets/css/style.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        </head>
 
        <body class="body-pd" id="body-pd">
            <header class="header body-pd" id="header">
                <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
                <div class="header_img"> <img src="../assets/imagens/user-login.png" alt=""> </div>
            </header>
            <div class="l-navbar show" id="nav-bar">
                <nav class="nav">
                    <div> <a href="#" class="nav_logo"> <img class="logo-sidebar" src="../assets/imagens/logo.png"> <span class="nav_logo-name">Registrator</span> </a>
                        <div class="nav_list"> 
                            <a href="../index.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                            <a href="../colaboradores.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Colaboradores</span> </a> 
                        </div>
                    </div> <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sair</span> </a>
                </nav>
            </div>