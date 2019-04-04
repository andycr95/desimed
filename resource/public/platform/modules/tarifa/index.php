<?php session_start();
 /* Ruta del archivo de configuracion principal*/
 require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
 /* Rutas del directorio de controller */
 require_once(PROVIDER_PATH."creditoController.php");
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
                        <h2 class="hk-pg-title font-weight-600 mb-10">Listado de tarifas registradas.</h2>
                    </div>
                </div>
                <div id="smg"></div>
                <section class="hk-sec-wrapper">
                    <div class="row">
                                   
                        <div class="col-sm">
                        <h5 class='hk-sec-title'>Tarifa actual</h5>
                        <p class='mb-40'>A tener en cuenta con el registro de las tarifas : </p>
                            <div class="table-wrap">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-inline">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <a href="<?php echo  PLATFORM_SERVER."modules/sucursales/agregar.php";
                                                        ?>" target="_self" class="btn btn-gradient-info mb-2 btn-sm"><i
                                                            class="fa fa-user-plus "></i> Crear
                                                        nueva tarifa aplicable</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr>
                                <div id="tablaDinamica">
                                    <?php creditoController::listaTarifas();?>
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
    <script src="<?php echo JS_SERVER.'credito/module.js';  ?>"></script>
    <!-- /App Libs -->
</body>
</html>