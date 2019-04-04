<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/credito/config/directory.php');
include_once(PERSISTENCE_PATH."usuarioDao.php");
include_once(PERSISTENCE_PATH."sesionDao.php");
include_once(PERSISTENCE_PATH."sucursalDao.php");
include_once(PERSISTENCE_PATH."funcionesDao.php");


?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Platform cooservipres</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- vector map CSS -->
    <!-- <link href="<?php //echo  $RouteVendorApp.'plugins/vectormap/jquery-jvectormap-2.0.3.css'; ?>" rel="stylesheet" type="text/css" /> -->

    <!-- jquery-steps css -->
    <link rel="stylesheet" href="<?php echo  $RouteVendorApp.'plugins/jquery-steps/demo/css/jquery.steps.css'; ?>">

    <!-- Toggles CSS -->
    <link href="<?php echo  $RouteVendorApp.'plugins/jquery-toggles/css/toggles.css'; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo  $RouteVendorApp.'plugins/jquery-toggles/css/themes/toggles-light.css'; ?>" rel="stylesheet"
        type="text/css">

    <!-- Toastr CSS -->
    <!-- <link href="<?php //echo  $RouteVendorApp.'plugins/jquery-toast-plugin/dist/jquery.toast.min.css'; ?>" rel="stylesheet"
        type="text/css"> -->

    <!-- Custom CSS -->
    <link href="<?php echo  $RouteVendorApp.'dist_pangong/css/style.css'; ?>" rel="stylesheet" type="text/css">

    <!-- <style>
        .fondo {
            background-image: url("../../../assets/cooservipress/img/bg-img-1.jpg");
            height: 500px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            
         }
    </style> -->
</head>

