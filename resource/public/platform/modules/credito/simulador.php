<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/conf.php');
include_once(PROVIDER_PATH."creditoController.php");
include_once(PROVIDER_PATH."entidadController.php");
include_once(PROVIDER_PATH."sucursalController.php");
include_once(PROVIDER_PATH."localidadController.php");
include_once(PROVIDER_PATH."clienteController.php");
 /* Ruta del archivo de sesion*/
 require_once(CONFIGURATION_PATH."session.php");
 session::verificarSesion($_SESSION['idsesion']);
$idcliente = $_GET['id'];
$idtarifa = creditoController::tarifa();
$objCliente = clienteController::objDaoCliente($idcliente);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- head -->
    <?php  include_once("../../global/layouts/head.php");  ?>
    <!-- /head -->
</head>
<body>
    <input type="hidden" value="<?php echo $idcliente;  ?>" name="idcliente" />
    <input type="hidden" value="<?php echo $_SESSION['idsesion'];  ?>" name="idsesion" />
    <input type="hidden" value="<?php echo $idtarifa->getPorcentajeLibreInversion();  ?>" name="lb" />
    <input type="hidden" value="<?php echo $idtarifa->getPorcentajeCartera();  ?>" name="cc" />
    <input type="hidden" value="<?php echo $idtarifa->getPorcentajeSaneamiento();  ?>" name="sa" />
    <input type="hidden" value="<?php echo $idtarifa->getIdTarifa();  ?>" name="idtarifa" />
    <input type="hidden" value="" name="tasa" />
    <input type="hidden" value="<?php echo $objCliente->getTotalIngresos();  ?>" name="ingresos" />
    <input type="hidden" value="<?php echo $objCliente->getTotalEgresos();  ?>" name="egresos" />
    <input type="hidden" value="0" name="validar" />
    <input type="hidden" value="0" name="edad" />
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
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item active" aria-current="page">Prestamos</li>
                    <li class="breadcrumb-item active" aria-current="page">Simulador de credito</li>
                </ol>
            </nav>
            
            <!-- /Breadcrumb -->
            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div id="example-basic">
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-user"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Informacion basica </span>
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-xl-3 mb-20">
                                        <p class="mb-10 text-justify">xxxx.</p>
                                        <div class="card mt-30">
                                            <div class="card-body bg-light">
                                                <h5 class="card-title">A tener en cuenta:</h5>
                                                <p class="card-text text-justify">Para algunos campos numericos pueden utilizar el separador punto ej: 90.000 o 20.000.000</p>
                                                
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="col-xl-9 mb-20">
                                        <form id="formCredito"  method="POST" name="formCredito">
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label for='country'>Tipo de credito:</label>
                                                    <select class='form-control custom-select d-block w-100' name="tipoCredito"
                                                        id='tipoCredito'>
                                                        <option selected>Elige un tipo...</option>
                                                        <option value="LIBRE INVERSION">LIBRE INVERSION</option>
                                                        <option value="COMPRA DE CARTERA">COMPRA DE CARTERA</option>
                                                        <option value="SANEAMIENTO">SANEAMIENTO</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="monto">Fecha de nacimiento</label>
                                                    <input class="form-control" type="text" id="edad" name="edad" value="11/1/1950">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                <label for='country'>Genero:</label>
                                                    <select class='form-control custom-select d-block w-100' name="genero"
                                                        id='genero'>
                                                        <option selected>Elige un tipo...</option>
                                                        <option value="h">Hombre</option>
                                                        <option value="m">Mujer</option>
                                                    </select>
                                                
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label for="monto">Monto</label>
                                                    <input class="form-control" id="monto" name="monto"   placeholder="monto . . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="total_ingresos">Aval</label>
                                                    <input class="form-control" id="aval" name="aval"
                                                        placeholder="Total ingresos . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="plazo">Plazo (meses)</label>
                                                    <input class="form-control" id="plazo" name="plazo" placeholder="plazo . . ."
                                                        value="" type="number">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label for="total_ingresos">Total de ingresos</label>
                                                    <input class="form-control" id="total_ingresos" name="total_ingresos"
                                                        placeholder="Total ingresos . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="total_activo_vivienda">Descuentos de ley</label>
                                                    <input class="form-control" id="descuentos_ley" name="descuentos_ley"
                                                        placeholder="descuentos de ley . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="total_activo_vehiculo">Descuentos de nomina</label>
                                                    <input class="form-control" id="descuentos_nomina"
                                                        name="descuentos_nomina" placeholder="descuentos de nomina . . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="cartera">Cartera</label>
                                                    <input class="form-control" id="cartera"
                                                        name="cartera" placeholder="cartera. . ."
                                                        value="" type="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-md-4 form-group">
                                                    <label for="total_activo_vivienda">Seguro</label>
                                                    <input class="form-control" id="seguro" name="seguro"
                                                        placeholder="Seguro . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="total_activo_vehiculo">Administracion</label>
                                                    <input class="form-control" id="administracion"
                                                        name="administracion" placeholder="Administracion . . ."
                                                        value="" type="text">
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </section>
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-file-invoice"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Resultados de la simulacion</span>
                                </span>
                            </h3>
                            <section>
                            <section id="example-basic-p-3" role="tabpanel" aria-labelledby="example-basic-h-3" class="body current" aria-hidden="false" style="">
                                <h3 class="display-4 mb-40">Resultado de la simulacion</h3>
                                <div class="row">
                                    <div class="col-xl-12 mb-20">
                                       
                                       <div id="resultado"><img src="../../../assets/coopbank/img/re.jpg" height="400" width="550"></div>
                                        
                                    </div> 
                                   
                                </div>
                            </section>
                            </section>
                        </div>
                    </form>
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
    <script src="<?php echo JS_SERVER.'simulador/form-wizard-data.js'; ?>"></script>
    <script src="<?php echo DIST_PANGONG_SERVER.'js/daterangepicker-data.js';  ?>"></script>
    <script>
        $(document).on('click', '#tipoCredito', function (e) {
            var tipo = document.getElementsByName("tipoCredito")[0].value;
            console.log("antes " + document.getElementsByName("tasa")[0].value);
            switch (tipo) {
                case 'LIBRE INVERSION':
                    document.getElementsByName("tasa")[0].value = document.getElementsByName("lb")[0].value;
                    console.log("tasa" + document.getElementsByName("tasa")[0].value);
                    break;
                case 'COMPRA DE CARTERA':
                    document.getElementsByName("tasa")[0].value = document.getElementsByName("cc")[0].value;
                    console.log("tasa" + document.getElementsByName("tasa")[0].value);
                    break;
                case 'SANEAMIENTO':
                    document.getElementsByName("tasa")[0].value = document.getElementsByName("sa")[0].value;
                    console.log("tasa" + document.getElementsByName("tasa")[0].value);
                    break;
            }
        });
    </script>
    
    <!-- /App Libs -->
</body>
</html>