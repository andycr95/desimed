<!-- Main Content -->
<div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="<?php echo PLATFORM_SERVER."modules/usuarios/index.php"; ?>">Usuarios</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Agregar usuarios</li>
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
                                    <span class="step-head">Informacion basica de contacto</span>
                                </span>
                            </h3>
                            <section>
                                <h3 class="display-4 mb-40">Formulario de registro</h3>
                                <div class="row">
                                    <div class="col-xl-4 mb-20">
                                        <p class="mb-10 text-justify">Los usuarios registrados podrar usar las
                                            diferentes caracteristicas del software dependiendo del rol que se le sea
                                            asignado en la plataforma.</p>
                                        <div class="card mt-30">
                                            <div class="card-body bg-light">
                                                <h5 class="card-title">A tener en cuenta:</h5>
                                                <p class="card-text">los campos que poseen un * significa que son
                                                    obligatorios rellenarlos .</p>
                                                <!-- <a href="#" class="btn btn-block btn-primary">Deliver here</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 mb-20">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="nombreFormUsuario">Nombre completo</label>
                                                    <input class="form-control" id="nombreFormUsuario" placeholder="nombre . . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="documentoFormUsuario">Documento de identificacion</label>
                                                    <input class="form-control" id="documentoFormUsuario" placeholder="documento . . ."
                                                        value="" type="text">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="direccionFormUsuario">direccion de residencia</label>
                                                    <input class="form-control" id="direccionFormUsuario" placeholder="direccion . . ."
                                                        value="" type="text">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="telefonoFormUsuario">telefono de contacto</label>
                                                    <input class="form-control" id="telefonoFormUsuario" placeholder="telefono . . ."
                                                        value="" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <?php $objSucursal->selectSucursal(); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Correo electronico</label>
                                                <input class="form-control" id="emailFormUsuario" placeholder="you@example.com"
                                                    type="email">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </section>
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-shield"></i></span>
                                <span class="wizard-head-text-wrap">
                                    <span class="step-head">Informacion de sesion</span>
                                </span>
                            </h3>
                            <section>
                                <h3 class="display-4 mb-40">Validar informacion</h3>
                                <div class="row">
                                    <div class="col-xl-5 mb-20">
                                        <p>A continuacion necesitamos registrar y verificar tu usuario que usuaras en
                                            la plataforma.</p>

                                        <div class="tab-content">
                                            <div class="tab-pane fade show active">
                                                <h6 class="my-15"><i class="fa fa-user-plus fa-2x text-grey pr-10"></i>Como
                                                    formar mi usuario en la plataforma</h6>
                                                <div class="card bg-light">
                                                    <div class="card-body">

                                                        <div class="d-flex justify-content-between mb-25">
                                                            <span class="font-14 d-block font-weight-600 text-uppercase mb-10">Ejemplos</span>
                                                            <span class="wizard-icon-wrap"><i class="fa fa-shield fa-3x"></i></span>
                                                        </div>

                                                        <p class="d-block text-dark font-16  text-justify">Utiliza
                                                            cualquiere de los tipo de usuarios que puedes crear.<br>
                                                            Ejemplo : <strong>E-mail Mac2394q@gmail.com<br>
                                                                Nick mac2394q<br>
                                                                Documento 1111797509<br>
                                                            </strong>
                                                        </p>

                                                        <div class="d-flex justify-content-between mb-25">
                                                            <span class="font-14 d-block font-weight-600 text-uppercase mb-10"></span>

                                                        </div>
                                                        <p class="d-block text-dark font-16  text-justify">Utiliza
                                                            letras mayusculas o minusculas al principio de tu usuario
                                                            ademas de combinar caracteres alfanumericos.<br>
                                                            Ejemplo <strong> Mac2394q o mac2394q</strong></p>

                                                        <div class="d-flex justify-content-between mb-25">
                                                            <span class="font-14 d-block font-weight-600 text-uppercase mb-10"></span>

                                                        </div>
                                                        <p class="d-block text-dark font-16  text-justify">Puedes
                                                            utilizar tu correo electronico para validar tu usuario en
                                                            la plataforma.<br>
                                                            Ejemplo :<strong> Mac2394q@gmail.com<br>
                                                                mac2394q@hotmail.com<br>
                                                                Mac2394q@outlook.es<br>
                                                                mac2394q@yahoo.com
                                                            </strong>
                                                        </p>

                                                        <div class="d-flex justify-content-between mb-25">
                                                            <span class="font-14 d-block font-weight-600 text-uppercase mb-10"></span>

                                                        </div>
                                                        <p class="d-block text-dark font-16  text-justify">Si el
                                                            usuario nick o correo electronico ya esta registrado no le
                                                            permitira registrarlo de nuevo ,en ese caso debe elegir
                                                            otro.<br></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 mb-20">
                                        <form>
                                            <div class="d-flex align-items-center mb-30">
                                                <span class="font-12 pr-15 text-dark text-uppercase font-weight-600">Tipos
                                                    de usuario aceptados:</span>
                                                Documento&nbsp; <i class="fa fa-credit-card   fa-2x text-grey pr-10"></i>&nbsp;&nbsp;
                                                E-mail&nbsp; <i class="fa fa-envelope fa-2x text-grey pr-10"></i>&nbsp;&nbsp;
                                                Nick&nbsp; <i class="fa fa-universal-access fa-2x text-grey pr-10"></i>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="usuarioFormUsuario">Usuario</label>
                                                    <input class="form-control" id="usuarioFormUsuario" placeholder=""
                                                        type="text" name="usuarioFormUsuario">
                                                    <small class="form-text text-muted">Ten en cuenta las sugerencias a
                                                        la hora de registrar tu usuario</small>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label for="claveFormUsuario">Clave de seguridad</label>
                                                    <input class="form-control" id="claveFormUsuario" placeholder=""
                                                        type="password">
                                                    <small class="form-text text-muted">Recuerda combinar numeros
                                                        ,letras ,mayusculas y minusculas para mayor proteccion.</small>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <?php $objrolFunciones->selectRoles(); ?>
                                                </div>

                                                <div class="form-group col-md-12">
                                                <label for="usuarioFormUsuario">Imagen de perfil del usuario</label>
                                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Subir imagen de perfil</span>
                                                        </div>
                                                        <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                                class="glyphicon glyphicon-file fileinput-exists"></i>
                                                            <span class="fileinput-filename"></span></div>
                                                        <span class="input-group-append">
                                                            <span class=" btn btn-primary btn-file"><span class="fileinput-new">Seleccionar foto</span><span class="fileinput-exists">Cambiar</span>
                                                                <input type="file" name="..." id="perfilFormUsuario">
                                                            </span>
                                                            <a href="#" class="btn btn-secondary fileinput-exists"
                                                                data-dismiss="fileinput">Remover</a>
                                                        </span>
                                                    </div>
                                                    <small class="form-text text-muted">Recuerda que la foto sera usada como identificacion dentro de tu perfil en la plataforma</small>
                                                </div>
                                                

                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </section>
                            <h3>
                                <span class="wizard-icon-wrap"><i class="fa fa-exclamation"></i></span>
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
                                                            <th class="w-70" scope="row">*Nombre completo</th>
                                                            <td class="w-40" scope="row"><input type="text" id="nombreU"
                                                                    value="" readonly /></td>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="w-70" scope="row">Documento</th>
                                                            <td class="w-30"><input type="text" id="documentoU" value=""
                                                                    readonly /></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w-70" scope="row">Telefono</th>
                                                            <td class="w-30"><input type="text" id="telefonoU" value=""
                                                                    readonly /></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w-70" scope="row">Direccion</th>
                                                            <td class="w-30"><input type="text" id="direccionU" value=""
                                                                    readonly /></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w-70" scope="row">*E-mail</th>
                                                            <td class="w-30"><input type="text" id="emailU" value=""
                                                                    readonly /></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w-70" scope="row">*Usuario</th>
                                                            <td class="w-30"><input type="text" id="usuarioU" value=""
                                                                    readonly /></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w-70" scope="row">*Clave</th>
                                                            <td class="w-30"><input type="text" id="claveU" value=""
                                                                    readonly /></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w-70" scope="row">*Rol asignado</th>
                                                            <td class="w-30"><input type="text" id="rolU" value=""
                                                                    readonly /></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w-70" scope="row">*Sucursal</th>
                                                            <td class="w-30"><input type="text" id="sucursalU" value=""
                                                                    readonly /></td>
                                                            </td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 mb-20">
                                        <div class="alert alert-success mb-20" role="alert">
                                            FOTO imagen 100x100
                                        </div>
                                        <p class="mb-10">Recuerda llenar todos los campos que posean un * ,si la informacion ingresada es correcta por favor oprime finalizar sino regresa y modifica la informacion ingresada.</p>
                                        <small class="d-block text-center"></small>
                                    </div>
                                </div>
                            </section>
                        </div>
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