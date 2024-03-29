<?php session_start();

 /* Ruta del archivo de configuracion principal*/
 require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
 /* Rutas del directorio de controller */
 require_once(PROVIDER_PATH."clienteController.php");
  /* Ruta del archivo de sesion*/
 require_once(CONFIGURATION_PATH."session.php");

 session::verificarSesion($_SESSION['idsesion']);

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <!-- head -->
    <?php  require_once("../../global/layouts/head.php");  ?>
    <!-- head -->
</head>

<body>

    <input type="hidden" value="<?php echo $_SESSION['idsesion'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['nombre'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['foto'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['idciudad'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['rol'];   ?>" />
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <?php  include_once("../../global/layouts/navbar/topBar.php");  ?>
        <!-- /Top Navbar -->


        <!-- Vertical Nav -->
        <?php  include_once("../../global/layouts/navbar/verticalNav.php");  ?>
        <!-- /Vertical Nav -->

        <!-- Setting Panel -->
        <?php  include_once("../../global/layouts/settings-panel/panel.php");  ?>
        <!-- /Setting Panel -->
        <!-- Main Content -->
        <div class="hk-pg-wrapper bg-white" style="min-height: 587px;"  >
            <!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15 ">
                <div class="hk-pg-header align-items-top">
                    <div>
                        <h2 class="hk-pg-title font-weight-600 mb-10">Listado de clientes registrados.</h2>
                        <p>Numero de cliente registrados - <strong><?php echo clienteController::nClientes(4); ?></strong></p>
                    </div>
                    <div class="w-1024p">
                        <div class="form-inline">
                            <div class="form-row align-items-center ">
                                <div class="col-auto">

                                    <div class="custom-control ">

                                        <label class=""> <i class='fa fa-sort-numeric-up fa-2x '></i>
                                            .</label>
                                    </div>

                                </div>

                                <div class="col-auto">

                                    <div class="input-group mb-2">
                                        <select class="form-control custom-select d-block w-100" id="consulta" name="consulta">
                                            <option value="az">Ascendente Az</option>
                                            <option value="za">Descendente zA</option>
                                            <option value="fr">Fecha de registro</option>
                                            <option value="ci">Ciudad Az</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-auto">

                                    <div class="custom-control ">

                                        <label class=""> <i class='fa fa-filter fa-2x '></i> .</label>
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <div class="input-group mb-2">
                                        <select class="form-control custom-select d-block w-150" id="estado" name="estado">

                                            <option value="tc">Todos los clientes</option>
                                            <option value="ca">Clientes activos</option>
                                            <option value="ci">Clientes inactivos</option>
                                            <option value="cm">Clientes con credito en mora</option>
                                            <option value="cp">Clientes con credito pagos a tiempo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-auto">

                                    <div class="custom-control ">

                                        <label class=""> <i class='fa fa-search fa-2x '></i> .</label>
                                    </div>

                                </div>
                                <div class="col-auto">
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control w-70" placeholder="Buscar ..." id="busqueda"
                                                name="busqueda">
                                            <div class="input-group-append">
                                                <button class="btn btn-gradient-info" type="button" id="buscarUsuario">Buscar</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="hk-sec-wrapper">

                    <div class="row">
                    
                        <div class="col-sm">


                            <div class="table-wrap">
                                <div class="row">

                                   

                                    <div class="col-md-12 ">
                                        <div class="form-inline">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <a href="<?php echo  PLATFORM_SERVER." modules/cliente/agregar.php";
                                                        ?>" target="_self" class="btn btn-gradient-info mb-2 btn-sm"><i
                                                            class="fa fa-user-plus "></i> Crear
                                                        nuevo cliente</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tablaDinamica">
                                    <?php clienteController::listaClientes('az','tc',null);?>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>

            </div>
            <!-- /Container -->

            <!-- Footer -->
            <?php  include_once("../../global/layouts/footer.php");  ?>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- App Libs -->
    <?php  include_once("../../global/layouts/appLib.php");  ?>
    <script src="<?php echo JS_SERVER.'directory.js';  ?>"></script>
    <script src="<?php echo JS_SERVER.'app.js';  ?>"></script>
    <script src="<?php echo JS_SERVER.'usuario/module.js';  ?>"></script>
    <!-- /App Libs -->

</body>

</html>