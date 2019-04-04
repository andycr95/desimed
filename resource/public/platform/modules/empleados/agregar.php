<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  /* Ruta del archivo de sesion*/
  require_once(CONFIGURATION_PATH."session.php");
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
                    <li class="breadcrumb-item"><a href="<?php echo PLATFORM_SERVER." modules/empleados/index.php"; ?>">empleados</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Agregar empleado</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row  ">
                    <div class="col-xl-12">
                        <div id="example-basic">
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-tasks"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Asignacion de funciones </span>
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-xl-12 mb-20">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label for="">Tipo de empleado</label>
                                                    <select class="form-control custom-select d-block w-150" id="tipo"
                                                        name="tipo">
                                                        <option value="ASESORAS">Asesoras</option>
                                                        <option value="ENFERMERAS">Enfermeras</option>
                                                        <option value="MEDICOS">Medicos</option>
                                                        <option value="ESPECIALISTAS">Especialistas</option>
                                                        <option value="FARMACIA">Farmacia</option>
                                                        <option value="MENSAJERIA">mensajeria</option>
                                                        <option value="ADMINISTRACION">administracion</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <label for="">Rol o cargo en la empresa</label>
                                                    <input class="form-control" id="rol_empleado" name="rol_empleado"
                                                        placeholder="Rol. . ." value="" type="text">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for='country'>Descripcion de mis funciones en funcion de mi
                                                        rol:</label>
                                                    <textarea class="form-control mt-15" rows="8" cols="25" id="descripcion"
                                                        name="descripcion" placeholder="Textarea"></textarea>
                                                </div>

                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </section>
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-user"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Informacion de contacto</span>
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-xl-12 mb-20">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label for="nombre_apellido_empleado">Nombre completo</label>
                                                    <input class="form-control" id="nombre_empleado" name="nombre_empleado"
                                                        placeholder="nombre. . ." value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="documento_empleado">Documento de identificacion</label>
                                                    <input class="form-control" id="documento_empleado" name="documento_empleado"
                                                        placeholder="documento. . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for='country'>Genero:</label>
                                                    <select class='form-control custom-select d-block w-100' name="genero"
                                                        id='genero'>
                                                        <option selected>Elige un tipo...</option>
                                                        <option value="Masculino">Masculino</option>
                                                        <option value="Femenino">Femenino</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Fecha de nacimiento</label>
                                                    <input class="form-control" id="fecha" name="fecha" value="" type="text">
                                                </div>
                                                <div class="col-md-5 form-group">
                                                    <label for="">Direccion </label>
                                                    <input class="form-control" id="direccion" name="direccion"
                                                        placeholder="direccion. . ." value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Telefono Celular</label>
                                                    <input class="form-control" id="celular" name="celular" placeholder="# movil. . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-5 form-group">
                                                    <label for="">E-mail</label>
                                                    <input class="form-control" id="mail" name="mail" placeholder="E-mail. . ."
                                                        value="" type="text">
                                                </div>


                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </section>
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-shield-alt"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Autentificacion</span>
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-xl-12 mb-20">
                                        <section class="hk-sec-wrapper">
                                            <h5 class="hk-sec-title">Autentificacion</h5>
                                            <p class="mb-25">Ingrese los datos de acceso a la plataforma del empleado.</p>
                                            <div class="row">
                                                <div class="col-sm">
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="control-label mb-10" for="exampleInputuname_1">Usuario o correo electronico</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" id="usuario" name="usuario"
                                                                    placeholder="Usuario">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label mb-10" for="exampleInputpwd_1">Clave</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                                                </div>
                                                                <input type="password" class="form-control" id="clave" name="clave"
                                                                    placeholder="clave....">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label mb-10" for="exampleInputpwd_2">Confirmar clave</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                                                </div>
                                                                <input type="password" class="form-control" id="mailc" name="mailc"
                                                                    placeholder="confirmar clave.....">
                                                            </div>
                                                        </div>
                                                        <div id="smgValidacion"></div>

                                                        <button type="button" class="btn btn-primary mr-10" id="validarSesion"><li class="fa fa-user-check"></li> Validar usuario y clave</button>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </section>
                            <!-------------------------------------------------------->


                        </div>
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
    <!-- /App Libs -->
</body>

</html>