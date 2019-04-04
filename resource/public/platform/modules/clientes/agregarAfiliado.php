<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/conf.php');
include_once(PROVIDER_PATH."sesionController.php");
include_once(PROVIDER_PATH."empleadoController.php");
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
                    <li class="breadcrumb-item"><a href="<?php echo PLATFORM_SERVER."modules/clientes/index.php"; ?>">Clientes
                            & afiliados</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Agregar Afiliado</li>
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
                                                <div class="col-md-2 form-group">
                                                    <label for="">Referencia</label>
                                                    <input class="form-control" id="referencia_cliente" name="referencia_cliente"
                                                        placeholder="referencia . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for='country'>Asesora:</label>
                                                    <?php empleadoController::selectAsesoras(); ?>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="nombre_apellido_cliente">Nombre completo</label>
                                                    <input class="form-control" id="nombre_apellido_cliente" name="nombre_apellido_cliente"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="documento_cliente">Documento </label>
                                                    <input class="form-control" id="documento_cliente" name="documento_cliente"
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
                                                <div class="col-md-2 form-group">
                                                    <label for="">Fecha de nacimiento</label>
                                                    <input class="form-control" id="fecha" name="fecha" value="" type="text">
                                                </div>
                                                <div class="col-md-5 form-group">
                                                    <label for="">Direccion </label>
                                                    <input class="form-control" id="direccion" name="direccion"
                                                        placeholder="direccion. . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="">extracto</label>
                                                    <select class='form-control custom-select d-block w-100' name="extracto"
                                                        id='extracto'>
                                                        <option value="1">Extracto 1</option>
                                                        <option value="2">Extracto 2</option>
                                                        <option value="3">Extracto 3</option>
                                                        <option value="4">Extracto 4</option>
                                                        <option value="5">Extracto 5</option>
                                                        <option value="6">Extracto 6</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Telefono fijo</label>
                                                    <input class="form-control" id="telefono" name="telefono"
                                                        placeholder="# fijo . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Telefono Celular</label>
                                                    <input class="form-control" id="celular" name="celular" placeholder="# movil. . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="">E-mail</label>
                                                    <input class="form-control" id="mail" name="mail" placeholder="E-mail. . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label for='country'>Discapacidad 'Descripcion':</label>
                                                    <textarea class="form-control mt-15" rows="5" cols="25" id="descripcion"
                                                        name="descripcion" placeholder="descripcion"></textarea>
                                                </div>


                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </section>

                            <!-------------------------------------------------------->
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-user"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Beneficiarios</span>
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-xl-12 mb-20">
                                        <form>
                                            <h4>Beneficiario #1</h4>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label for="">Nombre Beneficiario #1</label>
                                                    <input class="form-control" id="nombre_beneficiario1" name="nombre_beneficiario1"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="">sexo beneficiario</label>
                                                    <select class='form-control custom-select d-block w-100' name="sexo_beneficiario1"
                                                        id='extracto'>
                                                        <option value="MASCULINO">MASCULINO</option>
                                                        <option value="FEMENINO">FEMENINO</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Documento beneficiario</label>
                                                    <input class="form-control" id="documento_beneficiario1" name="documento_beneficiario1"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">parentesco beneficiario</label>
                                                    <input class="form-control" id="parentesco_beneficiario1" name="parentesco_beneficiario1"
                                                        placeholder="parentesco . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">Discapacidad beneficiario</label>
                                                    <input class="form-control" id="discapacidad_beneficiario1" name="discapacidad_beneficiario1"
                                                        placeholder="discapacidad . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-5 form-group">
                                                    <label for="">Descripcion de discapacidad</label>
                                                    <input class="form-control" id="descripcion_discapacidad" name="descripcion_discapacidad"
                                                        placeholder="descripcion . . ." value="" type="text">
                                                </div>



                                            </div>
                                            <hr>
                                            <h4>Beneficiario #2</h4>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label for="">Nombre Beneficiario #2</label>
                                                    <input class="form-control" id="nombre_beneficiario2" name="nombre_beneficiario2"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="">sexo beneficiario</label>
                                                    <select class='form-control custom-select d-block w-100' name="sexo_beneficiario2"
                                                        id='sexo_beneficiario2'>
                                                        <option value="MASCULINO">MASCULINO</option>
                                                        <option value="FEMENINO">FEMENINO</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Documento beneficiario</label>
                                                    <input class="form-control" id="documento_beneficiario2" name="documento_beneficiario2"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">parentesco beneficiario</label>
                                                    <input class="form-control" id="parentesco_beneficiario2" name="parentesco_beneficiario2"
                                                        placeholder="parentesco . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">Discapacidad beneficiario</label>
                                                    <input class="form-control" id="discapacidad_beneficiario2" name="discapacidad_beneficiario2"
                                                        placeholder="discapacidad . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-5 form-group">
                                                    <label for="">Descripcion de discapacidad</label>
                                                    <input class="form-control" id="descripcion_discapacidad2" name="descripcion_discapacidad2"
                                                        placeholder="descripcion . . ." value="" type="text">
                                                </div>



                                            </div>
                                            <hr>
                                            <h4>Beneficiario #3</h4>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label for="">Nombre Beneficiario #1</label>
                                                    <input class="form-control" id="nombre_beneficiario3" name="nombre_beneficiario3"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="">sexo beneficiario</label>
                                                    <select class='form-control custom-select d-block w-100' name="sexo_beneficiario3"
                                                        id='sexo_beneficiario3'>
                                                        <option value="MASCULINO">MASCULINO</option>
                                                        <option value="FEMENINO">FEMENINO</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Documento beneficiario</label>
                                                    <input class="form-control" id="documento_beneficiario3" name="documento_beneficiario3"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">parentesco beneficiario</label>
                                                    <input class="form-control" id="parentesco_beneficiario3" name="parentesco_beneficiario3"
                                                        placeholder="parentesco . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">Discapacidad beneficiario</label>
                                                    <input class="form-control" id="discapacidad_beneficiario3" name="discapacidad_beneficiario3"
                                                        placeholder="discapacidad . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-5 form-group">
                                                    <label for="">Descripcion de discapacidad</label>
                                                    <input class="form-control" id="descripcion_discapacidad3" name="descripcion_discapacidad3"
                                                        placeholder="descripcion . . ." value="" type="text">
                                                </div>



                                            </div>
                                            <hr>
                                            <h4>Beneficiario #4</h4>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label for="">Nombre Beneficiario #1</label>
                                                    <input class="form-control" id="nombre_beneficiario4" name="nombre_beneficiario4"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="">sexo beneficiario</label>
                                                    <select class='form-control custom-select d-block w-100' name="sexo_beneficiario4"
                                                        id='sexo_beneficiario4'>
                                                        <option value="MASCULINO">MASCULINO</option>
                                                        <option value="FEMENINO">FEMENINO</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Documento beneficiario</label>
                                                    <input class="form-control" id="documento_beneficiario4" name="documento_beneficiario4"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">parentesco beneficiario</label>
                                                    <input class="form-control" id="parentesco_beneficiario4" name="parentesco_beneficiario4"
                                                        placeholder="parentesco . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">Discapacidad beneficiario</label>
                                                    <input class="form-control" id="discapacidad_beneficiario4" name="discapacidad_beneficiario4"
                                                        placeholder="discapacidad . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-5 form-group">
                                                    <label for="">Descripcion de discapacidad</label>
                                                    <input class="form-control" id="descripcion_discapacidad4" name="descripcion_discapacidad4"
                                                        placeholder="descripcion . . ." value="" type="text">
                                                </div>



                                            </div>
                                            <hr>

                                        </form>
                                    </div>
                                </div>
                            </section>

                            <!-------------------------------------------------------->
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-user"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Afiliados</span>
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-xl-12 mb-20">
                                        <form>
                                            <h4>Afiliado #1</h4>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label for="">Nombre Afiliado #1</label>
                                                    <input class="form-control" id="nombre_Afiliado1" name="nombre_Afiliado1"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="">sexo Afiliado</label>
                                                    <select class='form-control custom-select d-block w-100' name="sexo_Afiliado1"
                                                        id='extracto'>
                                                        <option value="MASCULINO">MASCULINO</option>
                                                        <option value="FEMENINO">FEMENINO</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Documento Afiliado</label>
                                                    <input class="form-control" id="documento_Afiliado1" name="documento_Afiliado1"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">parentesco Afiliado</label>
                                                    <input class="form-control" id="parentesco_Afiliado1" name="parentesco_Afiliado1"
                                                        placeholder="parentesco . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">Discapacidad Afiliado</label>
                                                    <input class="form-control" id="discapacidad_Afiliado1" name="discapacidad_Afiliado1"
                                                        placeholder="discapacidad . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-5 form-group">
                                                    <label for="">Descripcion de discapacidad</label>
                                                    <input class="form-control" id="descripcion_discapacidad" name="descripcion_discapacidad"
                                                        placeholder="descripcion . . ." value="" type="text">
                                                </div>



                                            </div>
                                            <hr>
                                            <h4>Afiliado #2</h4>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label for="">Nombre Afiliado #2</label>
                                                    <input class="form-control" id="nombre_Afiliado2" name="nombre_Afiliado2"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="">sexo Afiliado</label>
                                                    <select class='form-control custom-select d-block w-100' name="sexo_Afiliado2"
                                                        id='sexo_Afiliado2'>
                                                        <option value="MASCULINO">MASCULINO</option>
                                                        <option value="FEMENINO">FEMENINO</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Documento Afiliado</label>
                                                    <input class="form-control" id="documento_Afiliado2" name="documento_Afiliado2"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">parentesco Afiliado</label>
                                                    <input class="form-control" id="parentesco_Afiliado2" name="parentesco_Afiliado2"
                                                        placeholder="parentesco . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">Discapacidad Afiliado</label>
                                                    <input class="form-control" id="discapacidad_Afiliado2" name="discapacidad_Afiliado2"
                                                        placeholder="discapacidad . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-5 form-group">
                                                    <label for="">Descripcion de discapacidad</label>
                                                    <input class="form-control" id="descripcion_discapacidad2" name="descripcion_discapacidad2"
                                                        placeholder="descripcion . . ." value="" type="text">
                                                </div>

                                            </div>
                                            <hr>
                                        </form>
                                    </div>
                                </div>
                            </section>

                            <!-------------------------------------------------------->
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-user"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Enfermedades</span>
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-xl-12 mb-20">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-2 form-group">
                                                    <label for=''>Hipertension:</label>
                                                    <select class='form-control custom-select d-block w-100' name="Hipertension"
                                                        id='Hipertension'>
                                                        <option value="NO">No</option>
                                                        <option value="SI">Si</option>

                                                    </select>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for=''>Diabetes:</label>
                                                    <select class='form-control custom-select d-block w-100' name="diabetes"
                                                        id='diabetes'>
                                                        <option value="NO">No</option>
                                                        <option value="SI">Si</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for=''>Enfer cardiacas:</label>
                                                    <select class='form-control custom-select d-block w-100' name="cardiacas"
                                                        id='cardiacas'>
                                                        <option value="NO">No</option>
                                                        <option value="SI">Si</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for=''>Estres:</label>
                                                    <select class='form-control custom-select d-block w-100' name="estres"
                                                        id='estres'>
                                                        <option value="NO">No</option>
                                                        <option value="SI">Si</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for=''>Osteoporosis:</label>
                                                    <select class='form-control custom-select d-block w-100' name="osteoporosis"
                                                        id='osteoporosis'>
                                                        <option value="NO">No</option>
                                                        <option value="SI">Si</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for=''>Artitris:</label>
                                                    <select class='form-control custom-select d-block w-100' name="artritis"
                                                        id='artritis'>
                                                        <option value="NO">No</option>
                                                        <option value="SI">Si</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for=''>Cancer:</label>
                                                    <select class='form-control custom-select d-block w-100' name="cancer"
                                                        id='cancer'>
                                                        <option value="NO">No</option>
                                                        <option value="SI">Si</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for=''>Alergias:</label>
                                                    <select class='form-control custom-select d-block w-100' name="alergias"
                                                        id='alergias'>
                                                        <option value="NO">No</option>
                                                        <option value="SI">Si</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for=''>migraña:</label>
                                                    <select class='form-control custom-select d-block w-100' name="migrana"
                                                        id='migrana'>
                                                        <option value="NO">No</option>
                                                        <option value="SI">Si</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for=''>Ets:</label>
                                                    <select class='form-control custom-select d-block w-100' name="ets"
                                                        id='ets'>
                                                        <option value="NO">No</option>
                                                        <option value="SI">Si</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for=''>Anemia:</label>
                                                    <select class='form-control custom-select d-block w-100' name="Anemia"
                                                        id='Anemia'>
                                                        <option value="NO">No</option>
                                                        <option value="SI">Si</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for=''>Pulmonia:</label>
                                                    <select class='form-control custom-select d-block w-100' name="pulmonia"
                                                        id='pulmonia'>
                                                        <option value="NO">No</option>
                                                        <option value="SI">Si</option>
                                                    </select>
                                                </div>


                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </section>
                            <!-------------------------------------------------------->
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-user"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Documento</span>
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-xl-12">
                                                <section class="hk-sec-wrapper">
                                                    <h5 class="hk-sec-title">Documento original</h5>
                                                    <p class="mb-40">Sube el documento en version pdf y word </p>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <form>
                                                                <div class="form-group">
                                                                    <div class="fileinput fileinput-new input-group"
                                                                        data-provides="fileinput">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">Subir</span>
                                                                        </div>
                                                                        <div class="form-control text-truncate"
                                                                            data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                                            <span class="fileinput-filename"></span></div>
                                                                        <span class="input-group-append">
                                                                            <span class=" btn btn-primary btn-file"><span
                                                                                    class="fileinput-new">Selecciona el archivo</span><span
                                                                                    class="fileinput-exists">Cambiar</span>
                                                                                <input type="file" name="...">
                                                                            </span>
                                                                            <a href="#" class="btn btn-secondary fileinput-exists"
                                                                                data-dismiss="fileinput">Eliminar</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </section>
                                    </div>
                                </div>
                            </section>


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
    <script src="<?php echo JS_SERVER.'cliente/form-wizard-data_afiliados.js'; ?>"></script>
    <script src="<?php echo JS_SERVER.'directory.js';  ?>"></script>
    <script src="<?php echo JS_SERVER.'app.js';  ?>"></script>
    <script src="<?php echo JS_SERVER.'cliente/module.js';  ?>"></script>
    <script src="<?php echo DIST_PANGONG_SERVER.'js/daterangepicker-data.js';  ?>"></script>
    <!-- /App Libs -->
</body>

</html>