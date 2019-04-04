<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/conf.php');
include_once(PROVIDER_PATH."creditoController.php");
include_once(TOOLS_PATH."formatterString.php");
 /* Ruta del archivo de sesion*/
 require_once(CONFIGURATION_PATH."session.php");

 session::verificarSesion($_SESSION['idsesion']);
 $objCredito = creditoController::objCredito($_GET['id']);
//$objOBservaciones = creditoController::ObservacionesCredito($_GET['id']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- head -->
    <?php  include_once("../../global/layouts/head.php");  ?>
    <!-- /head -->


</head>

<body>
    <input type="hidden" value="<?php echo $_SESSION['idsesion'];   ?>" name="sesion" />
    <input type="hidden" value="<?php echo $_SESSION['nombre'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['foto'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['idciudad'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['rol'];   ?>" />
    <input type="hidden" value="<?php echo $objCredito->getIdcliente();   ?>" />
    <input type="hidden" value="<?php echo $objCredito->getIdCredito();   ?>" name="credito" />
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
                    <li class="breadcrumb-item"><a href="<?php echo PLATFORM_SERVER."modules/credito/verFicha.php?id=".$objCredito->getIdCredito();
                            ?>">Folio Credito</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Transicion</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- Container -->
            <div class="container">
                <div class="hk-pg-header align-items-top">
                    <div>
                        <h2 class="hk-pg-title font-weight-600 mb-10">Folio de credito - Transicion de estado.</h2>
                        <p>Numero de registro de Folio de credito # <strong>
                                <?php echo $objCredito->getIdCredito(); ?></strong>
                            <small>Estado del credito :
                                <?php echo creditoController::estadoCredito($objCredito->getEstado());  ?> </small>
                        </p>
                    </div>
                    <div class="w-1024p">
                        <div class="form-inline">
                            <div class="form-row align-items-center ">
                                <div class="col-auto">
                                    <div class="custom-control ">
                                        <label class=""> <i class='fa fa-sort-numeric-up fa-2x '></i> </label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="input-group mb-2">
                                        <select class="form-control custom-select d-block w-100" id="transicion" name="transicion">
                                            <option value="2">Aprobado</option>
                                            <option value="3">Desembolsado</option>
                                            <option value="0">Inactivar registro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="col-md-12 ">
                                        <div class="form-inline">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <a href="#" id="aplicarEstado" target="_self" class="btn btn-gradient-info mb-2 btn-lg"><i
                                                            class="fa fa-calendar-day"></i> Aplicar transicion</a>


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

                    <div class="row">
                        <div class="col-sm">

                            <div class="table-wrap">
                                <div class="row">

                                    <div class="col-md-12 pl-90 pb-30 ">
                                        <div class="form-inline">
                                            <div class="form-row align-items-center ">
                                                <div class="col-auto">

                                                    <div class="custom-control ">

                                                        <label class=""> <i class='fa fa-filter fa-2x '></i>
                                                            .</label>
                                                    </div>

                                                </div>

                                                <div class="col-auto">

                                                    <div class="input-group mb-2">
                                                        <select class="form-control custom-select d-block w-100" id="consulta"
                                                            name="consulta">
                                                            <option value="za">Filtro por . . . </option>
                                                            <option value="az">Fecha de registro mayor a menor</option>
                                                            <option value="za">Fecha de registro menor a mayor</option>
                                                            <option value="us">Nombre Usuario AZ</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <br><br><br><br>
                                    <div class="col-md-12 ">
                                        <div class="form-inline">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <a href="#" id="crearObservacion" class="btn btn-gradient-info mb-2 btn-lg"
                                                        data-toggle='modal' data-target='#modalVentana'>
                                                        <i class="fa fa-comments "></i> Crear nueva Observacion</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 " id="smg"></div>
                                </div>

                                <div id="tablaDinamica">
                                    <?php creditoController::listaObservacionesCredito('za',$_GET['id']);?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Modal -->

                <div class="modal fade" id="modalVentana" tabindex="-1" role="dialog" aria-labelledby="modalVentana"
                    style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Crear Observacion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-justify">Ingrese su observacion sobre el credito!</p>
                                <textarea class="form-control mt-15" rows="3" name="textArea" placeholder="Textarea"></textarea>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-gradient-info mb-2" data-dismiss="modal">Cerra</button>
                                <button type="button" id="registrarObservacion" class="btn btn-gradient-info mb-2">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalVentana2" tabindex="-1" role="dialog">

                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ficha Observacion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Fecha actual</label>
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <input class="form-control" type="text" id="fechaActual" name="fechaActual"
                                                value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Meses de intereses anticipados</label>
                                        <input type="number" class="form-control" name="meses" placeholder="meses"
                                            onchange="sumarFecha()">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Fecha : Primera cuota</label>
                                        <input type="text" class="form-control" name="meses1" placeholder="" value="0" required>
                                    </div>

                                    <input type="button" id="aplicarDesembolso" class="btn btn-gradient-info mb-2" value="Reportar desembolsado"/>
                                </form>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-gradient-info mb-2" data-dismiss="modal">Cerra</button>
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
    <script src="<?php echo JS_SERVER.'credito/module.js';  ?>"></script>
    <script>
        function sumarFecha() {
           
           var f = new Date();
          //alert(f.getFullYear() + '/' + f.getMonth()+1  + '/' + f.getDate());
          var mes = document.getElementsByName("meses")[0].value;

          //alert("+"+(parseInt(mes)+1));
          var t = (parseInt(mes)+2);
          document.getElementsByName("meses1")[0].value = editar_fecha(f.getDate() + '/' + (f.getMonth())  + '/' + f.getFullYear()
          ,"+"+t
          , 'm'
          , '/');            
            
      }
    </script>

    <!-- /App Libs -->
</body>

</html>