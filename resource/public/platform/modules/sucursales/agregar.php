<?php session_start();

 /* Ruta del archivo de configuracion principal*/
 require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
 /* Rutas del directorio de controller */
 require_once(PROVIDER_PATH."clienteController.php");
 require_once(PROVIDER_PATH."entidadController.php");
 require_once(PROVIDER_PATH."localidadController.php");
  /* Ruta del archivo de sesion*/
 require_once(CONFIGURATION_PATH."session.php");

 session::verificarSesion($_SESSION['idsesion']);

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <!-- head -->
    <?php  require_once("../../global/layouts/head.php");  ?>
    <!-- Include Editor style. -->
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
        <div class="hk-pg-wrapper bg-white" style="min-height: 587px;">
            <!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15 ">
                <div class="hk-pg-header align-items-top">
                    <div>
                        <h2 class="hk-pg-title font-weight-600 mb-10">Registro de nueva sucursal.</h2>
                    </div>
                </div>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Sucursal</h5>
                    <p class="mb-25">Son entidades que representan la sucursal fisica y es donde se le asigna los asesores y operadores que trabajan con la plataforma..</p>
                    <div class="row">
                        <div class="col-sm">

                            <form>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="firstName">Etiqueta - Sucursal</label>
                                        <input class="form-control" id="etiqueta" name="etiqueta" placeholder="" value=""
                                            type="text">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="firstName">Ciudad</label>
                                        <input class="form-control" id="idciudad" name="idciudad" placeholder="" value=""
                                            type="text">
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="firstName">Contacto</label>
                                        <input class="form-control" id="contacto" name="contacto" placeholder="" value=""
                                            type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="firstName">Telefono</label>
                                        <input class="form-control" id="telefono" name="telefono" placeholder="" value=""
                                            type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="firstName">Direccion</label>
                                        <input class="form-control" id="direccion" name="direccion" placeholder="" value=""
                                            type="text">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="firstName">E-mail</label>
                                        <input class="form-control" id="email" name="email" placeholder="" value=""
                                            type="text">
                                    </div>
                                    
                                </div>

                                <hr>
                                <button class="btn btn-primary" id="registrarSucursal" type="button">Registrar nueva sucursal</button>
                            </form>
                        </div>
                    </div>
                </section>
                <div id="smg"></div>
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

    <!-- Include JS file. -->
    <script src="<?php echo JS_SERVER.'directory.js';  ?>"></script>
    <script src="<?php echo JS_SERVER.'app.js';  ?>"></script>
    <script src="<?php echo JS_SERVER.'sucursal/module.js';  ?>"></script>
    <script src="<?php echo JS_SERVER.'credito/module.js';  ?>"></script>
    <!-- /App Libs -->

</body>

</html>