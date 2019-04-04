<!DOCTYPE html>
<html lang="en">

<head>
	<?php include_once($_SERVER['DOCUMENT_ROOT'].'/credito/config/directory.php');?>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, 
	    user-scalable=no" />
	<title>Plataforma</title>
	<meta name="description" content="" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo  $RouteViewAssets.'cooservipress/img/favicon.ico'; ?>">
	<link rel="icon" href="<?php echo  $RouteViewAssets.'cooservipress/img/favicon.ico'; ?>" type="image/x-icon">

	<!-- Custom CSS -->
	<link href="<?php echo  $RouteVendorApp.'dist_pangong/css/style.css'; ?>" rel="stylesheet" type="text/css">
	<style>
	 .justificar{
		
	 }
	
	</style>
</head>



<body>

	<!-- Preloader -->
	<div class="preloader-it">
		<div class="loader-pendulums"></div>
	</div>
	<!-- /Preloader -->

	<!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap pt-xl-0 pt-70">
                            <div class="auth-form w-xl-25 w-lg-30 w-sm-50 w-100">
                                <a class="auth-brand text-center d-block mb-45" href="#">
                                    <img class="brand-img" src="<?php echo  $RouteVendorApp.'dist_pangong/img/logo-light.png'; ?>" alt="brand" />
                                </a>
                                <form>
                                    <div class="d-62 bg-white rounded-circle mb-10 d-flex align-items-center justify-content-center mx-auto">
                                        <i class="zmdi zmdi-settings font-28"></i>
                                    </div>
                                    <h1 class="display-4 mb-10 text-center">En este momento estamos en mantenimiento</h1>
                                    <p class="mb-30 text-justify">Pedimos disculpas por las molestias, estamos haciendo todo lo posible para que las cosas vuelvan a estar en orden para usted. por favor no dude en ponerse en contacto con nosotros para cualquier consulta.</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
	<!-- /HK Wrapper -->

	<!-- jQuery -->
	<script src="<?php echo  $RouteVendorApp.'plugins/jquery/dist/jquery.min.js'; ?>"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo  $RouteVendorApp.'plugins/popper.js/dist/umd/popper.min.js'; ?>"></script>
	<script src="<?php echo  $RouteVendorApp.'plugins/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>

	<!-- Slimscroll JavaScript -->
	<script src="<?php echo  $RouteVendorApp.'dist_pangong/js/jquery.slimscroll.js'; ?>"></script>

	<!-- Fancy Dropdown JS -->
	<script src="<?php echo  $RouteVendorApp.'dist_pangong/js/dropdown-bootstrap-extended.js'; ?>"></script>

	<!-- Owl JavaScript -->
	<script src="<?php echo  $RouteVendorApp.'plugins/owl.carousel/dist/owl.carousel.min.js'; ?>"></script>

	<!-- FeatherIcons JavaScript -->
	<script src="<?php echo  $RouteVendorApp.'dist_pangong/js/feather.min.js'; ?>"></script>

	<!-- Init JavaScript -->
	<script src="<?php echo  $RouteVendorApp.'dist_pangong/js/init.js'; ?>"></script>
	<script src="<?php echo  $RouteVendorApp.'dist_pangong/js/login-data.js'; ?>"></script>


</body>

</html>



