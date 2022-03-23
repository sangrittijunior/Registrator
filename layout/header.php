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
            <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">

            <!-- CSS para customização -->
            <link href="assets/css/dashboard.css" rel="stylesheet">
        </head>

        <body id="body-pd">
            <header class="header" id="header">
                <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
                <div class="header_img"> <img src="assets/imagens/user-login.png" alt=""> </div>
            </header>
            <div class="l-navbar" id="nav-bar">
                <nav class="nav">
                    <div> <a href="#" class="nav_logo"> <img class="logo-sidebar" src="assets/imagens/logo.png"> <span class="nav_logo-name">Registrator</span> </a>
                        <div class="nav_list"> 
                            <a href="dashboard.html" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                            <a href="colaboradores.html" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Colaboradores</span> </a> 
                        </div>
                    </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sair</span> </a>
                </nav>
            </div>
            <div class="height-100 bg-light">
                <h4>Main Components</h4>
            </div>
        </body>
    </html>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) =>{
            const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)
            
            // Validate that all variables exist
            if(toggle && nav && bodypd && headerpd){
            toggle.addEventListener('click', ()=>{
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
            })
            }
            }
            
            showNavbar('header-toggle','nav-bar','body-pd','header')
            
            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')
            
            function colorLink(){
            if(linkColor){
            linkColor.forEach(l=> l.classList.remove('active'))
            this.classList.add('active')
            }
            }
            linkColor.forEach(l=> l.addEventListener('click', colorLink))
            
            // Your code to run since DOM is loaded and ready
            });
    </script>