<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/conf.php');
include_once(PROVIDER_PATH."empleadoController.php");
include_once(PROVIDER_PATH."sesionController.php");
  /* Ruta del archivo de sesion*/
  require_once(CONFIGURATION_PATH."session.php");
  session::verificarSesion($_SESSION['idsesion']);
  $objempleado= empleadoController::objempleado($_GET['id']);
  $objsesion = sesionController::objSesionEmpleado($objempleado->getIdsesion());

//print_r($objempleado);

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
    <input type="hidden" value="<?php echo $_SESSION['rol'];   ?>" />
    <input type="hidden" value="<?php echo $objempleado->getIdempleado();   ?>" />
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
                    <li class="breadcrumb-item"><a href="<?php echo PLATFORM_SERVER." modules/empleados/index.php"; ?>">Empleados</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ficha de empleado</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- Container -->
            <div class="container">
                <div class="hk-pg-header align-items-top">
                    <div>
                        <h2 class="hk-pg-title font-weight-600 mb-10">Ficha de empleado.</h2>
                        <p>Numero de registro # <strong>
                                <?php echo $objempleado->getIdempleado(); ?></strong></p>
                    </div>
                    <div class="w-1024p">
                        <div class="form-inline">
                            <div class="form-row align-items-center ">
                                <div class="col-auto">
                                    <div class="col-md-12 ">
                                        <div class="form-inline">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <button id="editarempleado" class="btn btn-gradient-info mb-2 btn-lg"><i
                                                            class="fa fa-calendar-day"></i> Editar ficha del empleado</button>
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
                            <form>
                                <h6 class="form-group">Rol y funciones </h6>
                                <div class="row">
                                    <div class="col-md-3 form-group">
                                        <label for="">Tipo de empleado</label>
                                        <input readonly class="form-control" id="tipo_empleado" name="tipo_empleado"
                                            value="<?php echo $objempleado->getTipo_empleado(); ?>" type="text">
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label for="">Rol</label>
                                        <input readonly class="form-control" id="rol_empleado" name="rol_empleado"
                                            value="<?php echo $objempleado->getRol_empleado(); ?>" type="text">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for='country'>Descripcion de mis funciones en funcion de mi
                                            rol:</label>
                                        <textarea class="form-control mt-15" rows="8" cols="25" id="descripcion" name="descripcion"
                                            value="" placeholder="Textarea"><?php echo $objempleado->getDescripcion_empleado(); ?></textarea>
                                    </div>

                                </div>
                                <hr>
                                <h6 class="form-group">Datos de contacto </h6>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="nombre_apellido_empleado">Nombre completo</label>
                                        <input class="form-control" id="nombre_empleado" name="nombre_empleado"
                                            placeholder="nombre . . ." value="<?php echo $objempleado->getNombre_empleado(); ?>" type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="documento_empleado">Documento de identificacion</label>
                                        <input class="form-control" id="documento_empleado" name="documento_empleado"
                                            placeholder="documento. . ." value="<?php echo $objempleado->getDocumento_empleado(); ?>" type="text">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for='country'>Genero:</label>
                                        <input class="form-control" id="genero_empleado" name="genero_empleado"
                                            placeholder="documento. . ." value="<?php echo $objempleado->getSexo_empleado(); ?>" type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="">Fecha de nacimiento</label>
                                        <input class="form-control" id="fecha" name="fecha" value="<?php echo $objempleado->getFecha_nacimiento_empleado(); ?>" type="text">
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label for="">Direccion </label>
                                        <input class="form-control" id="direccion" name="direccion" placeholder="direccion. . ."
                                            value="<?php echo $objempleado->getDireccion_empleado(); ?>" type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="">Telefono Celular</label>
                                        <input class="form-control" id="celular" name="celular" placeholder="# movil. . ."
                                            value="<?php echo $objempleado->getTelefono_empleado(); ?>" type="text">
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label for="">E-mail</label>
                                        <input class="form-control" id="mail" name="mail" placeholder="E-mail. . ."
                                            value="<?php echo $objempleado->getEmail_empleado(); ?>" type="text">
                                    </div>


                                </div>
                                <hr>
                                <h6 class="form-group">Datos de autentificacion </h6>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="">Usuario</label>
                                        <input class="form-control" id="usuario_empleado" name="usuario_empleado"
                                            placeholder="Usuario . . ." value="<?php echo $objsesion->getUsuario(); ?>" type="text">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="">Clave</label>
                                        <input class="form-control" id="clave_empleado" name="clave_empleado"
                                            placeholder="Clave. . ." value="<?php echo $objsesion->getClave(); ?>" type="text">
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
    <script src="<?php echo JS_SERVER.'empleado/module.js';  ?>"></script>
    <script src="<?php echo DIST_PANGONG_SERVER.'js/daterangepicker-data.js';  ?>"></script>
    <script>
        //var test=document.getElementsByName('nombreempleado').disabled=true;
        //$("#nombreempleado").prop('disabled', true);
        //$("#nombreempleado").prop('readonly', false);
    </script>
    <!-- /App Libs -->
</body>

</html>