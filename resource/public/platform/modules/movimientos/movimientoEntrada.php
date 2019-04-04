<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  /* Ruta del archivo de sesion*/
  require_once(CONFIGURATION_PATH."session.php");
  require_once(PROVIDER_PATH."productoController.php");
  require_once(PROVIDER_PATH."proveedorController.php");
  require_once(PROVIDER_PATH."empleadoController.php");
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
	<input type="hidden" value="<?php echo empleadoController::objempleadoSesion($_SESSION['idsesion'])->getIdempleado();  ?>" name="idusuario" />
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
                    <li class="breadcrumb-item active"><a
                            href="<?php echo "//".PLATFORM_SERVER."modules/movimientos/index.php"; ?>">Listado de movimientos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Reportar Movimiento "Comprar"</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row  ">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Formulario de registro de movimiento: </h5>
                            <div class="row">
                                <div class="col-xl-12 mb-20">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="">Fecha de factura</label>
                                                <input class="form-control" id="fecha_utilidad"
                                                    name="fecha_utilidad"  
                                                    type="text">
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label for="">Tipo de factura</label>
                                                <select class='form-control custom-select d-block w-100'
                                                    name="tipo_factura" id='tipo_factura'>
                                                    <option value="BORRADOR">BORRADOR</option>
													<option value="PRESUPUESTO">PRESUPUESTO</option>
                                                </select>
                                            </div>
											<div class="col-md-4 form-group">
												<?php proveedorController::selectorListadoProveedores(); ?>
											</div>
											<div class="col-md-2 form-group">
											    <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
											    <button type="button" id="crearFactura" class="btn btn-gradient-primary"><li class="fa fa-clipboard-list"></li> Crear factura</button>
                                            </div>

                                           
                                            <div class="col-md-12 form-group">
                                                <label for='country'>
                                                    <li class="fa fa-exclamation-circle"></li> A tener en cuenta
                                                </label>
                                                <p>la facturas <code>BORRADOR</code> o <code>PRESUPUESTO</code> son facturas que deben de ser validadas o rectificadas dependiendo de su tipo para aplicar al sistema. tenga en cuenta que las facturas borrador pueden ser eliminadas o modificadas luego de ser <code>VALIDADAS</code> no se pueden hacer modificaciones</p>
                                            </div>
											

                                        </div>

                                    </form>
                                </div>
                            </div>
                            <hr>

                        </section>
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

    <script src="<?php echo "//".JS_SERVER.'directory.js';  ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'app.js';  ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'medicamentos/module.js';  ?>"></script>
    <script src="<?php echo "//".DIST_PANGONG_SERVER.'js/daterangepicker-data.js';  ?>"></script>
    <!-- /App Libs -->
</body>

</html>