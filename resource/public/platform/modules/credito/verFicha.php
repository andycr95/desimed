<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/conf.php');
include_once(PROVIDER_PATH."creditoController.php");
include_once(PROVIDER_PATH."usuarioController.php");
include_once(MODEL_PATH."usuario.php");
require_once(PERSISTENCE_PATH."incorporacionDao.php");
include_once(TOOLS_PATH."formatterString.php");
 /* Ruta del archivo de sesion*/
 
 require_once(CONFIGURATION_PATH."session.php");
 session::verificarSesion($_SESSION['idsesion']);
$objCredito = creditoController::objCredito($_GET['id']);

$idao = new incorporacionDao();
$imArray=$idao->interesesMorosos($_GET['id']);
//$modelUsuarioCreacion=usuarioController::objDaoUsuario($objCredito->getIdSesionUsuarioCreacion());
//$modelUsuarioAprobacion=usuarioController::objDaoUsuario($objCredito->getIdSesionUsuarioAprovacion());
//$modelUsuarioModificacion=usuarioController::objDaoUsuario($objCredito->getIdSesion());
//print_r();
$estado ="";
if(floatval($imArray['interesesAtrasados']) >0){
    $estado = "<span class='badge badge-danger'> Estado del credito a moroso.</span>";
}else{
    $estado = "<span class='badge badge-success'> Estado del credito a tiempo.</span>";
}
?>
<!DOCTYPE html>
<html lang="es">
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
    <input type="hidden" value="<?php echo $objCredito->getIdcliente();   ?>" />
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
                    <li class="breadcrumb-item"><a href="<?php echo PLATFORM_SERVER."modules/credito/index.php"; ?>">Credito</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Folio de credito</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- Container -->
            <div class="container">
                <div class="hk-pg-header align-items-top">
                    <div>
                        <h2 class="hk-pg-title font-weight-600 mb-10">Folio de credito.</h2>
                        <p>Numero de registro de Folio # <strong>
                                <?php echo $objCredito->getIdCredito(); ?></strong></p>
                    </div>
                    <div class="w-1024p">
                        <div class="form-inline">
                            <div class="form-row align-items-center ">
                                <div class="col-auto">
                                    <div class="col-md-12 ">
                                        <div class="form-inline">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <a href="#" id="editarCliente" target="_self" class="btn btn-gradient-info mb-2 btn-lg"><i
                                                            class="fa fa-calendar-day"></i> Editar folio del credito</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                <?php //echo .$obj Credito->getEstado();
                                                    if(intval($objCredito->getEstado()) != 3){ ?>
                                    <div class="col-md-12 ">
                                        <div class="form-inline">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <a href="<?php echo  PLATFORM_SERVER."modules/credito/transicion.php?id=".$objCredito->getIdCredito();
                                                        ?>" target="_self" class="btn btn-gradient-info mb-2 btn-lg"><i
                                                            class="fa fa-calendar-day"></i> Transicion</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>    
                                </div>
                                <div class="col-auto">
                                    <div class="col-md-12 ">
                                        <div class="form-inline">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                               <?php //echo .$obj Credito->getEstado();
                                                    if($objCredito->getEstado() == 3){ ?>
                                                    <a href="<?php echo  PLATFORM_SERVER."modules/credito/incorporacion.php?id=".$objCredito->getIdCredito();
                                                        ?>" target="_self" class="btn btn-gradient-info mb-2 btn-lg"><i
                                                            class="fa fa-calendar-day"></i> Incorporacion</a>
                                                    <?php } ?>        
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
                                                    <a href="<?php echo  PLATFORM_SERVER."modules/clientes/verFicha.php?id=".$objCredito->getIdCliente();
                                                        ?>" target="_self" class="btn btn-gradient-info mb-2 btn-lg"><i
                                                            class="fa fa-users "></i> Ver informacion del cliente</a>
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
                    <h5 class="hk-sec-title"><?php echo  $estado ?></h5>
                    
                    <div class="row">
                        <div class="col-sm">
                            <form>
                                <div class="row">
                                    <div class="col-md-5 form-group">
                                        <label for="nombreCliente">Codigo de formato de afiliacion</label>
                                        <input class="form-control" id="nombre" placeholder="" value="<?php echo $objCredito->getCodigoDocCredito(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="lastName">Tipo de credito</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo $objCredito->getTipoCredito(); ?>"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="firstName">Monto</label>
                                        <input class="form-control" id="firstName" placeholder="" value="<?php echo $objCredito->getMonto(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Tarifa %</label>
                                        <input class="form-control" type="text" name="" value="<?php echo $objCredito->getTasa_ofrecidad(); ?>">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="lastName">Plazo</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo $objCredito->getPlazo(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="firstName">Cuota</label>
                                        <input class="form-control" id="firstName" placeholder="" value="<?php echo $objCredito->getCuota(); ?>"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Aval</label>
                                        <input class="form-control" type="text" name="" value="<?php echo $objCredito->getAvalCredito(); ?>">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="lastName">Administrativo</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo $objCredito->getAdministracionCredito(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="firstName">Seguridad</label>
                                        <input class="form-control" id="firstName" placeholder="" value="<?php echo $objCredito->getSeguroCredito(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="nombreCliente">Capital Amortizado</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo $objCredito->getcapitalAmortizado(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="lastName">Capital vivo</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo $objCredito->getCapitalVivo(); ?>"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 form-group">
                                        <label for="nombreCliente">Usuario modificacion</label>
                                        <input class="form-control" type="text" name="" value="<?php echo $objCredito->getIdSesion(); ?>">
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label for="lastName">Fecha de modificacion</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo $objCredito->getFechaModificacion(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label for="nombreCliente">Usuario responable</label>
                                        <input class="form-control" type="text" name="" value="<?php //echo $modelUsuario->getNombreApellidoUsuario(); ?>">
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label for="lastName">Fecha de registro</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo $objCredito->getRegistro(); ?>"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 form-group">
                                        <label for="nombreCliente">Sucursal</label>
                                        <input class="form-control" type="text" name="" value="<?php echo $objCredito->getIdSucursal(); ?>">
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label for="lastName">Pagaduria</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo $objCredito->getIdentidad(); ?>"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 form-group">
                                        <label for="nombreCliente">Fecha de aprobacion</label>
                                        <input class="form-control" type="text" name="" value="<?php echo $objCredito->getFechaAprovacion(); ?>">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="lastName">Usuario que aprobo</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo $objCredito->getIdSesionUsuarioAprovacion(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Desembolso</label>
                                        <input class="form-control" type="text" name="" value="<?php echo $objCredito->getFechaDesembolso(); ?>">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="lastName">Fecha primera cuota</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo $objCredito->getFechaPrimeraCota(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="lastName">Fecha ultima cuota</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo $objCredito->getFechaFinalCota(); ?>"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="nombreCliente">Modalidad</label>
                                        <input class="form-control" type="text" name="" value="<?php echo $objCredito->getModalidad(); ?>">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="lastName">Tipo de cuenta</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo $objCredito->getTipo_cuenta(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="nombreCliente">Entidad</label>
                                        <input class="form-control" type="text" name="" value="<?php echo $objCredito->getEntidad(); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 form-group">
                                        <label for="nombreCliente">Numero de cuenta</label>
                                        <input class="form-control" type="text" name="" value="<?php echo $objCredito->getN_cuenta(); ?>">
                                    </div>
                                   
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <button type="button" class="btn btn-gradient-info" data-toggle="modal" data-target="#md1">
                                                    Cedula de ciudadania 
                                        </button>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <button type="button" class="btn btn-gradient-info" data-toggle="modal" data-target="#md2">
                                                Desprendibles de pago
                                        </button>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <button type="button" class="btn btn-gradient-info" data-toggle="modal" data-target="#md3">
                                                Autorizacion de DataCredito
                                        </button>   
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <button type="button" class="btn btn-gradient-info" data-toggle="modal" data-target="#md4">
                                                Certificado laboral
                                        </button>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <button type="button" class="btn btn-gradient-info" data-toggle="modal" data-target="#md5">
                                        Autorizacion  de descuento
                                        </button>   
                                    </div>
                                    
    
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <div class="modal fade" id="md1" tabindex="-1" role="dialog" aria-labelledby="md1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Cedula de ciudadania</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                        <embed src="<?php  echo 'http://cooservipres.com/external/'.$_GET['id'].'/documento1.pdf';  ?>" 
                                        width="750" height="700">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="md2" tabindex="-1" role="dialog" aria-labelledby="md2" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Desprendibles de pago</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <embed src="<?php  echo 'http://cooservipres.com/external/'.$_GET['id'].'/documento2.pdf';  ?>" 
                                        width="750" height="700">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="md3" tabindex="-1" role="dialog" aria-labelledby="md3" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Autorizacion data credito</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <embed src="<?php  echo 'http://cooservipres.com/external/'.$_GET['id'].'/documento3.pdf';  ?>" 
                                        width="750" height="700">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal fade" id="md4" tabindex="-1" role="dialog" aria-labelledby="md4" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Certificado laboral</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <embed src="<?php  echo 'http://cooservipres.com/external/'.$_GET['id'].'/documento4.pdf';  ?>" 
                                        width="750" height="700">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal fade" id="md5" tabindex="-1" role="dialog" aria-labelledby="md5" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Autorizacion  de descuento</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <embed src="<?php  echo 'http://cooservipres.com/external/'.$_GET['id'].'/documento5.pdf';  ?>" 
                                        width="750" height="700">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
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
    <!-- /App Libs -->
</body>
</html>