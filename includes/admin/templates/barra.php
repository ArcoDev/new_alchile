<?php 
    $nombreUsuario = $_SESSION['nombre'];
?>
<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="../../index.php" class="logo" target="_blank">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b style="color: #000">A</b>S</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b style="color: #000">Alchile</b> Studio</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fas fa-bars"></i>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs">Hola: <?php echo $nombreUsuario ?></span>
                            </a>
                            <ul class="dropdown-menu">

                                <!-- Menu Footer -->
                                <li class="user-footer">
                                    <!--<div class="pull-left">
                                        <a href="#" class="btn btn-success btn-flat">Ajustes</a>
                                    </div>-->
                                    <div class="pull-right">
                                        <a href="login.php?cerrar_sesion=true" class="btn btn-success  btn-flat">Cerrar Sesion</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>