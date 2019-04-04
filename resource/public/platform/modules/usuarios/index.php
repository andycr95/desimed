<?php session_start();

 /* Ruta del archivo de configuracion principal*/
 require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
 /* Rutas del directorio de controller */
 require_once(PROVIDER_PATH."usuarioController.php");
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
        <div class="hk-pg-wrapper" style="min-height: 587px;">
            <!-- Container -->
            <div class="container-fluid">
                <!-- Title -->

                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="profile-cover-wrap overlay-wrap">
                            <div class="profile-cover-img" style="background-image:url(<?php echo DIST_PANGONG_SERVER.'img/trans-bg.jpg'; ?> )"></div>
                            <div class="bg-overlay bg-trans-dark-60"></div>
                            <div class="container profile-cover-content py-50">
                                <div class="hk-row">
                                    <div class="col-lg-6">
                                        <div class="media align-items-center">
                                            <div class="media-img-wrap  d-flex">
                                                <div class="avatar">
                                                    <img src="<?php echo DIST_PANGONG_SERVER."img/usuario-miembros.png";?>
                                                        " alt=" user" class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="text-white text-capitalize display-6 mb-5 font-weight-400">lista
                                                    general de usuarios activos.</div>
                                                <div class="font-14 text-white">
                                                    <span class="mr-5">
                                                        <span class="font-weight-500 pr-5">
                                                            <?php echo usuarioController::nUsuarios(3); ?></span>
                                                        <span class="mr-5">usuarios registrados.</span>
                                                    </span>
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

                                            <div class="col-md-12 pl-90 pb-30 ">
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
                                                                <select class="form-control custom-select d-block w-100"
                                                                    id="consulta" name="consulta">
                                                                    <option value="az">Ascendente Az</option>
                                                                    <option value="za">Descendente zA</option>
                                                                    <option value="fr">Fecha de registro</option>
                                                                    <option value="su">Sucursal Az</option>
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
                                                                <select class="form-control custom-select d-block w-150"
                                                                    id="estado" name="estado">

                                                                    <option value="tu">Todos los usuarios</option>
                                                                    <option value="co">Usuarios Conectados</option>
                                                                    <option value="ua">Usuarios activos</option>
                                                                    <option value="ud">Usuarios Desactivados</option>
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
                                                                    <input type="text" class="form-control w-70"
                                                                        placeholder="Buscar ..." id="busqueda" name="busqueda">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-gradient-info" type="button"
                                                                            id="buscarUsuario">Buscar</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br><br><br>

                                            <div class="col-md-12 ">
                                                <div class="form-inline">
                                                    <div class="form-row align-items-center">
                                                        <div class="col-auto">
                                                            <a href="<?php echo  PLATFORM_SERVER."modules/usuarios/agregar.php";
                                                                ?>" target="_self" class="btn btn-gradient-info mb-2 btn-sm"><i
                                                                    class="fa fa-user-plus "></i> Crear
                                                                nuevo usuario</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tablaDinamica">
                                            <?php usuarioController::listaUsuarios('az','tu',null);?>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </section>


                        <!-- Modal -->

                        <div class="modal fade" id="modalVentana" tabindex="-1" role="dialog" aria-labelledby="modalVentana"
                            style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Desactivar usuario</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-justify">Si decide desactivar el usuario ,este perdera toda
                                            faculta para usar la plataforma y sus herramientas ,esta seguro de su
                                            accion !</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-gradient-info mb-2" data-dismiss="modal">Cerra</button>
                                        <button type="button" class="btn btn-gradient-info mb-2">Desactivar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modalVentana2" tabindex="-1" role="dialog" aria-labelledby="modalVentana2"
                            style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Eliminar usuario</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-justify">Si decide eliminar el usuario ,este perdera toda
                                            faculta para usar la plataforma y sus herramientas ,ademas todos los
                                            registros ligados al usuario esta seguro de su descision !</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-gradient-info mb-2" data-dismiss="modal">Cerra</button>
                                        <button type="button" class="btn btn-gradient-info mb-2">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- /Row -->
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