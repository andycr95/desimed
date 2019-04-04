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
    <title>Pangong I CRM Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- vector map CSS -->
    <link href="<?php echo  $RouteVendorApp.'plugins/vectormap/jquery-jvectormap-2.0.3.css'; ?>" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="<?php echo  $RouteVendorApp.'plugins/jquery-toggles/css/toggles.css'; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo  $RouteVendorApp.'plugins/jquery-toggles/css/themes/toggles-light.css'; ?>" rel="stylesheet" type="text/css">
	
	<!-- Toastr CSS -->
    <link href="<?php echo  $RouteVendorApp.'plugins/jquery-toast-plugin/dist/jquery.toast.min.css'; ?>" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="<?php echo  $RouteVendorApp.'dist_pangong/css/style.css'; ?>" rel="stylesheet" type="text/css">
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
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
                <!-- Title -->
                <div class="hk-pg-header align-items-top">
                    <div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Dashboard - </h2>
						<p>xxx ? <a href="#">xxx.</a></p>
					</div>
					<div class="d-flex w-500p">
						<!-- <select class="form-control custom-select custom-select-sm mr-15">
							<option selected="">Latest Products</option>
							<option value="1">CRM</option>
							<option value="2">Projects</option>
							<option value="3">Statistics</option>
						</select> -->
					</div>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hk-row">
							<div class="col-sm-12">
								<!--  content -->
							</div>	
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

    </div>
	<!-- /HK Wrapper -->
	
	<!-- App Libs -->
	<?php  include_once("../../global/layouts/appLib.php");  ?>
    <!-- /App Libs -->

    
	
</body>

</html>