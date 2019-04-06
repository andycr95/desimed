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
                    <li class="breadcrumb-item"><a href="<?php echo PLATFORM_SERVER."modules/clientes/index.php"; ?>">Cliente</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Agregar cliente</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row  ">
                    <div class="col-xl-12">
                        <div id="example-basic">
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-user"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Informacion  de contacto</span>
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-xl-12 mb-20">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label for="nombre_apellido_cliente">Nombre completo</label>
                                                    <input class="form-control" id="nombre_apellido_cliente" name="nombre_apellido_cliente"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="documento_cliente">Documento de identificacion</label>
                                                    <input class="form-control" id="documento_cliente" name="documento_cliente"
                                                        placeholder="documento. . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for='country'>Genero:</label>
                                                    <select class='form-control custom-select d-block w-100' name="genero"
                                                        id='genero'>
                                                        <option selected>Elige un tipo...</option>
                                                        <option value="Masculino">Masculino</option>
                                                        <option value="Femenino">Femenino</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Fecha de nacimiento</label>
                                                    <input class="form-control" id="fecha" name="fecha"
                                                       value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Direccion </label>
                                                    <input class="form-control" id="direccion" name="direccion"
                                                        placeholder="direccion. . ." value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Telefono fijo</label>
                                                    <input class="form-control" id="telefono" name="telefono"
                                                        placeholder="# fijo . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Telefono Celular</label>
                                                    <input class="form-control" id="celular" name="celular"
                                                        placeholder="# movil. . ." value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">E-mail</label>
                                                    <input class="form-control" id="mail" name="mail"
                                                        placeholder="E-mail. . ." value="" type="text">
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
    <script src="<?php echo "//".JS_SERVER.'cliente/form-wizard-data.js'; ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'directory.js';  ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'app.js';  ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'cliente/module.js';  ?>"></script>
    <script src="<?php echo "//".DIST_PANGONG_SERVER.'js/daterangepicker-data.js';  ?>"></script>
    <!-- /App Libs -->
</body>
</html>