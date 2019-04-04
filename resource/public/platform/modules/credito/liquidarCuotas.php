<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/conf.php');
include_once(PROVIDER_PATH."creditoController.php");
require_once(PERSISTENCE_PATH."incorporacionDao.php");
include_once(TOOLS_PATH."formatterString.php");
 /* Ruta del archivo de sesion*/
 require_once(CONFIGURATION_PATH."session.php");
 session::verificarSesion($_SESSION['idsesion']);
$objCredito = creditoController::objCredito($_GET['id']);
$idao = new incorporacionDao();
$imArray=$idao->interesesMorosos($_GET['id']);
$estado ="";
if(floatval($imArray['interesesAtrasados']) >0){
    $estado = "<div class='alert alert-inv alert-inv-danger alert-wth-icon alert-dismissible fade show' role='alert'>
    <span class='alert-icon-wrap'><i class='zmdi zmdi-check-circle'></i></span>  Estado del credito moroso.
</div>";
}else{
    $estado = "<div class='alert alert-inv alert-inv-success alert-wth-icon alert-dismissible fade show' role='alert'>
    <span class='alert-icon-wrap'><i class='zmdi zmdi-check-circle'></i></span> A tiempo.
    
</div>";
}
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
    <input type="hidden" value="<?php echo $_SESSION['idsesion'];   ?>" name='idsesion' />
    <input type="hidden" value="<?php echo $_SESSION['nombre'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['foto'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['idciudad'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['rol'];   ?>" />
    <input type="hidden"  value="<?php echo $_GET['id'];   ?>" name="idcredito"/>
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
                    <li class="breadcrumb-item"><a href="<?php echo PLATFORM_SERVER."modules/credito/verFicha.php?id=".$_GET['id'];
                            ?>">folio de credito</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Incorporaciones</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- Container -->
            <div class="container">
                <div class="hk-pg-header align-items-top">
                    <div>
                        <h2 class="hk-pg-title font-weight-600 mb-10">Incorporacion</h2>
                        <p>Numero de registro de credito # <strong>
                                <?php //echo $objCliente->getIdcliente(); ?></strong></p>
                    </div>
                    <div class="w-1024p">
                        <div class="form-inline">
                            <div class="form-row align-items-center ">
                                <div class="col-auto">
                                    <div class="col-md-12 ">
                                        <div class="form-inline">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <a href="#" id="efectuarPago" target="_self" class="btn btn-gradient-info mb-2 btn-lg"><i
                                                            class="fa fa-calendar-day"></i> Efectuar pago / Pagos</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div id="smg"></div>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Informe de credito </h5>
                    <p class="mb-25">
                    </p>
                    
                    <div class="row">
                        <div class="col-sm">
                        
                            <form>
                                <div class="row">
                                    <div class="col-md-5 form-group">
                                        <label for="nombreCliente">Tipo de credito</label>
                                        <input class="form-control" id="nombre" placeholder="" value="<?php echo $objCredito->getTipoCredito(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="firstName">Fecha de registro</label>
                                        <input class="form-control" id="firstName" placeholder="" value="<?php echo $objCredito->getRegistro(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 form-group">
                                        <label for="nombreCliente">Monto</label>
                                        <input class="form-control" type="text" name="" value="<?php echo number_format($objCredito->getMonto()); ?>">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="lastName">Tasa %</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo $objCredito->getTasa_ofrecidad(); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="firstName">Plazo</label>
                                        <input class="form-control" id="firstName" placeholder="" value="<?php echo $objCredito->getPlazo(); ?>"
                                            type="text" id="pago" name="pago">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="nombreCliente">Cuota</label>
                                        <input class="form-control" type="text" name="" value="<?php echo number_format($objCredito->getCuota()); ?>">
                                    </div>
                                    <hr>
                                    <div class="col-md-4 form-group">
                                        <label for="nombreCliente">Aval</label>
                                        <input class="form-control" type="text" name="" value="<?php echo number_format($objCredito->getAvalCredito()); ?>">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="lastName">Administrativo</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo number_format($objCredito->getAdministracionCredito()); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="firstName">Seguridad</label>
                                        <input class="form-control" id="firstName" placeholder="" value="<?php echo number_format($objCredito->getSeguroCredito()); ?>"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Capital Amortizado</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo number_format($objCredito->getcapitalAmortizado()); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="lastName">Capital vivo</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo number_format($objCredito->getCapitalVivo()); ?>"
                                            type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Fecha primera cuota</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo $objCredito->getFechaPrimeraCota(); ?>"
                                            type="text">
                                    </div>
                                    <hr>
                                    
                                    <div class="col-md-2 form-group">
                                        <label for="nombreCliente">Intereses Morosos</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo number_format($imArray['interesesAtrasados']); ?>"
                                            type="text">
                                    </div>
                                    <!-- <div class="col-md-2 form-group">
                                        <label for="lastName">Otros cobros Mo</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php echo number_format($imArray['otrosCobrosAtrasados']); ?>"
                                            type="text">
                                    </div>                           -->
                                    <div class="col-md-2 form-group">
                                        <label for="lastName">Cuotas morosas</label>
                                        <input class="form-control" id="lastName" placeholder="" value="<?php creditoController::cuotasMorosas($_GET['id']); ?>"
                                            type="text">
                                    </div>
                                </div>
                                <hr>
                                <?php  creditoController::listaCuotasNoPagadas($_GET['id']);  ?>
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
    <script src="<?php echo JS_SERVER.'credito/module.js';  ?>"></script>
    <!-- /App Libs -->
</body>
</html>