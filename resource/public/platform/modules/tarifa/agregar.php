<?php session_start();

 /* Ruta del archivo de configuracion principal*/
 require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
 /* Rutas del directorio de controller */
 require_once(PROVIDER_PATH."clienteController.php");
 require_once(PROVIDER_PATH."entidadController.php");
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
                        <h2 class="hk-pg-title font-weight-600 mb-10">Registro de nueva pagaduria.</h2>
                    </div>
                </div>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Pagaduria</h5>
                    <p class="mb-25">Puede ingresar el codigo y la etiqueta de la pagaduria que desee registrar , de manera opcional puede redactar un descripcion o nota qe desee sobre esta..</p>
                    <div class="row">
                        <div class="col-sm">

                            <form>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="firstName">Codigo de Pagaduria</label>
                                        <input class="form-control" id="codigo" name="codigo" placeholder="" value=""
                                            type="text">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="lastName">Etiqueta</label>
                                        <input class="form-control" id="nombre" name="nombre" placeholder="" value=""
                                            type="text">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="lastName">Descripcion</label>
                                        <textarea class="form-control mt-15" rows="3" name="textArea" id="textArea"
                                            placeholder="Textarea"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <button class="btn btn-primary" id="registrarPagaduria" type="button">Registrar nueva
                                    pagaduria</button>
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
    <script src="<?php echo JS_SERVER.'pagaduria/module.js';  ?>"></script>
    <!-- /App Libs -->



</body>

</html>