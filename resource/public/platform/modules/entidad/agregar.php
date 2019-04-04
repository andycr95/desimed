<?php session_start();

 /* Ruta del archivo de configuracion principal*/
 require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
 /* Rutas del directorio de controller */
 require_once(PROVIDER_PATH."clienteController.php");
 require_once(PROVIDER_PATH."entidadController.php");
  /* Ruta del archivo de sesion*/
 require_once(CONFIGURATION_PATH."session.php");

 session::verificarSesion($_SESSION['idsesion']);

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <!-- head -->
    <?php  require_once("../../global/layouts/head.php");  ?>
    <!-- head -->
</head>

<body>

    <input type="hidden" value="<?php echo $_SESSION['idsesion'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['nombre'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['foto'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['idciudad'];   ?>" />
    <input type="hidden" value="<?php echo $_SESSION['rol'];   ?>" />
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
        <div class="hk-pg-wrapper bg-white" style="min-height: 587px;">
            <!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15 ">
                <div class="hk-pg-header align-items-top">
                    <div>
                        <h2 class="hk-pg-title font-weight-600 mb-10">Listado de Pagadurias registrados.</h2>
                    </div>
                </div>
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-inline">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <a href="<?php echo  PLATFORM_SERVER." modules/pagadurias/agregar.php";
                                                        ?>" target="_self" class="btn btn-gradient-info mb-2 btn-sm"><i
                                                            class="fa fa-user-plus "></i> Crear
                                                        nueva pagaduria</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section class="hk-sec-wrapper">
                                    <h5 class="hk-sec-title">Default Layout</h5>
                                    <p class="mb-25">More complex forms can be built using the grid classes. Use these
                                        for form layouts that require multiple columns, varied widths, and additional
                                        alignment options.</p>
                                    <div class="row">
                                        <div class="col-sm">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="firstName">First name</label>
                                                        <input class="form-control" id="firstName" placeholder="" value=""
                                                            type="text">
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label for="lastName">Last name</label>
                                                        <input class="form-control" id="lastName" placeholder="" value=""
                                                            type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">@</span>
                                                        </div>
                                                        <input class="form-control" id="username" placeholder="Username"
                                                            type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input class="form-control" id="email" placeholder="you@example.com"
                                                        type="email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">Password</label>
                                                    <input class="form-control" id="password" placeholder="Password"
                                                        type="password">
                                                </div>

                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input class="form-control" id="address" placeholder="1234 Main St"
                                                        type="text">
                                                </div>

                                                <div class="form-group">
                                                    <label for="input_tags">Tags</label>
                                                    <select id="input_tags" class="form-control select2-hidden-accessible"
                                                        multiple="" data-select2-id="input_tags" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option selected="selected" data-select2-id="2">orange</option>
                                                        <option>white</option>
                                                        <option selected="selected" data-select2-id="3">purple</option>
                                                    </select><span class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="1" style="width: 1068px;"><span
                                                            class="selection"><span class="select2-selection select2-selection--multiple"
                                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                                tabindex="-1">
                                                                <ul class="select2-selection__rendered">
                                                                    <li class="select2-selection__choice" title="orange"
                                                                        data-select2-id="4"><span class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>orange</li>
                                                                    <li class="select2-selection__choice" title="purple"
                                                                        data-select2-id="5"><span class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>purple</li>
                                                                    <li class="select2-search select2-search--inline"><input
                                                                            class="select2-search__field" type="search"
                                                                            tabindex="0" autocomplete="off" autocorrect="off"
                                                                            autocapitalize="none" spellcheck="false"
                                                                            role="textbox" aria-autocomplete="list"
                                                                            placeholder="" style="width: 0.75em;"></li>
                                                                </ul>
                                                            </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input_tags">Date range</label>
                                                    <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018">
                                                </div>

                                                <div class="form-group">
                                                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                                                    <input class="form-control" id="address2" placeholder="Apartment or suite"
                                                        type="text">
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-5 mb-10">
                                                        <label for="country">Country</label>
                                                        <select class="form-control custom-select d-block w-100" id="country">
                                                            <option value="">Choose...</option>
                                                            <option>United States</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-10">
                                                        <label for="state">State</label>
                                                        <select class="form-control custom-select d-block w-100" id="state">
                                                            <option value="">Choose...</option>
                                                            <option>California</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 mb-10">
                                                        <label for="zip">Zip</label>
                                                        <input class="form-control" id="zip" placeholder="" type="text">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="custom-control custom-checkbox mb-15">
                                                    <input class="custom-control-input" id="same-address" type="checkbox"
                                                        checked="">
                                                    <label class="custom-control-label" for="same-address">Shipping
                                                        address is the same as my billing address</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="save-info" type="checkbox">
                                                    <label class="custom-control-label" for="save-info">Save this
                                                        information for next time</label>
                                                </div>
                                                <hr>

                                                <h6 class="form-group">Payment</h6>

                                                <div class="d-block mt-20 mb-30">
                                                    <div class="custom-control custom-radio mb-10">
                                                        <input id="credit" name="paymentMethod" class="custom-control-input"
                                                            checked="" type="radio">
                                                        <label class="custom-control-label" for="credit">Credit card</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-10">
                                                        <input id="debit" name="paymentMethod" class="custom-control-input"
                                                            type="radio">
                                                        <label class="custom-control-label" for="debit">Debit card</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input id="paypal" name="paymentMethod" class="custom-control-input"
                                                            type="radio">
                                                        <label class="custom-control-label" for="paypal">PayPal</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="cc-name">Name on card</label>
                                                        <input class="form-control" id="cc-name" placeholder="" type="text">
                                                        <small class="form-text text-muted">Full name as displayed on
                                                            card</small>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label for="cc-number">Credit card number</label>
                                                        <input class="form-control" id="cc-number" placeholder=""
                                                            data-mask="9999-9999-9999-9999" type="text">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 form-group">
                                                        <label for="cc-expiration">Expiration</label>
                                                        <input class="form-control" id="cc-expiration" placeholder=""
                                                            data-mask="99-99" type="text">
                                                        <div class="invalid-feedback">
                                                            Expiration date required
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 form-group">
                                                        <label for="cc-cvv">CVV</label>
                                                        <input class="form-control" id="cc-cvv" data-mask="999"
                                                            placeholder="" type="text">
                                                    </div>
                                                </div>
                                                <hr>
                                                <button class="btn btn-primary" type="submit">Continue to checkout</button>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                            </div>
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
    <script src="<?php echo JS_SERVER.'pagaduria/module.js';  ?>"></script>
    <!-- /App Libs -->



</body>

</html>