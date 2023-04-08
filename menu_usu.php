        
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="http://localhost/QUICKENGV3/usuario/css/styles.css" rel="stylesheet">
        <link rel="shortcut icon" href="/assets/IMG/icon.png">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            body{
                /*background: rgb(88,99,136);
                background: linear-gradient(30deg, rgba(88,99,136,1) 0%, rgba(105,232,241,1) 50%, rgba(39,43,168,1) 100%);*/
            }
        </style>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../usuario/">Quickeng</a>
            <img id="logo_qe" src="assets/img/icon.png" alt="">
        
        
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-3 me-0 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-4">

        </form>
        <!-- Navbar-->
               <ul class="navbar-nav ms-auto ms-md-3 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>
                    <span class="all-tittles"><?php if(isset($_SESSION['usuario'])){echo $_SESSION['usuario']["nombre_usu"];} ?></span>
                </a  style="color:#fff; cursor:default;">
                
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../usuario/configuracion.php">Configuración</a></li>
                <li><a class="dropdown-item" href="../usuario/perfil.php">Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li class="menu__item menu__item--show">
        <button type="button" class="menu__link btn btn-link" onclick="location.href='../php/Logout.php'">Cerrar sesión</button>
                </li>
            </ul>
        </li>
    </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <br>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            mis cursos
                        </a>
                       
                        
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            actividades
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Cursos
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="../usuario/basico1.php">Basico I</a>
                                        <a class="nav-link" href="../usuario/Basico2.php">Basico II</a>
                                        <a class="nav-link" href="../usuario/Basico3.php">Basico III</a>
                                    </nav>
                                </div>
                                
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Todas las actividades
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="../usuario/examenes.php">Examenes</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        
                </div>
            
                <div class="sb-sidenav-footer" style="bottom:0px;">
                    <div class="small">Logged in as:</div>
                    Quickeng
                </div>
            </nav>
        </div>