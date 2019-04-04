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
    <input type="hidden" value="<?php echo $objCliente->getCargoCliente();  ?>" name="comprobar_laboral" />
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
                    <li class="breadcrumb-item"><a href="<?php echo PLATFORM_SERVER."modules/cliente/index.php"; ?>">Clientes</a></li>
                    <li class="breadcrumb-item " aria-current="page"><a href="<?php echo PLATFORM_SERVER." modules/clientes/verFicha.php?id=".$idcliente;
                            ?>">Ficha cliente</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Crear Credito nuevo </li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div id="example-basic">
                        <!-- phase 1 - Simulador-->
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-user"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Simulacion</span>
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-xl-3 mb-20">
                                        <p class="mb-10 text-justify">La simulacion debe realizar previa a la creacion de un credito.</p>
                                        <div class="card mt-30">
                                            <div class="card-body bg-light">
                                                <h5 class="card-title">A tener en cuenta:</h5>
                                                <p class="card-text text-justify">Para algunos campos numericos pueden
                                                    utilizar el separador punto ej: 90.000 o 20.000.000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 mb-20">
                                        <form id="formCredito" method="POST" name="formCredito">
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
                                                    <input class="form-control" type="text"  id="edad" name="edad" value="10/24/1984">
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
                                                    <input class="form-control" id="monto_f" name="monto_f" placeholder="monto . . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="total_ingresos">Aval</label>
                                                    <input class="form-control" id="aval_f" name="aval_f" placeholder="Total ingresos . . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="plazo">Plazo (meses)</label>
                                                    <input class="form-control" id="plazo_f" name="plazo_f" placeholder="plazo . . ."
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
                                                    <label for="total_activo_vehiculo">Desc. de nomina</label>
                                                    <input class="form-control" id="descuentos_nomina" name="descuentos_nomina"
                                                        placeholder="descuentos de nomina . . ." value="" type="text">
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
                                                    <input class="form-control" id="seguro_f" name="seguro_f" placeholder="Seguro . . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="total_activo_vehiculo">Administracion</label>
                                                    <input class="form-control" id="administracion_f" name="administracion_f"
                                                        placeholder="Administracion . . ." value="" type="text">
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </section>
                            <!-- phase 1 -->

                            <!-- phase 2 - resultador simulador-->
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-file-invoice"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Resultados </span>
                                </span>
                            </h3>
                            <section>
                                <section id="example-basic-p-3" role="tabpanel" aria-labelledby="example-basic-h-3"
                                    class="body current" aria-hidden="false" style="">
                                    <h3 class="display-4 mb-40">Resultado de la simulacion</h3>
                                    <div class="row">
                                        <div class="col-xl-12 mb-20">
                                            <div id="resultadoS"><img src="../../../assets/coopbank/img/re.jpg" height="400"
                                                    width="550"></div>
                                        </div>
                                    </div>
                                </section>
                            </section>
                            <!-- phase 2 -->

                            <!-- phase 3 - informacion basica -->
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-user"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Informacion basica </span>
                                </span>
                            </h3>
                            <section>
                                <h3 class="display-4 mb-40">Formulario de registro</h3>
                                <div class="row">
                                    <div class="col-xl-12 mb-20">
                                        <form id="formCredito" enctype='multipart/form-data' method="POST" name="formCredito">
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label for="codigo_doc_credito">Codigo de referencia</label>
                                                    <input class="form-control" id="codigo_doc_credito" name="codigo_doc_credito"
                                                        placeholder="Ref . . ." value="" type="text">
                                                </div>
                                                <!-- <div class="col-md-4 form-group">
                                                    <label for='country'>Tipo de credito:</label>
                                                    <select class='form-control custom-select d-block w-100' name="tipoCredito"
                                                        id='tipoCredito'>
                                                        <option selected>Elige un tipo...</option>
                                                        <option value="LIBRE INVERSION">LIBRE INVERSION</option>
                                                        <option value="COMPRA DE CARTERA">COMPRA DE CARTERA</option>
                                                        <option value="SANEAMIENTO">SANEAMIENTO</option>
                                                    </select>
                                                </div> -->
                                                <div class="col-md-4 form-group">
                                                    <label for="codigo_doc_credito">Tasa ofrecidad</label>
                                                    <input class="form-control" id="tasa_ofrecidad" name="tasa_ofrecidad"
                                                        placeholder="tasa ofrecida . . ." value="" type="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="monto">Monto</label>
                                                    <input class="form-control" id="monto" name="monto" placeholder="monto . . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="plazo">Plazo</label>
                                                    <input class="form-control" id="plazo" name="plazo" placeholder="plazo . . ."
                                                        value="" type="number">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <?php echo sucursalController::selectSucursal(); ?>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <?php echo entidadController::selectEntidad(); ?>
                                                </div>
                                            </div>
                                            <div id="panel_cartera" class="row">
                                                <div class="col-md-2 form-group">
                                                    <label for="monto">entidad </label>
                                                    <input class="form-control" id="entidad1" name="entidad1"
                                                        placeholder="entidad. . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="plazo">Nit </label>
                                                    <input class="form-control" id="nit1" name="nit1" placeholder="nit . . ."
                                                        value="" type="number">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="monto">Tipo cuenta</label>
                                                    <input class="form-control" id="tipo_cuenta1" name="tipo_cuenta1"
                                                        placeholder="tipo cuenta . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="plazo">Cuenta</label>
                                                    <input class="form-control" id="cuenta1" name="cuenta1" placeholder="cuenta . . ."
                                                        value="" type="number">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="monto">Monto</label>
                                                    <input class="form-control" id="monto1" name="monto1" placeholder="monto . . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="plazo">Cuota</label>
                                                    <input class="form-control" id="cuota1" name="cuota1" placeholder="cuota . . ."
                                                        value="" type="number">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="monto">entidad </label>
                                                    <input class="form-control" id="entidad2" name="entidad2"
                                                        placeholder="entidad. . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="plazo">Nit </label>
                                                    <input class="form-control" id="nit2" name="nit2" placeholder="nit . . ."
                                                        value="" type="number">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="monto">Tipo cuenta</label>
                                                    <input class="form-control" id="tipo_cuenta2" name="tipo_cuenta2"
                                                        placeholder="tipo cuenta . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="plazo">Cuenta</label>
                                                    <input class="form-control" id="cuenta2" name="cuenta2" placeholder="cuenta . . ."
                                                        value="" type="number">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="monto">Monto</label>
                                                    <input class="form-control" id="monto2" name="monto2" placeholder="monto . . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="plazo">Cuota</label>
                                                    <input class="form-control" id="cuota2" name="cuota2" placeholder="cuota . . ."
                                                        value="" type="number">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="monto">entidad </label>
                                                    <input class="form-control" id="entidad3" name="entidad3"
                                                        placeholder="entidad. . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="plazo">Nit </label>
                                                    <input class="form-control" id="nit3" name="nit3" placeholder="nit . . ."
                                                        value="" type="number">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="monto">Tipo cuenta</label>
                                                    <input class="form-control" id="tipo_cuenta3" name="tipo_cuenta3"
                                                        placeholder="tipo cuenta . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="plazo">Cuenta</label>
                                                    <input class="form-control" id="cuenta3" name="cuenta3" placeholder="cuenta . . ."
                                                        value="" type="number">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="monto">Monto</label>
                                                    <input class="form-control" id="monto3" name="monto3" placeholder="monto . . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="plazo">Cuota</label>
                                                    <input class="form-control" id="cuota3" name="cuota3" placeholder="cuota . . ."
                                                        value="" type="number">
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </section>
                            <!-- phase 3 -->

                            <!-- phase 4 - credito-->
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-file-invoice"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Documentos del credito</span>
                                </span>
                            </h3>
                            <section>
                                <h3 class="display-4 mb-40">Formulario de registro</h3>
                                <div class="row">
                                    <div class="col-xl-4 mb-20">
                                        <p class="mb-10 text-justify">Texto de descripcion.</p>
                                        <div class="card mt-30">
                                            <div class="card-body bg-light">
                                                <h5 class="card-title">A tener en cuenta:</h5>
                                                <p class="card-text">los 3 documentos son de caracter obligatorio.</p>
                                                <!-- <a href="#" class="btn btn-block btn-primary">Deliver here</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 mb-20">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="usuarioFormUsuario">Subir fotocopia de cedula</label>
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Documento</span>
                                                    </div>
                                                    <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                            class="glyphicon glyphicon-file fileinput-exists"></i>
                                                        <span class="fileinput-filename"></span></div>
                                                    <span class="input-group-append">
                                                        <span class=" btn btn-primary btn-file"><span class="fileinput-new">Seleccionar
                                                                archivo</span><span class="fileinput-exists">Cambiar</span>
                                                            <input type="file" name="documento1" id="documento1" accept="application/pdf">
                                                        </span>
                                                        <a href="#" class="btn btn-secondary fileinput-exists"
                                                            data-dismiss="fileinput">Remover</a>
                                                    </span>
                                                </div>
                                                <small class="form-text text-muted">El formato aceptado para este
                                                    archivo es PDF.</small>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="usuarioFormUsuario">Subir desprendibles</label>
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Documento</span>
                                                    </div>
                                                    <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                            class="glyphicon glyphicon-file fileinput-exists"></i>
                                                        <span class="fileinput-filename"></span></div>
                                                    <span class="input-group-append">
                                                        <span class=" btn btn-primary btn-file"><span class="fileinput-new">Seleccionar
                                                                archivo</span><span class="fileinput-exists">Cambiar</span>
                                                            <input type="file" name="documento2" id="documento2" accept="application/pdf">
                                                        </span>
                                                        <a href="#" class="btn btn-secondary fileinput-exists"
                                                            data-dismiss="fileinput">Remover</a>
                                                    </span>
                                                </div>
                                                <small class="form-text text-muted">El formato aceptado para este
                                                    archivo es PDF.</small>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="usuarioFormUsuario">Subir Autorizacion de consulta de
                                                    DataCredito</label>
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Documento</span>
                                                    </div>
                                                    <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                            class="glyphicon glyphicon-file fileinput-exists"></i>
                                                        <span class="fileinput-filename"></span></div>
                                                    <span class="input-group-append">
                                                        <span class=" btn btn-primary btn-file"><span class="fileinput-new">Seleccionar
                                                                archivo</span><span class="fileinput-exists">Cambiar</span>
                                                            <input type="file" name="documento3" id="documento3" accept="application/pdf">
                                                        </span>
                                                        <a href="#" class="btn btn-secondary fileinput-exists"
                                                            data-dismiss="fileinput">Remover</a>
                                                    </span>
                                                </div>
                                                <small class="form-text text-muted">El formato aceptado para este
                                                    archivo es PDF.</small>
                                            </div>
                                            <div id="laboral" class="form-group col-md-12">
                                                <label for="usuarioFormUsuario">Subir certificado laboral</label>
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Documento</span>
                                                    </div>
                                                    <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                            class="glyphicon glyphicon-file fileinput-exists"></i>
                                                        <span class="fileinput-filename"></span></div>
                                                    <span class="input-group-append">
                                                        <span class=" btn btn-primary btn-file"><span class="fileinput-new">Seleccionar
                                                                archivo</span><span class="fileinput-exists">Cambiar</span>
                                                            <input type="file" name="documento4" id="documento4" accept="application/pdf">
                                                        </span>
                                                        <a href="#" class="btn btn-secondary fileinput-exists"
                                                            data-dismiss="fileinput">Remover</a>
                                                    </span>
                                                </div>
                                                <small class="form-text text-muted">El formato aceptado para este
                                                    archivo es PDF.</small>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="usuarioFormUsuario">Autorizacion de descuento</label>
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Documento</span>
                                                    </div>
                                                    <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                            class="glyphicon glyphicon-file fileinput-exists"></i>
                                                        <span class="fileinput-filename"></span></div>
                                                    <span class="input-group-append">
                                                        <span class=" btn btn-primary btn-file"><span class="fileinput-new">Seleccionar
                                                                archivo</span><span class="fileinput-exists">Cambiar</span>
                                                            <input type="file" name="documento5" id="documento5" accept="application/pdf">
                                                        </span>
                                                        <a href="#" class="btn btn-secondary fileinput-exists"
                                                            data-dismiss="fileinput">Remover</a>
                                                    </span>
                                                </div>
                                                <small class="form-text text-muted">El formato aceptado para este
                                                    archivo es PDF.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- phase 4 -->

                            <!-- phase 5 - informacion cuenta-->
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-money-check"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Informacion de de cuenta</span>
                                </span>
                            </h3>
                            <section>
                                <h3 class="display-4 mb-40">Formulario de registro</h3>
                                <div class="row">
                                    <div class="col-xl-12 mb-20">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for='country'>Modalidad:</label>
                                                <select class='form-control custom-select d-block w-100' name="modalidad"
                                                    id='modalidad'>
                                                    <option selected>Elige un tipo...</option>
                                                    <option value="Consignacion">Consignacion</option>
                                                    <option value="Cheque">Cheque</option>
                                                    <option value="Transaferencia">Transaferencia</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for='country'>Tipo de cuenta:</label>
                                                <select class='form-control custom-select d-block w-100' name="tipo_cuenta"
                                                    id='tipo_cuenta'>
                                                    <option selected>Elige un tipo...</option>
                                                    <option value="Ahorro">Ahorro</option>
                                                    <option value="Corriente">Corriente</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="entidad">Entidad</label>
                                                <input class="form-control" id="entidad" name="entidad" placeholder="entidad . . ."
                                                    value="" type="text">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="n_cuenta">Numero de cuenta</label>
                                                <input class="form-control" id="n_cuenta" name="n_cuenta" placeholder="n_cuenta . . ."
                                                    value="" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="aval_credito">Aval </label>
                                                <input class="form-control" id="aval_credito" name="aval_credito"
                                                    placeholder="aval credito . . ." value="" type="text">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="seguro_credito">Seguro</label>
                                                <input class="form-control" id="seguro_credito" name="seguro_credito"
                                                    placeholder="seguro credito . . ." value="" type="text">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="administracion_credito">Administracion_credito</label>
                                                <input class="form-control" id="administracion_credito" name="administracion_credito"
                                                    placeholder="administracion credito . . ." value="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- phase 5 -->

                            <!-- phase 6 - validacion de informacion-->
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-clipboard-check"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Validar la informacion</span>
                                </span>
                            </h3>
                            <section>
                                <h3 class="display-4 mb-40">Verifica que la informacion es correcta!</h3>
                                <div class="row">
                                    <div class="col-xl-8 mb-20">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table table-sm mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="w-70" scope="row">Capacidad</th>
                                                            <td class="w-40" scope="row"><input type="text" id="capacidadX"
                                                                    name="capacidadX" value="" readonly /></td>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="w-70" scope="row">Monto </th>
                                                            <td class="w-30"><input type="text" id="montoFinal" name="montoFinal" value=""
                                                                    readonly /></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w-70" scope="row">cuota</th>
                                                            <td class="w-30"><input type="text" id="cuotaFinal" name="cuotaFinal" value=""
                                                                    readonly /></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w-70" scope="row">Tasa ofrecida</th>
                                                            <td class="w-30"><input type="text" id="tasa_ofrecidadFinal" name="tasa_ofrecidadFinal" value=""
                                                                    readonly /></td>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 mb-20">
                                        <div id="revision"></div>
                                        <p class="mb-10">Recuerda llenar todos los campos que posean un * ,si la
                                            informacion ingresada es correcta por favor oprime finalizar sino regresa y
                                            modifica la informacion ingresada.</p>
                                        <small class="d-block text-center"></small>
                                    </div>
                                </div>
                            </section>
                            <!-- phase 6 -->
                        </div>
                        </form>
                        <div id="resultado"></div>
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
        <script src="<?php echo JS_SERVER.'credito/form-wizard-data.js'; ?>"></script>
        <script src="<?php echo JS_SERVER.'directory.js';  ?>"></script>
        <script src="<?php echo JS_SERVER.'app.js';  ?>"></script>
        <script src="<?php echo JS_SERVER.'credito/module.js';  ?>"></script>
        <script src="<?php echo DIST_PANGONG_SERVER.'js/daterangepicker-data.js';  ?>"></script> 
        <script>
            $('#panel_cartera').hide();
            $(document).on('click', '#tipoCredito', function (e) {
                if (document.getElementsByName("tipoCredito")[0].value == "COMPRA DE CARTERA") {
                    $('#panel_cartera').show();
                } else {
                    $('#panel_cartera').hide();
                }
            });
            if (document.getElementsByName("comprobar_laboral")[0].value == "Trabajador activo") {
                $('#laboral').show();
            } else {
                $('#laboral').hide();
            }
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