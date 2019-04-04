<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  /* Ruta del archivo de sesion*/
  require_once(CONFIGURATION_PATH."session.php");
  require_once(PROVIDER_PATH."productoController.php");
  require_once(PROVIDER_PATH."proveedorController.php");
  session::verificarSesion($_SESSION['idsesion']);

  $objmedicamentos = productoController::idproducto($_GET['id']);
  //print_r($objmedicamentos);
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
    <input type="hidden" value="<?php echo $_GET['id'];  ?>" name="idproducto" />
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
                    <li class="breadcrumb-item"><a
                            href="<?php echo "//".PLATFORM_SERVER."modules/medicamentos/index.php"; ?>">Medicamentos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ficha medicamento</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row  ">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Ficha de  registro de medicamento </h5>
                                <div class="col-md-12 form-group">
                                    
                                    <div class="col-md-4 form-group">
                                        <button type="button"
                                            class="btn btn-gradient-primary"  id=""><li class="fa fa-clipboard-list"></li> Historial movimiento de entrada
                                        </button>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-xl-12 mb-20">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="">Etiqueta comercial</label>
                                                <input readonly class="form-control" id="etiqueta_comercial"
                                                    name="etiqueta_comercial" placeholder="Etiqueta. . ." value="<?php echo $objmedicamentos->getEtiqueta(); ?>"
                                                    type="text">
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label for="">Etiqueta comercial</label>
                                                <input readonly class="form-control" id="presentacion" name="presentacion"
                                                    placeholder="Valor. . ." value="<?php echo $objmedicamentos->getEtiqueta(); ?>" type="text">
                                            </div>

                                            <div class="col-md-3 form-group">
                                                <label for="">Presentacion</label>
                                                <input readonly class="form-control" id="presentacion" name="presentacion"
                                                    placeholder="Valor. . ." value="<?php echo $objmedicamentos->getPresentacion(); ?>" type="text">
                                            </div>

                                            <div class="col-md-3 form-group">
                                                <label for="">Laboratorio</label>
                                                <input readonly class="form-control" id="laboratorio" name="laboratorio"
                                                    placeholder="Valor. . ." value="<?php echo $objmedicamentos->getIdlaboratorio(); ?>" type="text">
                                            </div>
                                            <hr>
                                            <div class="col-md-12 form-group">
                                                <label for='country'>Descripcion del producto</label>
                                                <textarea class="form-control mt-15" rows="5" cols="25" id="descripcion"
                                                    name="descripcion"
                                                    placeholder="descripcion del medicamento"><?php echo $objmedicamentos->getDescripcion(); ?></textarea>
                                            </div>
                                            <!-- <div class="col-md-12 form-group">
                                                <label for='country'>
                                                    <li class="fa fa-exclamation-circle"></li> A tener en cuenta
                                                </label>
                                                <p>La diferencia entre el medicamento de tipo venta NORMAL o AFILIADO
                                                    radica en el <code>recalculo</code> del precio final de venta segun
                                                    la regla de <code>descuento</code> impuesta por el administrador ,Si
                                                    es de tipo NORMAL el valor comercial se mantendra constante ,no hay
                                                    un recalculo de precio y la casilla de descuento debe mantenerse en
                                                    cero, pero si el producto es de tipo AFILIADO hay un recalculo en el
                                                    precio , este valor se ve afectado por un recalculo <code>Valor
                                                        comercial - Desc %</code> .</p>
                                                <p>tenga en cuenta la casilla stock actual si desea registrar el
                                                    medicamento con stock sin movimiento inicial o facturacion a
                                                    proveedores, si el stock actual sera procesado desde proveedores o
                                                    movimientos por favor dejarla en cero</p>
                                            </div> -->



                                            <div class="col-md-2 form-group">
                                                <label for="nombre_apellido_empleado">Tipo de Venta</label>
                                                <select class='form-control custom-select d-block w-100'
                                                    name="tipo_venta" id='tipo_venta'>
                                                    <option value="VENTA NORMAL">NORMAL</option>
                                                    <option value="VENTA AFILIADO">AFILIADO</option>
                                                </select>
                                            </div>

                                            <div class="col-md-2 form-group">
                                                <label for="">Valor comercial </label>
                                                <input class="form-control" id="valor" name="valor"
                                                    placeholder="Valor. . ." value="<?php echo $objmedicamentos->getValor(); ?>" type="text">
                                            </div>

                                            <div class="col-md-2 form-group">
                                                <label for="">Stock Minimo </label>
                                                <input class="form-control" id="stock_minimo" name="stock_minimo"
                                                    placeholder="Min. . ." value="<?php echo $objmedicamentos->getStock_minimo(); ?>" type="text">
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label for="">Stock actual! </label>
                                                <input class="form-control" id="stock_Actual" name="stock_Actual"
                                                    placeholder="Actual . . ." value="<?php echo $objmedicamentos->getStock_normal(); ?>" type="text">
                                            </div>

                                            <div class="col-md-2 form-group">
                                                <label for="">Descuento %! </label>
                                                <input class="form-control" id="descuento" name="descuento"
                                                    placeholder="Desc % . . ." value="<?php echo $objmedicamentos->getDescuento(); ?>" type="text">
                                            </div>

                                            <div class="col-md-2 form-group">
                                                <label for="">IVA ! </label>
                                                <input class="form-control" id="iva" name="iva"
                                                    placeholder="Imp % . . ." value="<?php echo $objmedicamentos->getIva(); ?>" type="text">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="nombre_apellido_empleado">Tipo de Venta</label>
                                                <input class="form-control" id="tipo_producto" name="tipo_producto" placeholder=". . ."
                                                    value="<?php echo $objmedicamentos->getTipo_producto(); ?>" type="text">
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label for="">Codigo de barras </label>
                                                <input class="form-control" id="codigo_barras" name="codigo_barras" placeholder=". . ."
                                                    value="<?php echo $objmedicamentos->getCodigo_barras(); ?>" type="text">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for=''>
                                                    <li class="fa fa-exclamation-circle"></li> A tener en cuenta
                                                </label>
                                                <!-- <p>Hay medicamentos que poseen una natureleza comercial de impulso esto
                                                    quiere decir que un laboratorio o proveedor puede generarle una
                                                    <code>ganacia</code> a un vendedor por el impuslo comercial de uno
                                                    de sus productos nuevo o de relanzamiento</p>
                                                <p>El porcentaje establecido se genera en la <code>moneda local</code> y
                                                    solo aplica a aquellos productos con el atributo impulso comercial.
                                                </p> -->
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="">Naturaleza comercial de exposicion</label>
                                                <input class="form-control" id="ganancia" name="ganancia"
                                                    placeholder=". . ." value="<?php echo $objmedicamentos->getNaturaleza(); ?>" type="text">
                                            </div>


                                            <div class="col-md-4 form-group">
                                                <label for="">Porcentaje de ganancia del vendedor </label>
                                                <input class="form-control" id="ganancia" name="ganancia"
                                                    placeholder=". . ." value="<?php echo $objmedicamentos->getPorcentaje_ganancia(); ?>" type="text">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <div class="col-md-4 form-group">
                                                    <button type="button"
                                                        class="btn btn-gradient-primary" id="">Editar Medicamento</button>
                                                </div>
                                            </div>
                                            

                                            <div class="col-md-12 form-group">
                                                <div id="smgMedicamento"></div>
                                            
                                                <!-- <label for=''>
                                                    <li class="fa fa-exclamation-circle"></li> Regla de calculo para
                                                    aplicacion de descuento y ganacia
                                                </label>
                                                <p><code>Caso 1</code> EL medicamento es de venta Normal y posee una
                                                    naturaleza comercial de exposicion ,la Ganacia del vendedor se
                                                    calcula a base de : <code>Ganancia individual del vendedor = Valor
                                                        comercial * Gan % </code> y la farmacia le queda un valor neto
                                                    de : <code>Valor neto = valor comercial - Gan % del vendedor</code>
                                                </p>
                                                <br>
                                                <p><code>Caso 2 A</code> EL medicamento es de venta Afiliado y posee una
                                                    naturaleza comercial de exposicion ,la Ganacia del vendedor se
                                                    calcula a base de : <code>Ganancia individual del vendedor = Valor
                                                        comercial * Gan %</code> ,al ser un producto con descuento el
                                                    recalculo de ganancia de la farmacia se establece en : <code> Valor
                                                        neto = valor comercial - (valor comercial * Desc afil % ) - Gan
                                                        % del vendedor </code></p>
                                                <br>
                                                <p><code>Caso 2 B</code> EL medicamento es de venta Normal y posee una
                                                    naturaleza comercial de exposicion ,la Ganacia del vendedor se
                                                    calcula a base de : <code>Ganancia individual del vendedor = Valor
                                                        comercial * Gan %</code> ,al ser un producto con sin descuento
                                                    el recalculo de ganancia de la farmacia se establece en : <code>
                                                        Valor neto = valor comercial - Gan % del vendedor </code></p> -->
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