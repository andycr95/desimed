<?php session_start();
 /* Ruta del archivo de configuracion principal*/
 require_once ($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
 /* Rutas del directorio de controller */
 require_once(PROVIDER_PATH."movimientosController.php");
 require_once(PROVIDER_PATH."proveedorController.php");
 require_once(MODEL_PATH."movimientos.php");
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
        <div class="hk-pg-wrapper bg-white" style="min-height: 587px;">
            <!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15 ">
                <div class="hk-pg-header align-items-top" id="areaImprimir">
                    <div>
                        <h2 class="hk-pg-title font-weight-600 mb-10">
                            <li class="fa fa-clipboard-list"></li>&nbsp;&nbsp;Movimientos de facturacion
                        </h2>
                    </div>
                    <div class="w-1024p">
                        <div class="form-inline">
                            <div class="form-row align-items-center ">

                                <div class="col-auto">
                                    <br>
                                    <div class="custom-control ">
                                        <label class=""> <i class='fa fa-truck fa-2x '></i> .</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="input-group mb-2">
                                        <?php proveedorController::selectorListadoProveedores(); ?>
                                    </div>
                                </div>

                                <div class="col-auto">

                                </div>
                                <div class="col-auto">
                                    <br>
                                    <div class="form-group">
                                        <div class="input-group mb-2">

                                            <input type="text" class="form-control w-70" placeholder="Consultar  ..."
                                                id="busqueda" name="busqueda">
                                            <div class="input-group-append">
                                                <button class="btn btn-gradient-info" type="button"
                                                    id="buscarMedicamento">
                                                    <li class="fa fa-search"></li>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for='country'>
                        <li class="fa fa-exclamation-circle"></li> A tener en cuenta con las facturas de movimiento
                    </label>
                    <p><code><i class='fa fa-clipboard-list fa-2x'></i></code>Las factura de tipo <code>borrador</code> puede realizar cambios en la factura ,ya sea agregar o quitar  elementos. este tipo de facturas pueden ser anuladas o rectificadas.
                    estas no generan asientos contables.</p><br>
                    <p><code><i class='fa fa-clipboard-check fa-2x'></i></code>Las  facturas de tipo <code>Validadas</code> son facturas con naturaleza contable ,es decir movimientos como compra a proveedores, venta a clientes estandar o afiliados directos ,  estas han generado un siento contable luego de su aprobacion , estas no pueden ser modificadas bajo ningun criterio. </p>
                </div>
                <section class="hk-sec-wrapper">
                    <div class="row">

                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="row" id="areaImprimir2">

                                    <div class="col-md-12 ">
                                        <div class="form-inline">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <a href="movimientoEntrada.php" target="_self"
                                                        class="btn btn-gradient-info mb-2 btn-sm"><i
                                                            class="fa fa-clipboard-list fa-2x"></i> Factura a proveedor</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" id="imprimirFactura" target="_self"
                                                        class="btn btn-gradient-info mb-2 btn-sm"><i
                                                            class="fa fa-print fa-2x"></i> Imprimir listado
                                                        movimiento</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div id="tablaDinamica">
                                        <?php movimientosController::movimientosFactura(null);?>
                                    </div>
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
    <script src="<?php echo "//".JS_SERVER.'directory.js';  ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'app.js';  ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'medicamentos/module.js';  ?>"></script>
    <script>
        $(document).on('click', '#imprimirFactura', function (e) {
            $('#areaImprimir').hide();
            $('#areaImprimir2').hide();
            $('#top_bar').hide();
            window.print();
            $('#areaImprimir').show();
            $('#areaImprimir2').show();
            $('#top_bar').show();



        });
    </script>

    <!-- /App Libs -->
</body>

</html>