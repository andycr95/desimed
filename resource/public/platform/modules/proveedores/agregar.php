<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
include_once(PROVIDER_PATH."sesionController.php");
  /* Ruta del archivo de sesion*/
  require_once(CONFIGURATION_PATH."session.php");
  require_once(PROVIDER_PATH."clienteController.php");
  session::verificarSesion($_SESSION['idsesion']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- head -->
    <?php  include_once("../../global/layouts/head.php");  ?>
    <!-- /head -->
</head>
<body>
<input type="hidden" value="<?php echo $_SESSION['idsesion'];  ?>" name="idsesion" />
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-horizontal-nav">
        <!-- Top Navbar -->
        <?php  include_once("../../global/layouts/navbar/topBar.php");  ?>
        <!-- /Top Navbar -->
        <!-- Vertical Nav -->
        <?php  //include_once("../../global/layouts/navbar/verticalNav.php");  ?>
        <!-- /Vertical Nav -->
        <!-- Setting Panel -->
        <?php  //include_once("../../global/layouts/settings-panel/panel.php");  ?>
        <!-- /Setting Panel -->
        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="<?php echo "//".PLATFORM_SERVER."modules/proveedores/index.php"; ?>">proveedor</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Agregar proveedor</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row  ">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">!Formulario de registro de proveedores : </h5>
                            <div class="row">
                                <div class="col-xl-12 mb-20">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label for="razon_social">Razon social</label>
                                                    <input class="form-control" id="razon_social" name="razon_social"
                                                        placeholder="" value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Etiqueta de contacto</label>
                                                    <input class="form-control" id="etiqueta_contacto" name="etiqueta_contacto"
                                                       value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Nombre de contacto </label>
                                                    <input class="form-control" id="nombre_contacto" name="nombre_contacto"
                                                        placeholder="" value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Telefono</label>
                                                    <input class="form-control" id="telefono_contacto" name="telefono_contacto"
                                                        placeholder="" value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Direccion</label>
                                                    <input class="form-control" id="direccion_contacto" name="direccion_contacto"
                                                        placeholder="" value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Ciudad</label>
                                                    <input class="form-control" id="ciudad_contacto" name="ciudad_contacto"
                                                        placeholder="" value="" type="text">
                                                </div>
                                                
                                               
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <div class="col-md-4 form-group">
                                                    <button type="button"
                                                        class="btn btn-gradient-primary" id="registrar_proveedor">Registrar proveedor</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                            <!-------------------------------------------------------->

                            
                        </div>
                        <div id="resultado"></div>
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
<<<<<<< HEAD:resource/public/platform/modules/clientes/agregar.php
    <script src="<?php echo "//".JS_SERVER.'cliente/form-wizard-data.js'; ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'directory.js';  ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'app.js';  ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'cliente/module.js';  ?>"></script>
=======
    <script src="<?php echo "//".JS_SERVER.'directory.js';  ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'app.js';  ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'proveedor/module.js';  ?>"></script>
>>>>>>> 2244d9a10fce4c8cc55a3bbf377ee32ae9bca2cb:resource/public/platform/modules/proveedores/agregar.php
    <script src="<?php echo "//".DIST_PANGONG_SERVER.'js/daterangepicker-data.js';  ?>"></script>
    <!-- /App Libs -->
</body>
</html>