<body>
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
        <div class="hk-pg-wrapper" style="min-height: 636px;">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Wizard</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div id="example-basic" role="application" class="wizard clearfix"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="example-basic-t-0" href="#example-basic-h-0" aria-controls="example-basic-p-0"><span class="current-info audible">current step: </span>
								<span class="wizard-icon-wrap"><i class="ion ion-md-basket"></i></span>
								<span class="wizard-head-text-wrap">
									<span class="step-head">Review Cart</span>
								</span>	
							</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="example-basic-t-1" href="#example-basic-h-1" aria-controls="example-basic-p-1">
								<span class="wizard-icon-wrap"><i class="ion ion-md-airplane"></i></span>
								<span class="wizard-head-text-wrap">
									<span class="step-head">Shipping Address</span>
								</span>	
							</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="example-basic-t-2" href="#example-basic-h-2" aria-controls="example-basic-p-2">
								<span class="wizard-icon-wrap"><i class="ion ion-md-card"></i></span>
								<span class="wizard-head-text-wrap">
									<span class="step-head">Payment Method</span>
								</span>	
							</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="example-basic-t-3" href="#example-basic-h-3" aria-controls="example-basic-p-3">
								<span class="wizard-icon-wrap"><i class="ion ion-md-checkmark-circle-outline"></i></span>
								<span class="wizard-head-text-wrap">
									<span class="step-head">Place Order</span>
								</span>	
							</a></li></ul></div><div class="content clearfix">
                            <h3 id="example-basic-h-0" tabindex="-1" class="title current">
								<span class="wizard-icon-wrap"><i class="ion ion-md-basket"></i></span>
								<span class="wizard-head-text-wrap">
									<span class="step-head">Review Cart</span>
								</span>	
							</h3>
                            <section id="example-basic-p-0" role="tabpanel" aria-labelledby="example-basic-h-0" class="body current" aria-hidden="false">
                                <h3 class="display-4 mb-40">Shopping cart</h3>
                                <div class="row">
                                    <div class="col-xl-8 mb-20">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th colspan="2">Product</th>
                                                            <th>Price</th>
                                                            <th>Items</th>
                                                            <th>Total</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <td><img class="w-80p" src="dist/img/product-thumb1.png" alt="icon"></td>
                                                            <th scope="row">Apple iPhone8 - 32GB</th>
                                                            <td>$1240</td>
                                                            <td>
                                                                <input type="number" class="normal" value="1" min="0" max="100" step="10" style="display: none;"><div class="input-group input-group-sm w-100p"><div class="input-group-prepend"><button style="min-width: 2.5em" class="btn btn-decrement btn-outline-light" type="button"><strong>-</strong></button></div><input type="text" style="text-align: center" class="form-control"><div class="input-group-append"><button style="min-width: 2.5em" class="btn btn-increment btn-outline-light" type="button"><strong>+</strong></button></div></div>
                                                            </td>
                                                            <td class="text-dark">$1240</td>
                                                            <td>
                                                                <button type="button" class="close" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><img class="w-80p" src="dist/img/product-thumb3.png" alt="icon"></td>
                                                            <th scope="row">Xiaomi Redmi Note 4X - 32GB</th>
                                                            <td>$124</td>
                                                            <td>
                                                                <input type="number" class="normal" value="1" min="0" max="100" step="10" style="display: none;"><div class="input-group input-group-sm w-100p"><div class="input-group-prepend"><button style="min-width: 2.5em" class="btn btn-decrement btn-outline-light" type="button"><strong>-</strong></button></div><input type="text" style="text-align: center" class="form-control"><div class="input-group-append"><button style="min-width: 2.5em" class="btn btn-increment btn-outline-light" type="button"><strong>+</strong></button></div></div>
                                                            </td>
                                                            <td class="text-dark">$124</td>
                                                            <td>
                                                                <button type="button" class="close" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><img class="w-80p" src="dist/img/product-thumb2.png" alt="icon"></td>
                                                            <th scope="row">Smart Baby Watch Q80</th>
                                                            <td>$455</td>
                                                            <td>
                                                                <input type="number" class="normal" value="1" min="0" max="100" step="10" style="display: none;"><div class="input-group input-group-sm w-100p"><div class="input-group-prepend"><button style="min-width: 2.5em" class="btn btn-decrement btn-outline-light" type="button"><strong>-</strong></button></div><input type="text" style="text-align: center" class="form-control"><div class="input-group-append"><button style="min-width: 2.5em" class="btn btn-increment btn-outline-light" type="button"><strong>+</strong></button></div></div>
                                                            </td>
                                                            <td class="text-dark">$455</td>
                                                            <td>
                                                                <button type="button" class="close" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="2">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control filled-input" placeholder="Enter coupon code">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-primary" type="button">Apply</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right" colspan="2"><small class="pr-5 text-muted font-weight-500">Discount:</small><span class="text-dark font-weight-500">$15</span></td>
                                                            <td class="text-right" colspan="2"><small class="pr-5 text-muted font-weight-500">Sub Total:</small><span class="text-dark font-weight-500">$859</span></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 mb-20">
                                        <div class="card">
                                            <h6 class="card-header border-0">
												<i class="ion ion-md-clipboard font-21 mr-10"></i>Summary
											</h6>
                                            <div class="card-body pa-0">
                                                <div class="table-wrap">
                                                    <div class="table-responsive">
                                                        <table class="table table-sm mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="w-70" scope="row">Sub Total</th>
                                                                    <th class="w-30" scope="row">$859</th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="w-70">Offers Discount</td>
                                                                    <td class="w-30">$89</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="w-70">Packging charges</td>
                                                                    <td class="w-30">$8</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="w-70">Tax</td>
                                                                    <td class="w-30">18%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="w-70 text-success">Delivery charges</td>
                                                                    <td class="w-30 text-success">Free</td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr class="bg-light">
                                                                    <th class="text-dark text-uppercase" scope="row">To Pay</th>
                                                                    <th class="text-dark font-18" scope="row">$1245</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3 id="example-basic-h-1" tabindex="-1" class="title">
								<span class="wizard-icon-wrap"><i class="ion ion-md-airplane"></i></span>
								<span class="wizard-head-text-wrap">
									<span class="step-head">Shipping Address</span>
								</span>	
							</h3>
                            <section id="example-basic-p-1" role="tabpanel" aria-labelledby="example-basic-h-1" class="body" aria-hidden="true" style="display: none;">
                                <h3 class="display-4 mb-40">Select a delivery address</h3>
                                <div class="row">
                                    <div class="col-xl-4 mb-20">
                                        <p class="mb-10">Donec at sapien aliquet nulla vulputate posuere. Ut sagittis nisl non tristique consectetur. Nullam et est orci.</p>
                                        <p><a href="#">Ubique veritus mediocrem</a> Aliquam luctus viverra enim, ut dapibus nunc condimentum tempor.</p>
                                        <div class="card mt-30">
                                            <div class="card-body bg-light">
                                                <h5 class="card-title">Madalyn Shane</h5>
                                                <p class="card-text">1234 Main St xyz, Sacremento, 12 Riverside Drive Redding, Union Street, CA-961001, US</p>
                                                <a href="#" class="btn btn-block btn-primary">Deliver here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 mb-20">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="firstName">First name</label>
                                                    <input class="form-control" id="firstName" placeholder="" value="Madalyn" type="text">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="lastName">Last name</label>
                                                    <input class="form-control" id="lastName" placeholder="" value="Shane" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">@</span>
                                                    </div>
                                                    <input class="form-control" id="username" placeholder="Username" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" id="email" placeholder="you@example.com" type="email">
                                            </div>

                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input class="form-control" id="address" placeholder="1234 Main St" value="1234 Main St xyz" type="text">
                                            </div>

                                            <div class="form-group">
                                                <label for="address">Address 2(Optional)</label>
                                                <input class="form-control" id="address2" placeholder="1234 Main St" type="text">
                                            </div>

                                            <div class="row">
                                                <div class="col-md-5 mb-10">
                                                    <label for="country">Country</label>
                                                    <select class="form-control custom-select d-block w-100" id="country">
                                                        <option value="">Choose...</option>
                                                        <option selected="">United States</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 mb-10">
                                                    <label for="state">State</label>
                                                    <select class="form-control custom-select d-block w-100" id="state">
                                                        <option value="">Choose...</option>
                                                        <option selected="">California</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-10">
                                                    <label for="zip">Zip</label>
                                                    <input class="form-control" id="zip" value="19100" type="text">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="same-address" type="checkbox" checked="">
                                                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="save-info" type="checkbox">
                                                <label class="custom-control-label" for="save-info">Save this information for next time</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                            <h3 id="example-basic-h-2" tabindex="-1" class="title">
								<span class="wizard-icon-wrap"><i class="ion ion-md-card"></i></span>
								<span class="wizard-head-text-wrap">
									<span class="step-head">Payment Method</span>
								</span>	
							</h3>
                            <section id="example-basic-p-2" role="tabpanel" aria-labelledby="example-basic-h-2" class="body" aria-hidden="true" style="display: none;">
                                <h3 class="display-4 mb-40">Choose payment method</h3>
                                <div class="row">
                                    <div class="col-xl-5 mb-20">
                                        <p>The most common alternative payment methods are debit cards, charge cards, prepaid cards, direct debit, bank transfers, phone and mobile payments, checks, money orders and cash payments.</p>
                                        <ul class="nav nav-tabs mt-30 mb-25">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Card payment</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled" href="#">Netbanking</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled" href="#">Paypal</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active">
                                                <h6 class="my-15"><i class="ion ion-md-card text-grey pr-10"></i>Stored card</h6>
                                                <div class="card bg-light">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between mb-25">
                                                            <span class="font-14 d-block font-weight-600 text-uppercase mb-10">Mastercard</span>
                                                            <img src="dist/img/mastercard.png" alt="card">
                                                        </div>
                                                        <span class="d-block text-dark font-20 letter-spacing-20 font-weight-600 ">5678 **** **** 4321</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 mb-20">
                                        <form>
                                            <div class="d-flex align-items-center mb-30">
                                                <span class="font-12 pr-15 text-dark text-uppercase font-weight-600">We accept</span>
                                                <img class="mr-15" src="dist/img/card-visa.png" alt="card">
                                                <img class="mr-15" src="dist/img/card-mc.png" alt="card">
                                                <img src="dist/img/card-ae.png" alt="card">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="cc-name">Name on card</label>
                                                    <input class="form-control" id="cc-name" placeholder="" type="text">
                                                    <small class="form-text text-muted">Full name as displayed on card</small>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label for="cc-number">Credit card number</label>
                                                    <input class="form-control" id="cc-number" placeholder="" data-mask="9999-9999-9999-9999" type="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label for="cc-expiration">Expiry</label>
                                                    <input class="form-control" id="cc-expiration" placeholder="" data-mask="99-99" type="text">
                                                    <div class="invalid-feedback">
                                                        Expiration date required
                                                    </div>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label for="cc-cvv">CVV</label>
                                                    <input class="form-control" id="cc-cvv" data-mask="999" placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="custom-control custom-checkbox checkbox-success mb-15">
                                                <input class="custom-control-input" id="same-card" type="checkbox" checked="">
                                                <label class="custom-control-label" for="same-card">Securely save this card for faster checkout next time</label>
                                            </div>
                                            <button class="btn btn-primary btn-block" type="submit">Pay $431</button>
                                            <small class="form-text text-muted">Card details will be saved securely as per industry standard</small>
                                        </form>
                                    </div>
                                </div>
                            </section>
                            <h3 id="example-basic-h-3" tabindex="-1" class="title">
								<span class="wizard-icon-wrap"><i class="ion ion-md-checkmark-circle-outline"></i></span>
								<span class="wizard-head-text-wrap">
									<span class="step-head">Place Order</span>
								</span>	
							</h3>
                            <section id="example-basic-p-3" role="tabpanel" aria-labelledby="example-basic-h-3" class="body" aria-hidden="true" style="display: none;">
                                <h3 class="display-4 mb-40">Order summary</h3>
                                <div class="row">
                                    <div class="col-xl-8 mb-20">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table table-sm mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="w-70" scope="row">Sub Total</th>
                                                            <th class="w-30" scope="row">$859</th>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-70">Offers Discount</td>
                                                            <td class="w-30">$89</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-70">Packging charges</td>
                                                            <td class="w-30">$8</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-70">Tax</td>
                                                            <td class="w-30">18%</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-70 text-success">Delivery charges</td>
                                                            <td class="w-30 text-success">Free</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="bg-light">
                                                            <th class="text-dark text-uppercase" scope="row">To Pay</th>
                                                            <th class="text-dark font-18" scope="row">$1245</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <textarea class="form-control mt-35" rows="2" placeholder="Any suggestions? We will pass it on.."></textarea>
                                    </div>
                                    <div class="col-xl-4 mb-20">
                                        <div class="alert alert-success mb-20" role="alert">
                                            You have saved $133 on the bill.
                                        </div>
                                        <p class="mb-10">Prime shipping benifits have been applied to your order. Rewards points will be charged when you placed your order.</p>
                                        <a class="d-block mb-25" href="#">How are shipping cost calculated?</a>
                                        <button class="btn btn-primary btn-block mb-10" type="submit">Place your order</button>
                                        <small class="d-block text-center">By placing your order, you agree to our <a href="#">terms and conditions</a> to use.</small>
                                    </div>
                                </div>
                            </section>
                        </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->

            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
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