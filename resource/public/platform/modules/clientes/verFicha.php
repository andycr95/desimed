<?php session_start();

include_once($_SERVER['DOCUMENT_ROOT'].'/conf.php');

include_once(PROVIDER_PATH."clienteController.php");

include_once(TOOLS_PATH."formatterString.php");
  /* Ruta del archivo de sesion*/
  require_once(CONFIGURATION_PATH."session.php");

  session::verificarSesion($_SESSION['idsesion']);
$objCliente = clienteController::objCliente($_GET['id']);

//print_r($objCliente);
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <!-- head -->
    <?php  include_once("../../global/layouts/head.php");  ?>
    <!-- /head -->

</head>

<body>
    <input type="hidden" value="<?php echo $_SESSION['idsesion'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['nombre'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['foto'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['idciudad'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['rol'];   ?>" />
    <input type="hidden" value="<?php echo $objCliente->getIdcliente();   ?>" />
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
                    <li class="breadcrumb-item"><a href="<?php echo PLATFORM_SERVER."modules/clientes/index.php"; ?>">Cliente</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ficha de cliente</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- Container -->
            <div class="container">
                <div class="hk-pg-header align-items-top">
                    <div>
                        <h2 class="hk-pg-title font-weight-600 mb-10">Ficha de cliente.</h2>
                        <p>Numero de registro # <strong>
                                <?php echo $objCliente->getIdcliente(); ?></strong></p>
                    </div>
                    <div class="w-1024p">
                        <div class="form-inline">
                            <div class="form-row align-items-center ">
                                <div class="col-auto">
                                    <div class="col-md-12 ">
                                        <div class="form-inline">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <button disabled id="editarCliente" class="btn btn-gradient-info mb-2 btn-lg"><i
                                                            class="fa fa-calendar-day"></i> Editar ficha del cliente</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="col-md-12 ">
                                        <div class="form-inline">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <a href="<?php echo  PLATFORM_SERVER."modules/credito/agregar.php?id=".$objCliente->getIdcliente();
                                                        ?>" target="_self" class="btn btn-gradient-info mb-2 btn-lg"><i
                                                            class="fa fa-calendar-day"></i> Crear
                                                        nuevo credito</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <section class="hk-sec-wrapper">
                    <div class="col-auto">
                        <div class="col-md-12 ">
                            <div class="form-inline">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <a href="#" id="desbloquear" target="_self" class="btn btn-gradient-info mb-2 btn-sm"><i
                                                class="fa fa-calendar-day"></i> Modificar Formulario</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="hk-sec-title">Formulario de contacto</h5>
                    <div class="row">
                        <div class="col-sm">
                            <form>
                                <h6 class="form-group">Datos de contacto </h6>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="nombreCliente">Nombre</label>
                                        <input readonly class="form-control" id="nombreCliente" name="nombreCliente"
                                            value="<?php echo $objCliente->getNombreCompletoCliente(); ?>" type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="lastName">Tipo de documento</label>
                                        <input readonly class="form-control" id="tipo_documento" name="tipo_documento"
                                            value="<?php echo $objCliente->getTipoDocumento(); ?>" type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="firstName">Documento</label>
                                        <input readonly class="form-control" id="documento" name="documento" value="<?php echo $objCliente->getDocumentoCliente(); ?>"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Fecha de expedicion</label>
                                        <input  class="form-control" type="text" name="fecha_expedicion" id=""
                                            value="<?php echo formatterString::invertirPosicionFechaMysql($objCliente->getFechaExpedicion()); ?>">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="lastName">Lugar de expedicion</label>
                                        <input readonly class="form-control" id="lugar_expedicion" name="lugar_expedicion"
                                            value="<?php echo $objCliente->getLugarExpedicion(); ?>" type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="firstName">Nacionalidad</label>
                                        <input readonly class="form-control" name="nacionalidad" id="nacionalidad"
                                            value="<?php echo $objCliente->getNacionalidad(); ?>" type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Fecha de nacimiento</label>
                                        <input class="form-control" type="text" id="" name="fecha_nacimiento"
                                            value="<?php echo formatterString::invertirPosicionFechaMysql($objCliente->getFechaNacimiento());?>">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="lastName">lugar de nacimiento</label>
                                        <input  class="form-control" name="lugar_nacimiento" id="lugar_nacimiento"
                                            value="<?php echo $objCliente->getLugarNacimiento(); ?>" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Genero</label>
                                        <input readonly class="form-control" id="genero" name="genero" value="<?php echo $objCliente->getGenero(); ?>"
                                            type="text">
                                    </div>
                                   
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Nivel educativo</label>
                                        <input readonly class="form-control" id="nivel_educativo" name="nivel_educativo"
                                            value="<?php echo $objCliente->getNivelEducativo(); ?>" type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="lastName">Profesion</label>
                                        <input readonly class="form-control" id="profesion" name="profesion" value="<?php echo $objCliente->getProfesion(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="firstName">Estado laboral</label>
                                        <input readonly class="form-control" id="cargo" name="cargo" value="<?php echo $objCliente->getCargoCliente(); ?>"
                                            type="text">
                                    </div>
                                </div>
                                <hr>
                                <h6 class="form-group">Ingresos </h6>
                                <div class="row">
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Total de ingresos</label>
                                        <input readonly class="form-control" id="total_ingresos" name="total_ingresos"
                                            value="<?php echo $objCliente->getTotalIngresos(); ?>" type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="lastName">Activos vivienda</label>
                                        <input readonly class="form-control" id="activo_vivienda" name="activo_vivienda"
                                            value="<?php echo $objCliente->getTotalActivoVivienda(); ?>" type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="firstName">Activos vehiculo</label>
                                        <input readonly class="form-control" id="activo_vehiculo" name="activo_vehiculo"
                                            value="<?php echo $objCliente->getTotalActivoVivienda(); ?>" type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Activos otros</label>
                                        <input readonly class="form-control" id="activo_otros" name="activo_otros"
                                            value="<?php echo $objCliente->getTotalActivoOtros(); ?>" type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="lastName">Total pasivos</label>
                                        <input readonly class="form-control" id="total_pasivo" name="total_pasivo"
                                            value="<?php echo $objCliente->getTotalPasivos(); ?>" type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="firstName">Otros ingresos</label>
                                        <input readonly class="form-control" id="otros_ingresos" name="otros_ingresos"
                                            value="<?php echo $objCliente->getTotalOtrosIngresos(); ?>" type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="firstName">Total egresos</label>
                                        <input readonly class="form-control" id="total_egresos" name="total_egresos"
                                            value="<?php echo $objCliente->getTotalEgresos(); ?>" type="text">
                                    </div>
                                </div>
                                <hr>
                                <h6 class="form-group">Otros datos </h6>
                                <div class="row">
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Estado civil</label>
                                        <input readonly class="form-control" id="estado_civil" name="estado_civil"
                                            value="<?php echo $objCliente->getEstadoCivil(); ?>" type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="lastName">E-mail</label>
                                        <input readonly class="form-control" id="email" name="email" value="<?php echo $objCliente->getMailCliente(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="firstName">Telefono fijo</label>
                                        <input readonly class="form-control" id="telefono_fijo" name="telefono_fijo"
                                            value="<?php echo $objCliente->getTelefonoFijoCliente(); ?>" type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Telefono personal</label>
                                        <input readonly class="form-control" id="telefono_personal" name="telefono_personal"
                                            value="<?php echo $objCliente->getTelefonoPersonalCliente(); ?>" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 form-group">
                                        <label for="nombreCliente">Direccion residencia</label>
                                        <input readonly class="form-control" id="direccion_residencia" name="direccion_residencia"
                                            value="<?php echo $objCliente->getDireccionResidenciaCliente(); ?>" type="text">
                                    </div>

                                    <div class="col-md-2 form-group">
                                        <label for="firstName">Ciudad</label>
                                        <input readonly class="form-control" id="ciudad" name="ciudad" value="<?php echo $objCliente->getIdCiudadCliente(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="firstName">Estrato</label>
                                        <input readonly class="form-control" id="estrato" name="estrato" placeholder=""
                                            value="<?php echo $objCliente->getEstrato(); ?>" type="text">
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Posee vehiculo</label>
                                        <input readonly class="form-control" name="posee_vehiculo" id="posee_vehiculo"
                                            value="<?php echo $objCliente->getPoseeVehiculo(); ?>" type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="lastName">Pignorado</label>
                                        <input readonly class="form-control" id="pignorado" name="pignorado" value="<?php echo $objCliente->getPignorado(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="firstName">Modelo - marca</label>
                                        <input readonly class="form-control" id="modelo" name="modelo" value="<?php echo $objCliente->getModeloMarca(); ?>"
                                            type="text">
                                    </div>
                               
                                    <div class="col-md-2 form-group">
                                        <label for="firstName">Placa</label>
                                        <input readonly class="form-control" name="placa" id="placa" value="<?php echo $objCliente->getPlaca(); ?>"
                                            type="text">
                                    </div>
                                </div>
                                <hr>
                                <h6 class="form-group">Conyuge </h6>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="nombreCliente">Nombre</label>
                                        <input readonly class="form-control" id="nombre_conyuge" name="nombre_conyuge"
                                            value="<?php echo $objCliente->getNombreApellidoConyuge(); ?>" type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="lastName">Tipo de documento</label>
                                        <input readonly class="form-control" name="tipo_documento_conyuge" id="tipo_documento_conyuge"
                                            value="<?php echo $objCliente->getNombreApellidoConyuge(); ?>" type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="firstName">Documento</label>
                                        <input readonly class="form-control" name="documento_conyuge" id="documento_conyuge"
                                            value="<?php echo $objCliente->getDocumentoConyuge(); ?>" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                   
                                    <div class="col-md-4 form-group">
                                        <label for="lastName">Actividad economica</label>
                                        <input readonly class="form-control" name="actividad_economica" id="actividad_economica"
                                            value="<?php echo $objCliente->getActividadEconomicaConyuge(); ?>" type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="firstName">Cargo conyuge</label>
                                        <input readonly class="form-control" name="cargo_conyuge" id="cargo_conyuge"
                                            value="<?php echo $objCliente->getCargoConyuge(); ?>" type="text">
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4 form-group">
                                        <label for="lastName">Ciudad de residencia</label>
                                        <input readonly class="form-control" name="ciudad_residencia" id="ciudad_residencia"
                                            value="<?php echo $objCliente->getIdCiudadConyuge(); ?>" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="lastName">E-mail</label>
                                        <input readonly class="form-control" name="email_conyuge" id="email_conyuge"
                                            value="<?php echo $objCliente->getMailConyuge(); ?>" type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="firstName">Telefono fijo</label>
                                        <input readonly class="form-control" name="telefono_fijo_conyuge" id="telefono_fijo_conyuge"
                                            value="<?php echo $objCliente->getTelefonoFijoConyuge(); ?>" type="text">
                                    </div>
                                   
                                </div>
                                <hr>
                                <h6 class="form-group">Actividad </h6>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="nombreCliente">Actividad economica cliente</label>
                                        <input readonly class="form-control" id="actividad_economica_cliente" name="actividad_economica_cliente"
                                            value="<?php echo $objCliente->getActividadEconomicaCliente(); ?>" type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="lastName">Fecha de terminacion</label>
                                        <input readonly class="form-control" name="fecha_terminacion" id=""
                                            value="<?php echo $objCliente->getFechaTerminacion(); ?>" type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="firstName">tipo de contracto</label>
                                        <input readonly class="form-control" name="tipo_contracto" id="tipo_contracto"
                                            value="<?php echo $objCliente->getTipoContrato(); ?>" type="text">
                                    </div>
                                </div>
                                <hr>
                                <h6 class="form-group">Referencias del cliente</h6>
                                <div class="row">
                                    <div class="col-md-3 form-group">
                                        <label for="nombreCliente">Nombre</label>
                                        <input readonly class="form-control" name="nombre_referencia1" id="nombre_referencia1"
                                            value="<?php echo $objCliente->getnombre1(); ?>" type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="lastName">Direccion</label>
                                        <input readonly class="form-control" name="direccion_referencia1" name="direccion_referencia1" 
                                            value="<?php echo $objCliente->getnombre1(); ?>" type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="firstName">Ciudad</label>
                                        <input readonly class="form-control"name="ciudad_referencia1" id="ciudad_referencia1"
                                            value="<?php echo $objCliente->getCiudad1(); ?>" type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="firstName">Telefono domicilio</label>
                                        <input readonly class="form-control" name="telefono_domicilio1" id="telefono_domicilio1"
                                            value="<?php echo $objCliente->getTelefono_domicilio1(); ?>" type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="firstName">Celular </label>
                                        <input readonly class="form-control" name="celular1" id="celular1"
                                            value="<?php echo $objCliente->getCelular1(); ?>" type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="firstName">Parestesco</label>
                                        <input readonly class="form-control" name="parentesco1" id="parentesco1"
                                            value="<?php echo $objCliente->getParentesco1(); ?>" type="text">
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label for="nombreCliente">Nombre</label>
                                            <input readonly class="form-control" name="nombre_referencia2" id="nombre_referencia2"
                                                value="<?php echo $objCliente->getnombre2(); ?>" type="text">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="lastName">Direccion</label>
                                            <input readonly class="form-control" name="direccion_referencia2" name="direccion_referencia2" 
                                                value="<?php echo $objCliente->getnombre2(); ?>" type="text">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="firstName">Ciudad</label>
                                            <input readonly class="form-control"name="ciudad_referencia2" id="ciudad_referencia2"
                                                value="<?php echo $objCliente->getCiudad2(); ?>" type="text">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="firstName">Telefono domicilio</label>
                                            <input readonly class="form-control" name="telefono_domicilio2" id="telefono_domicilio2"
                                                value="<?php echo $objCliente->getTelefono_domicilio2(); ?>" type="text">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="firstName">Celular </label>
                                            <input readonly class="form-control" name="celular2" id="celular2"
                                                value="<?php echo $objCliente->getCelular2(); ?>" type="text">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="firstName">Parestesco</label>
                                            <input readonly class="form-control" name="parentesco2" id="parentesco2"
                                                value="<?php echo $objCliente->getParentesco2(); ?>" type="text">
                                        </div>
                                    </div>
                            </form>
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
    <script src="<?php echo JS_SERVER.'cliente/module.js';  ?>"></script>
    <script src="<?php echo DIST_PANGONG_SERVER.'js/daterangepicker-data.js';  ?>"></script>
    <script>
        $("#editarCliente").prop('disabled', true);
        //var test=document.getElementsByName('nombreCliente').disabled=true;
        //$("#nombreCliente").prop('disabled', true);
        //$("#nombreCliente").prop('readonly', false);

       
    </script>

    <!-- /App Libs -->



</body>



</html>