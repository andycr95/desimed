<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/credito/config/directory.php');
include_once(PERSISTENCE_PATH."usuarioDao.php");
include_once(PERSISTENCE_PATH."sesionDao.php");
include_once(PERSISTENCE_PATH."sucursalDao.php");
include_once(PERSISTENCE_PATH."funcionesDao.php");



// $data=Session::getInstance();
//  if(!$data->__isset("idsesion")){
//   header('Location: ../../../../mexpress');
//   exit;
// }

/**** var Implement ****************/
 $objSesionDao = new sesionDao();

// /**** var globals ****************/


// /**************var sesion*********/
$objId = $objSesionDao->sesionId($_SESSION['idsesion']);

$rol = $objId->getIdRolCategoria();

if( $rol == 2  ){
  $objAdminDao = new usuarioDao();
  $perfil =$objAdminDao->usuarioIdSesion($_SESSION['idsesion']);
  $idprofile = $_SESSION['idsesion'];
  $_SESSION['rol']=$rol;
  $_SESSION['idciudad']=$objAdminDao->usuarioCiudad($perfil->getidUsuario(),$perfil->getIdSucursal());


}
?>
<!DOCTYPE html>
<html lang="en">


<head>
<?php  include_once("layout/head.php");  ?>
        
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        
        <!--NAVBAR-->
        <!--===================================================-->
        <?php  include_once("layout/notificationbar/navBar.php");  ?>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Form Wizard</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
					<li><a href="#"><i class="demo-pli-home"></i></a></li>
					<li><a href="#">Forms</a></li>
					<li class="active">Form Wizard</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
					<div class="panel">
					    <div class="eq-height clearfix">
					        <div class="col-md-4 eq-box-md text-center box-vmiddle-wrap bord-hor">
					
					            <!-- Simple Promotion Widget -->
					            <!--===================================================-->
					            <div class="box-vmiddle pad-all">
					                <h3 class="text-main">Register Today</h3>
					                <div class="pad-ver">
					                    <i class="demo-pli-bag-coins icon-5x"></i>
					                </div>
					                <p class="pad-btn text-sm">Members get <span class="text-lg text-bold text-main">50%</span> more points, so register today and start earning points for savings on great rewards!</p>
					                <br>
					                <a class="btn btn-lg btn-primary" href="#">Learn More...</a>
					            </div>
					            <!--===================================================-->
					
					        </div>
					        <div class="col-md-8 eq-box-md eq-no-panel">
					
					            <!-- Main Form Wizard -->
					            <!--===================================================-->
					            <div id="demo-main-wz">
					
					                <!--nav-->
					                <ul class="row wz-step wz-icon-bw wz-nav-off mar-top">
					                    <li class="col-xs-3">
					                        <a data-toggle="tab" href="#demo-main-tab1">
					                            <span class="text-danger"><i class="demo-pli-information icon-2x"></i></span>
					                            <h5 class="mar-no">Account</h5>
					                        </a>
					                    </li>
					                    <li class="col-xs-3">
					                        <a data-toggle="tab" href="#demo-main-tab2">
					                            <span class="text-warning"><i class="demo-pli-male icon-2x"></i></span>
					                            <h5 class="mar-no">Profile</h5>
					                        </a>
					                    </li>
					                    <li class="col-xs-3">
					                        <a data-toggle="tab" href="#demo-main-tab3">
					                            <span class="text-info"><i class="demo-pli-home icon-2x"></i></span>
					                            <h5 class="mar-no">Address</h5>
					                        </a>
					                    </li>
					                    <li class="col-xs-3">
					                        <a data-toggle="tab" href="#demo-main-tab4">
					                            <span class="text-success"><i class="demo-pli-medal-2 icon-2x"></i></span>
					                            <h5 class="mar-no">Finish</h5>
					                        </a>
					                    </li>
					                </ul>
					
					                <!--progress bar-->
					                <div class="progress progress-xs">
					                    <div class="progress-bar progress-bar-primary"></div>
					                </div>
					
					
					                <!--form-->
					                <form class="form-horizontal">
					                    <div class="panel-body">
					                        <div class="tab-content">
					
					                            <!--First tab-->
					                            <div id="demo-main-tab1" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-2 control-label">Username</label>
					                                    <div class="col-lg-9">
					                                        <input type="text" class="form-control" name="username" placeholder="Username">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-2 control-label">Email address</label>
					                                    <div class="col-lg-9">
					                                        <input type="email" class="form-control" name="email" placeholder="Email">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-2 control-label">Password</label>
					                                    <div class="col-lg-9 pad-no">
					                                        <div class="clearfix">
					                                            <div class="col-lg-4">
					                                                <input type="password" class="form-control mar-btm" name="password" placeholder="Password">
					                                            </div>
					                                            <div class="col-lg-4 text-lg-right"><label class="control-label">Retype password</label></div>
					                                            <div class="col-lg-4"><input type="password" class="form-control" name="password2" placeholder="Retype password"></div>
					                                        </div>
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Second tab-->
					                            <div id="demo-main-tab2" class="tab-pane fade">
					                                <div class="form-group">
					                                    <label class="col-lg-2 control-label">First name</label>
					                                    <div class="col-lg-9 pad-no">
					                                        <div class="clearfix">
					                                            <div class="col-lg-4">
					                                                <input type="text" placeholder="First name" name="firstName" class="form-control">
					                                            </div>
					                                            <div class="col-lg-4 text-lg-right"><label class="control-label">Last name</label></div>
					                                            <div class="col-lg-4"><input type="text" placeholder="Last name" name="lastName" class="form-control"></div>
					                                        </div>
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-2 control-label">Company</label>
					                                    <div class="col-lg-9">
					                                        <input type="text" placeholder="Company" name="company" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-2 control-label">Member Type</label>
					                                    <div class="col-lg-9">
					                                        <div class="radio">
					                                            <input id="demo-radio-1" class="magic-radio" type="radio" name="memberType" value="free">
					                                            <label for="demo-radio-1">Free</label>
					
					                                            <input id="demo-radio-2" class="magic-radio" type="radio" name="memberType" value="personal">
					                                            <label for="demo-radio-2">Personal</label>
					
					                                            <input id="demo-radio-3" class="magic-radio" type="radio" name="memberType" value="bussines">
					                                            <label for="demo-radio-3">Bussiness</label>
					                                        </div>
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Third tab-->
					                            <div id="demo-main-tab3" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-2 control-label">Phone Number</label>
					                                    <div class="col-lg-9">
					                                        <input type="text" placeholder="Phone number" name="phoneNumber" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-2 control-label">Address</label>
					                                    <div class="col-lg-9">
					                                        <input type="text" placeholder="Address" name="address" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-2 control-label">City</label>
					                                    <div class="col-lg-9 pad-no">
					                                        <div class="clearfix">
					                                            <div class="col-lg-5">
					                                                <input type="text" placeholder="City" name="city" class="form-control">
					                                            </div>
					                                            <div class="col-lg-3 text-lg-right"><label class="control-label">Poscode</label></div>
					                                            <div class="col-lg-4"><input type="text" placeholder="Poscode" name="poscode" class="form-control"></div>
					                                        </div>
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Fourth tab-->
					                            <div id="demo-main-tab4" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-2 control-label">Bio</label>
					                                    <div class="col-lg-9">
					                                        <textarea placeholder="Tell us your story..." rows="4" name="bio" class="form-control"></textarea>
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <div class="col-lg-9 col-lg-offset-2">
					                                        <div class="checkbox">
					                                            <input id="demo-checkbox-1" class="magic-checkbox" type="checkbox" name="acceptTerms">
					                                            <label for="demo-checkbox-1"> Accept the terms and policies</label>
					                                        </div>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					
					
					                    <!--Footer buttons-->
					                    <div class="pull-right pad-rgt mar-btm">
					                        <button type="button" class="previous btn btn-primary">Previous</button>
					                        <button type="button" class="next btn btn-primary">Next</button>
					                        <button type="button" class="finish btn btn-success" disabled>Finish</button>
					                    </div>
					
					                </form>
					            </div>
					            <!--===================================================-->
					            <!-- End of Main Form Wizard -->
					
					        </div>
					    </div>
					</div>
					<div class="row">
					    <div class="col-lg-6">
					        <hr class="new-section-sm bord-no">
					        <h4 class="text-main pad-btm bord-btm">Classic Style</h4>
					        <div class="panel">
					
					            <!-- Classic Form Wizard -->
					            <!--===================================================-->
					            <div id="demo-cls-wz">
					
					                <!--Nav-->
					                <ul class="wz-nav-off wz-icon-inline">
					                    <li class="col-xs-3 bg-mint">
					                        <a data-toggle="tab" href="#demo-cls-tab1">
					                            <span class="icon-wrap icon-wrap-xs"><i class="demo-pli-information icon-lg"></i></span> Account
					                        </a>
					                    </li>
					                    <li class="col-xs-3 bg-mint">
					                        <a data-toggle="tab" href="#demo-cls-tab2">
					                            <span class="icon-wrap icon-wrap-xs"><i class="demo-pli-male icon-lg"></i></span> Profile
					                        </a>
					                    </li>
					                    <li class="col-xs-3 bg-mint">
					                        <a data-toggle="tab" href="#demo-cls-tab3">
					                            <span class="icon-wrap icon-wrap-xs"><i class="demo-pli-home icon-lg"></i></span> Address
					                        </a>
					                    </li>
					                    <li class="col-xs-3 bg-mint">
					                        <a data-toggle="tab" href="#demo-cls-tab4">
					                            <span class="icon-wrap icon-wrap-xs"><i class="demo-pli-medal-2 icon-lg"></i></span> Finish
					                        </a>
					                    </li>
					                </ul>
					
					                <!--Progress bar-->
					                <div class="progress progress-xs progress-striped active">
					                    <div class="progress-bar progress-bar-dark"></div>
					                </div>
					
					
					                <!--Form-->
					                <form class="form-horizontal mar-top">
					                    <div class="panel-body">
					                        <div class="tab-content">
					
					                            <!--First tab-->
					                            <div id="demo-cls-tab1" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Username</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" class="form-control" name="username" placeholder="Username">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Email address</label>
					                                    <div class="col-lg-7">
					                                        <input type="email" class="form-control" name="email" placeholder="Email">
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Second tab-->
					                            <div id="demo-cls-tab2" class="tab-pane fade">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">First name</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="First name" name="firstName" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Last name</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Last name" name="lastName" class="form-control">
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Third tab-->
					                            <div id="demo-cls-tab3" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Address</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Address" name="address" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">City</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="City" name="city" class="form-control">
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Fourth tab-->
					                            <div id="demo-cls-tab4" class="tab-pane mar-btm">
					                                <h4>Thank you</h4>
					                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
					                            </div>
					                        </div>
					                    </div>
					
					
					                    <!--Footer button-->
					                    <div class="panel-footer text-right">
					                        <div class="box-inline">
					                            <button type="button" class="previous btn btn-mint">Previous</button>
					                            <button type="button" class="next btn btn-mint">Next</button>
					                            <button type="button" class="finish btn btn-mint" disabled>Finish</button>
					                        </div>
					                    </div>
					                </form>
					            </div>
					            <!--===================================================-->
					            <!-- End Classic Form Wizard -->
					
					        </div>
					    </div>
					    <div class="col-lg-6">
					        <hr class="new-section-sm bord-no">
					        <h4 class="text-main pad-btm bord-btm">Bubble Numbers</h4>
					        <div class="panel">
					
					            <!-- Bubble Numbers Form Wizard -->
					            <!--===================================================-->
					            <div id="demo-step-wz">
					                <div class="wz-heading wz-w-label bg-info">
					
					                    <!--Progress bar-->
					                    <div class="progress progress-xs">
					                        <div style="width: 15%;" class="progress-bar progress-bar-dark"></div>
					                    </div>
					
					                    <!--Nav-->
					                    <ul class="wz-steps wz-icon-bw wz-nav-off text-lg">
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-step-tab1">
					                                <span class="icon-wrap icon-wrap-xs icon-circle bg-dark mar-ver">
					                                    <span class="wz-icon icon-txt text-bold">1</span>
					                                    <i class="wz-icon-done demo-psi-like"></i>
					                                </span>
					                                <small class="wz-desc box-block text-semibold">Account</small>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-step-tab2">
					                                <span class="icon-wrap icon-wrap-xs icon-circle bg-dark mar-ver">
					                                    <span class="wz-icon icon-txt text-bold">2</span>
					                                    <i class="wz-icon-done demo-psi-like"></i>
					                                </span>
					                                <small class="wz-desc box-block text-semibold">Profile</small>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-step-tab3">
					                                <span class="icon-wrap icon-wrap-xs icon-circle bg-dark mar-ver">
					                                    <span class="wz-icon icon-txt text-bold">3</span>
					                                    <i class="wz-icon-done demo-psi-like"></i>
					                                </span>
					                                <small class="wz-desc box-block text-semibold">Address</small>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-step-tab4">
					                                <span class="icon-wrap icon-wrap-xs icon-circle bg-dark mar-ver">
					                                    <span class="wz-icon icon-txt text-bold">4</span>
					                                    <i class="wz-icon-done demo-psi-like"></i>
					                                </span>
					                                <small class="wz-desc box-block text-semibold">Finish</small>
					                            </a>
					                        </li>
					                    </ul>
					                </div>
					
					                <!--Form-->
					                <form class="form-horizontal">
					                    <div class="panel-body">
					                        <div class="tab-content">
					
					                            <!--First tab-->
					                            <div id="demo-step-tab1" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Username</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" class="form-control" name="username" placeholder="Username">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Email address</label>
					                                    <div class="col-lg-7">
					                                        <input type="email" class="form-control" name="email" placeholder="Email">
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Second tab-->
					                            <div id="demo-step-tab2" class="tab-pane fade">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">First name</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="First name" name="firstName" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Last name</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Last name" name="lastName" class="form-control">
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Third tab-->
					                            <div id="demo-step-tab3" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Phone Number</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Phone number" name="phoneNumber" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Address</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Address" name="address" class="form-control">
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Fourth tab-->
					                            <div id="demo-step-tab4" class="tab-pane mar-btm text-center">
					                                <h4>Thank you</h4>
					                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
					                            </div>
					                        </div>
					                    </div>
					
					                    <!--Footer button-->
					                    <div class="panel-footer text-right">
					                        <div class="box-inline">
					                            <button type="button" class="previous btn btn-info">Previous</button>
					                            <button type="button" class="next btn btn-info">Next</button>
					                            <button type="button" class="finish btn btn-info" disabled>Finish</button>
					                        </div>
					                    </div>
					                </form>
					            </div>
					            <!--===================================================-->
					            <!-- End Bubble Numbers Form Wizard -->
					
					        </div>
					    </div>
					</div>
					<div class="row">
					    <div class="col-lg-6">
					
					        <hr class="new-section-sm bord-no">
					        <h4 class="text-main pad-btm bord-btm">With Tooltip</h4>
					        <div class="panel">
					
					            <!-- Circular Form Wizard -->
					            <!--===================================================-->
					            <div id="demo-cir-wz">
					                <div class="wz-heading pad-ver">
					
					                    <!--Progress bar-->
					                    <div class="progress progress-xs progress-light-base">
					                        <div class="progress-bar progress-bar-primary"></div>
					                    </div>
					
					                    <!--Nav-->
					                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					                    <ul class="wz-nav-off">
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-cir-tab1" title="Account" class="add-tooltip">
					                                <div class="icon-wrap icon-wrap-sm bg-primary">
					                                    <i class="wz-icon demo-pli-information icon-lg"></i>
					                                    <i class="wz-icon-done demo-pli-like icon-lg"></i>
					                                </div>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-cir-tab2" title="Profile" class="add-tooltip">
					                                <div class="icon-wrap icon-wrap-sm bg-primary">
					                                    <i class="wz-icon demo-pli-male icon-lg"></i>
					                                    <i class="wz-icon-done demo-pli-like icon-lg"></i>
					                                </div>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-cir-tab3" title="Address" class="add-tooltip">
					                                <div class="icon-wrap icon-wrap-sm bg-primary">
					                                    <i class="wz-icon demo-pli-home icon-lg"></i>
					                                    <i class="wz-icon-done demo-pli-like icon-lg"></i>
					                                </div>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-cir-tab4" title="Finish" class="add-tooltip">
					                                <div class="icon-wrap icon-wrap-sm bg-primary">
					                                    <i class="wz-icon demo-pli-medal-2 icon-lg"></i>
					                                    <i class="wz-icon-done demo-pli-like icon-lg"></i>
					                                </div>
					                            </a>
					                        </li>
					                    </ul>
					                </div>
					
					                <!--Form-->
					                <form class="form-horizontal">
					                    <div class="panel-body">
					                        <div class="tab-content">
					
					                            <!--First tab-->
					                            <div id="demo-cir-tab1" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Username</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" class="form-control" name="username" placeholder="Username">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Email address</label>
					                                    <div class="col-lg-7">
					                                        <input type="email" class="form-control" name="email" placeholder="Email">
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Second tab-->
					                            <div id="demo-cir-tab2" class="tab-pane fade">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">First name</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="First name" name="firstName" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Last name</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Last name" name="lastName" class="form-control">
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Third tab-->
					                            <div id="demo-cir-tab3" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Phone Number</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Phone number" name="phoneNumber" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Address</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Address" name="address" class="form-control">
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Fourth tab-->
					                            <div id="demo-cir-tab4" class="tab-pane  mar-btm text-center">
					                                <h4>Thank you</h4>
					                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
					                            </div>
					
					                        </div>
					                    </div>
					
					                    <!--Footer button-->
					                    <div class="panel-footer text-right">
					                        <div class="box-inline">
					                            <button type="button" class="previous btn btn-primary">Previous</button>
					                            <button type="button" class="next btn btn-primary">Next</button>
					                            <button type="button" class="finish btn btn-warning" disabled>Finish</button>
					                        </div>
					                    </div>
					                </form>
					            </div>
					            <!--===================================================-->
					            <!-- End Circular Form Wizard -->
					
					        </div>
					    </div>
					    <div class="col-lg-6">
					
					        <hr class="new-section-sm bord-no">
					        <h4 class="text-main pad-btm bord-btm">With Validation</h4>
					        <div class="panel">
					
					            <!-- Form wizard with Validation -->
					            <!--===================================================-->
					            <div id="demo-bv-wz">
					                <div class="wz-heading pad-top">
					
					                    <!--Nav-->
					                    <ul class="row wz-step wz-icon-bw wz-nav-off mar-top">
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab1">
					                                <span class="text-danger"><i class="demo-pli-information icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Account</p>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab2">
					                                <span class="text-warning"><i class="demo-pli-male icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Profile</p>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab3">
					                                <span class="text-info"><i class="demo-pli-home icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Address</p>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab4">
					                                <span class="text-success"><i class="demo-pli-medal-2 icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Finish</p>
					                            </a>
					                        </li>
					                    </ul>
					                </div>
					
					                <!--progress bar-->
					                <div class="progress progress-xs">
					                    <div class="progress-bar progress-bar-primary"></div>
					                </div>
					
					
					                <!--Form-->
					                <form id="demo-bv-wz-form" class="form-horizontal">
					                    <div class="panel-body">
					                        <div class="tab-content">
					
					                            <!--First tab-->
					                            <div id="demo-bv-tab1" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Username</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" class="form-control" name="username" placeholder="Username">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Email address</label>
					                                    <div class="col-lg-7">
					                                        <input type="email" class="form-control" name="email" placeholder="Email">
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Second tab-->
					                            <div id="demo-bv-tab2" class="tab-pane fade">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">First name</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="First name" name="firstName" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Last name</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Last name" name="lastName" class="form-control">
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Third tab-->
					                            <div id="demo-bv-tab3" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Phone Number</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Phone number" name="phoneNumber" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Address</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Phone number" name="address" class="form-control">
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Fourth tab-->
					                            <div id="demo-bv-tab4" class="tab-pane  mar-btm text-center">
					                                <h4>Thank you</h4>
					                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
					                            </div>
					                        </div>
					                    </div>
					
					                    <!--Footer button-->
					                    <div class="panel-footer text-right">
					                        <div class="box-inline">
					                            <button type="button" class="previous btn btn-primary">Previous</button>
					                            <button type="button" class="next btn btn-primary">Next</button>
					                            <button type="button" class="finish btn btn-warning" disabled>Finish</button>
					                        </div>
					                    </div>
					                </form>
					            </div>
					            <!--===================================================-->
					            <!-- End Form wizard with Validation -->
					
					        </div>
					    </div>
					</div>
					
					
					
                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!--ASIDE-->
            <!--===================================================-->
            <aside id="aside-container">
                <div id="aside">
                    <div class="nano">
                        <div class="nano-content">
                            
                            <!--Nav tabs-->
                            <!--================================-->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#demo-asd-tab-1" data-toggle="tab">
                                        <i class="demo-pli-speech-bubble-7 icon-lg"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-2" data-toggle="tab">
                                        <i class="demo-pli-information icon-lg icon-fw"></i> Report
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-3" data-toggle="tab">
                                        <i class="demo-pli-wrench icon-lg icon-fw"></i> Settings
                                    </a>
                                </li>
                            </ul>
                            <!--================================-->
                            <!--End nav tabs-->



                            <!-- Tabs Content -->
                            <!--================================-->
                            <div class="tab-content">

                                <!--First tab (Contact list)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">
                                        <span class="pull-right badge badge-warning">3</span> Family
                                    </p>

                                    <!--Family-->
                                    <div class="list-group bg-trans">
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="img/profile-photos/2.png" alt="Profile Picture">
												<i class="badge badge-success badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Stephen Tran</p>
							                    <small class="text-muteds">Availabe</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="img/profile-photos/7.png" alt="Profile Picture">
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Brittany Meyer</p>
							                    <small class="text-muteds">I think so</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="img/profile-photos/1.png" alt="Profile Picture">
												<i class="badge badge-info badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Jack George</p>
							                    <small class="text-muteds">Last Seen 2 hours ago</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="img/profile-photos/4.png" alt="Profile Picture">
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Donald Brown</p>
							                    <small class="text-muteds">Lorem ipsum dolor sit amet.</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="img/profile-photos/8.png" alt="Profile Picture">
												<i class="badge badge-warning badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Betty Murphy</p>
							                    <small class="text-muteds">Idle</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="img/profile-photos/9.png" alt="Profile Picture">
												<i class="badge badge-danger badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Samantha Reid</p>
							                    <small class="text-muteds">Offline</small>
							                </div>
							            </a>
                                    </div>

                                    <hr>
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">
                                        <span class="pull-right badge badge-success">Offline</span> Friends
                                    </p>

                                    <!--Works-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-purple badge-icon badge-fw pull-left"></span> Joey K. Greyson
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-info badge-icon badge-fw pull-left"></span> Andrea Branden
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-success badge-icon badge-fw pull-left"></span> Johny Juan
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-danger badge-icon badge-fw pull-left"></span> Susan Sun
                                        </a>
                                    </div>


                                    <hr>
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">News</p>

                                    <div class="pad-hor">
                                        <p>Lorem ipsum dolor sit amet, consectetuer
                                            <a data-title="45%" class="add-tooltip text-semibold text-main" href="#">adipiscing elit</a>, sed diam nonummy nibh. Lorem ipsum dolor sit amet.
                                        </p>
                                        <small><em>Last Update : Des 12, 2014</em></small>
                                    </div>


                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--End first tab (Contact list)-->


                                <!--Second tab (Custom layout)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-2">

                                    <!--Monthly billing-->
                                    <div class="pad-all">
                                        <p class="pad-ver text-main text-sm text-uppercase text-bold">Billing &amp; reports</p>
                                        <p>Get <strong class="text-main">$5.00</strong> off your next bill by making sure your full payment reaches us before August 5, 2018.</p>
                                    </div>
                                    <hr class="new-section-xs">
                                    <div class="pad-all">
                                        <span class="pad-ver text-main text-sm text-uppercase text-bold">Amount Due On</span>
                                        <p class="text-sm">August 17, 2018</p>
                                        <p class="text-2x text-thin text-main">$83.09</p>
                                        <button class="btn btn-block btn-success mar-top">Pay Now</button>
                                    </div>


                                    <hr>

                                    <p class="pad-all text-main text-sm text-uppercase text-bold">Additional Actions</p>

                                    <!--Simple Menu-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item"><i class="demo-pli-information icon-lg icon-fw"></i> Service Information</a>
                                        <a href="#" class="list-group-item"><i class="demo-pli-mine icon-lg icon-fw"></i> Usage Profile</a>
                                        <a href="#" class="list-group-item"><span class="label label-info pull-right">New</span><i class="demo-pli-credit-card-2 icon-lg icon-fw"></i> Payment Options</a>
                                        <a href="#" class="list-group-item"><i class="demo-pli-support icon-lg icon-fw"></i> Message Center</a>
                                    </div>


                                    <hr>

                                    <div class="text-center">
                                        <div><i class="demo-pli-old-telephone icon-3x"></i></div>
                                        Questions?
                                        <p class="text-lg text-semibold text-main"> (415) 234-53454 </p>
                                        <small><em>We are here 24/7</em></small>
                                    </div>
                                </div>
                                <!--End second tab (Custom layout)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


                                <!--Third tab (Settings)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-3">
                                    <ul class="list-group bg-trans">
                                        <li class="pad-top list-header">
                                            <p class="text-main text-sm text-uppercase text-bold mar-no">Account Settings</p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-1" type="checkbox" checked>
                                                <label for="demo-switch-1"></label>
                                            </div>
                                            <p class="mar-no text-main">Show my personal status</p>
                                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-2" type="checkbox" checked>
                                                <label for="demo-switch-2"></label>
                                            </div>
                                            <p class="mar-no text-main">Show offline contact</p>
                                            <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-3" type="checkbox">
                                                <label for="demo-switch-3"></label>
                                            </div>
                                            <p class="mar-no text-main">Invisible mode </p>
                                            <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </small>
                                        </li>
                                    </ul>


                                    <hr>

                                    <ul class="list-group pad-btm bg-trans">
                                        <li class="list-header"><p class="text-main text-sm text-uppercase text-bold mar-no">Public Settings</p></li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-4" type="checkbox" checked>
                                                <label for="demo-switch-4"></label>
                                            </div>
                                            Online status
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-5" type="checkbox" checked>
                                                <label for="demo-switch-5"></label>
                                            </div>
                                            Show offline contact
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-6" type="checkbox" checked>
                                                <label for="demo-switch-6"></label>
                                            </div>
                                            Show my device icon
                                        </li>
                                    </ul>



                                    <hr>

                                    <p class="pad-hor text-main text-sm text-uppercase text-bold mar-no">Task Progress</p>
                                    <div class="pad-all">
                                        <p class="text-main">Upgrade Progress</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
                                        </div>
                                        <small>15% Completed</small>
                                    </div>
                                    <div class="pad-hor">
                                        <p class="text-main">Database</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
                                        </div>
                                        <small>17/23 Database</small>
                                    </div>

                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--Third tab (Settings)-->

                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!--===================================================-->
            <!--END ASIDE-->

            
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            
			<?php  include_once("layout/asideprofile/asideprofile.php");  ?>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>

        

        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pad-rgt pull-right">
                You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>
            </div>



            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">
                14GB of <strong>512GB</strong> Free.
            </div>



            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2017 Your Company</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    
    
    
    

	<?php  include_once("layout/footer.php");  ?>
<script src="../../../../resource/public/assets/cooservipress/routePlatform.js"></script>
</body>
</html>

