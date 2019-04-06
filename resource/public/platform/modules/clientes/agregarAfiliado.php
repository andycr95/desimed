<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
include_once(PROVIDER_PATH."sesionController.php");
include_once(PROVIDER_PATH."empleadoController.php");
  /* Ruta del archivo de sesion*/
  require_once(CONFIGURATION_PATH."session.php");
  require_once(PROVIDER_PATH."clienteController.php");
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
                                            <div class="col-md-4 form-group">
                                                    <label for="nombre_apellido">Nombre completo</label>
                                                    <input class="form-control" id="nombre_apellido" name="nombre_apellido"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for='country'>Asesora:</label>
                                                    <?php empleadoController::selectAsesoras(); ?>
                                                </div>
                                                
                                                <div class="col-md-2 form-group">
                                                    <label for="documento">Documento </label>
                                                    <input class="form-control" id="documento" name="documento"
                                                        placeholder="documento. . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for='country'>Genero:</label>
                                                    <select class='form-control custom-select d-block w-100' name="sexo"
                                                        id='sexo'>
                                                        <option selected>Elige un tipo...</option>
                                                        <option value="Masculino">Masculino</option>
                                                        <option value="Femenino">Femenino</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="">Fecha de nacimiento</label>
                                                    <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="" type="text">
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
                                                    <input class="form-control" id="email" name="email" placeholder="E-mail. . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label for='country'>Discapacidad 'Descripcion':</label>
                                                    <textarea class="form-control mt-15" rows="5" cols="25" id="discapacidad"
                                                        name="discapacidad" placeholder="descripcion"></textarea>
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
                                                    <input class="form-control" id="nombre_beneficiario" name="nombre_beneficiario"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="">sexo beneficiario</label>
                                                    <select class='form-control custom-select d-block w-100' name="sexo_beneficiario"
                                                        id='extracto'>
                                                        <option value="MASCULINO">MASCULINO</option>
                                                        <option value="FEMENINO">FEMENINO</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Documento beneficiario</label>
                                                    <input class="form-control" id="documento_beneficiario" name="documento_beneficiario"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">parentesco beneficiario</label>
                                                    <input class="form-control" id="parentesco_beneficiario" name="parentesco_beneficiario"
                                                        placeholder="parentesco . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">Discapacidad beneficiario</label>
                                                    <input class="form-control" id="discapacidad_beneficiario" name="discapacidad_beneficiario"
                                                        placeholder="discapacidad . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-5 form-group">
                                                    <label for="">Descripcion de discapacidad</label>
                                                    <input class="form-control" id="discapacidad_desc_beneficiario" name="discapacidad_desc_beneficiario"
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
                                                    <input class="form-control" id="discapacidad_desc_beneficiario2" name="discapacidad_desc_beneficiario2"
                                                        placeholder="descripcion . . ." value="" type="text">
                                                </div>



                                            </div>
                                            <hr>
                                            <h4>Beneficiario #3</h4>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label for="">Nombre Beneficiario #3</label>
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
                                                    <input class="form-control" id="discapacidad_desc_beneficiario3" name="discapacidad_desc_beneficiario3"
                                                        placeholder="descripcion . . ." value="" type="text">
                                                </div>



                                            </div>
                                            <hr>
                                            <h4>Beneficiario #4</h4>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label for="">Nombre Beneficiario #4</label>
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
                                                    <input class="form-control" id="discapacidad_desc_beneficiario4" name="discapacidad_desc_beneficiario4"
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
                                                    <input class="form-control" id="nombre_afiliacion" name="nombre_afiliacion"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="">sexo Afiliado</label>
                                                    <select class='form-control custom-select d-block w-100' name="sexo_afiliacion"
                                                        id='extracto'>
                                                        <option value="MASCULINO">MASCULINO</option>
                                                        <option value="FEMENINO">FEMENINO</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Documento Afiliado</label>
                                                    <input class="form-control" id="documento_afiliacion" name="documento_afiliacion"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">parentesco Afiliado</label>
                                                    <input class="form-control" id="parentesco_afiliacion" name="parentesco_afiliacion"
                                                        placeholder="parentesco . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">Discapacidad Afiliado</label>
                                                    <input class="form-control" id="discapacidad_afiliacion" name="discapacidad_afiliacion"
                                                        placeholder="discapacidad . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-5 form-group">
                                                    <label for="">Descripcion de discapacidad</label>
                                                    <input class="form-control" id="discapacidad_desc_afiliacion" name="discapacidad_desc_afiliacion"
                                                        placeholder="descripcion . . ." value="" type="text">
                                                </div>



                                            </div>
                                            <hr>
                                            <h4>Afiliado #2</h4>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label for="">Nombre Afiliado #2</label>
                                                    <input class="form-control" id="nombre_afiliacion2" name="nombre_afiliacion2"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="">sexo Afiliado</label>
                                                    <select class='form-control custom-select d-block w-100' name="sexo_afiliacion2"
                                                        id='sexo_afiliacion2'>
                                                        <option value="MASCULINO">MASCULINO</option>
                                                        <option value="FEMENINO">FEMENINO</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="">Documento Afiliado</label>
                                                    <input class="form-control" id="documento_afiliacion2" name="documento_afiliacion2"
                                                        placeholder="nombre . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">parentesco Afiliado</label>
                                                    <input class="form-control" id="parentesco_afiliacion2" name="parentesco_afiliacion2"
                                                        placeholder="parentesco . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">Discapacidad Afiliado</label>
                                                    <input class="form-control" id="discapacidad_afiliacion2" name="discapacidad_afiliacion2"
                                                        placeholder="discapacidad . . ." value="" type="text">
                                                </div>
                                                <div class="col-md-5 form-group">
                                                    <label for="">Descripcion de discapacidad</label>
                                                    <input class="form-control" id="discapacidad_desc_afiliacion2" name="discapacidad_desc_afiliacion2"
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
                                                    <select class='form-control custom-select d-block w-100' name="hipertension"
                                                        id='hipertension'>
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
                                                    <select class='form-control custom-select d-block w-100' name="enf_cardiacas"
                                                        id='enf_cardiacas'>
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
                                                    <select class='form-control custom-select d-block w-100' name="artitis"
                                                        id='artitis'>
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
                                                    <select class='form-control custom-select d-block w-100' name="anemia"
                                                        id='anemia'>
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
                                                <div class="col-md-3 form-group">
                                                    <label for="">Otras, cual?</label>
                                                    <input class="form-control" id="otras_cual" name="otras_cual"
                                                        placeholder="nombre . . ." value="" type="text">
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
    <script src="<?php echo "//".JS_SERVER.'cliente/form-wizard-data_afiliados.js'; ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'directory.js';  ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'app.js';  ?>"></script>
    <script src="<?php echo "//".JS_SERVER.'cliente/module.js';  ?>"></script>
    <script src="<?php echo "//".DIST_PANGONG_SERVER.'js/daterangepicker-data.js';  ?>"></script>
    <!-- /App Libs -->
</body>

</html>