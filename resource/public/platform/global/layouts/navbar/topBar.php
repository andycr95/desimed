
<nav class="navbar navbar-expand-xl navbar-dark fixed-top hk-navbar hk-navbar-alt" id="top_bar">
    <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse"
        data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span
            class="feather-icon"><i data-feather="menu"></i></span></a>
    <a class="navbar-brand" href="<?php echo "//".INDEX_PLATFORM_PATH;?>">
        <li class="fa fa-hospital-alt"></li>&nbsp;DSIMED SAS
    </a>
    <div class="collapse navbar-collapse" id="navbarCollapseAlt">
        <ul class="navbar-nav">
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fa fa-laptop "></i> Inventario
                </a>
                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                    <a class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'modules/medicamentos/index.php';?>"><i
                            class="fa fa-pills "></i> Medicamentos</a>
                    <a class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'modules/categorias/index.php';?>"><i
                            class="fa fa-tags "></i> Categorias</a>
                    <a class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'modules/movimientos/index.php';?>"><i
                            class="fa fa-clipboard-list "></i> Movimientos</a>
                    <a class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'modules/laboratorios/index.php';?>"><i
                            class="fa fa-warehouse"></i> Laboratorios</a>

                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fa fa-users "></i> Terceros
                </a>
                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <a class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'modules/proveedores/index.php';?>"><i
                            class="fa fa-truck "></i>&nbsp; Proveedores</a>
                    <a class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'modules/clientes/index.php';?>"><i 
                            class="fa fa-walking "></i>&nbsp; Clientes</a>
                    <a class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'modules/empleados/index.php';?>"><i
                            class="fa fa-id-card "></i>&nbsp; Empleados</a>

                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fa fa-chart-bar"></i> Contabilidad
                </a>
                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                <a class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'modules/facturacion/index.php';?>"><i
                            class="fa fa-file-invoice "></i>&nbsp; Facturacion</a>
                    <a class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'modules/informes/index.php';?>"><i class="fa fa-calendar-alt"></i>&nbsp;Informes</a>
                    <a class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'modules/banco/index.php';?>"><i class="fa fa-university "></i>&nbsp;Banco</a>

                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fa fa-user-tag"></i> Comercial
                </a>
                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <a class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'modules/afiliados/index.php';?>">
                    <i class="fa fa-id-card"></i>&nbsp; Afiliados
                    </a>
                    

                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fa fa-first-aid"></i> Consultorio
                </a>
                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <a class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'modules/citas/index.php';?>"><i class="fa fa-file-medical"></i>&nbsp; Citas</a>
                    <a class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'modules/citas/historias_clinicas.php';?>"><i class="fa fa-notes-medical"></i>&nbsp; Historias clinicas</a>

                </div>
            </li>

            <li class="nav-item">
                <a target="_self" class="nav-link" href="<?php echo "//".PLATFORM_SERVER.'modules/tpv/index.php';?>"
                    target="_blank"><i class="fa fa-calculator "></i> TPV</a>
            </li>

            <li class="nav-item">
                <a target="_self" class="nav-link" href="<?php echo "//".PLATFORM_SERVER.'global/components/configuracion.php';?>"
                    target="_blank"><i class="fa fa-cogs "></i> Configuracion</a>
            </li>

        </ul>
        <!-- <form class="navbar-search-alt">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="feather-icon"><i data-feather="search"></i></span></span>
                        </div>
                        <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                    </div>
                </form> -->
    </div>
    <ul class="navbar-nav hk-navbar-content">


        <li class="nav-item dropdown dropdown-authentication">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <div class="media">
                    <div class="media-img-wrap">

                        <span class="badge badge-success badge-indicator"></span>
                    </div>
                    <div class="media-body">
                        <span>
                            <?php echo " ".$_SESSION['nombre']; ?><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                <a target="_self" class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'/global/components/perfil.php'; ?>"><i
                        class="dropdown-icon zmdi zmdi-account"></i><span>Perfil</span></a>
                <a target="_self" class="dropdown-item" href="<?php echo "//".PLATFORM_SERVER.'/global/components/configuracion.php'; ?>"><i
                        class="dropdown-icon zmdi zmdi-settings"></i><span>Configuracion plataforma</span></a>
                <div class="dropdown-divider"></div>

                <a target="_self" class="dropdown-item" href=""><i class="dropdown-icon zmdi zmdi-power"></i><span>Cerrar
                        sesion</span></a>
            </div>
        </li>
    </ul>
</nav>






