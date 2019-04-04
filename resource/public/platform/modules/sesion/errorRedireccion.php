<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  $HttpStatus = $_SERVER["REDIRECT_STATUS"] ;
  $smg = "";
 switch (intval($HttpStatus)) {
	 case '400':
	     $smg = "Error en la solicitud ";
		 break;
		 case '401':
	     $smg = "Acceso no autorizado";
		 break;
		 case '402':
	     $smg = "Error sin diccionario";
		 break;
		 case '403':
	     $smg = "Prohibido el acceso al usuario";
		 break;
		 case '404':
	     $smg = "Ruta no encontrada";
		 break;
		 case '405':
	     $smg = "Error sin diccionario";
		 break;
		 case '406':
	     $smg = "Error sin diccionario";
		 break;
		 case '407':
	     $smg = "Error sin diccionario";
		 break;
		 case '408':
	     $smg = "Error sin diccionario";
		 break;
		 case '409':
	     $smg = "Error sin diccionario";
		 break;
		 case '410':
	     $smg = "Error sin diccionario";
		 break;
		 case '411':
	     $smg = "Error sin diccionario";
		 break;
		 case '412':
	     $smg = "Error sin diccionario";
		 break;
		 case '413':
	     $smg = "Error sin diccionario";
		 break;
		 case '414':
	     $smg = "Error sin diccionario";
		 break;
		 case '500':
	     $smg = "Error Interno del servidor";
		 break;
		 case '501':
	     $smg = "Error sin diccionario";
		 break;
		 case '502':
	     $smg ="Bad Gateway";
		 break;
		 case '503':
	     $smg = "Error sin diccionario";
		 break;
		 case '504':
	     $smg = "Error sin diccionario";
		 break;
		 case '505':
	     $smg = "Error sin diccionario";
		 break;
	 
	 default:
	     $smg = "Error sin diccionario y sin identificacion en el sistema . . .";
		 break;
 }
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include_once($_SERVER['DOCUMENT_ROOT'].'/conf.php');?>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, 
	    user-scalable=no" />
	<title>Plataforma</title>
	<meta name="description" content="" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo  ASSETS_SERVER.'cooservipress/img/favicon.ico'; ?>">
	<link rel="icon" href="<?php echo  ASSETS_SERVER.'cooservipress/img/favicon.ico'; ?>" type="image/x-icon">

	<!-- Custom CSS -->
	<link href="<?php echo  DIST_PANGONG_SERVER.'css/style.css'; ?>" rel="stylesheet" type="text/css">
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
                                    <img class="brand-img" src="<?php echo  DIST_PANGONG_SERVER.'img/logo-light.png'; ?>" alt="brand" />
                                </a>
                                <form>
                                    <h1 class="display-4 mb-10 text-center"><?php echo $HttpStatus.' !Esto es un error';  ?></h1>
                                    <p class="mb-30 text-center text-justify"><?php echo $smg;  ?><a href="<?php echo INDEX_PATH;  ?>"><u>Retornar a la pagina principal</u></a> o escribe bien la direccion a donde requieres ir.</p>
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
	<script src="<?php echo  VENDOR_SERVER.'plugins/jquery/dist/jquery.min.js'; ?>"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo  VENDOR_SERVER.'plugins/popper.js/dist/umd/popper.min.js'; ?>"></script>
	<script src="<?php echo  VENDOR_SERVER.'plugins/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>

	<!-- Slimscroll JavaScript -->
	<script src="<?php echo  DIST_PANGONG_SERVER.'js/jquery.slimscroll.js'; ?>"></script>

	<!-- Fancy Dropdown JS -->
	<script src="<?php echo  DIST_PANGONG_SERVER.'js/dropdown-bootstrap-extended.js'; ?>"></script>

	<!-- Owl JavaScript -->
	<script src="<?php echo  VENDOR_SERVER.'plugins/owl.carousel/dist/owl.carousel.min.js'; ?>"></script>

	<!-- FeatherIcons JavaScript -->
	<script src="<?php echo  DIST_PANGONG_SERVER.'js/feather.min.js'; ?>"></script>

	<!-- Init JavaScript -->
	<script src="<?php echo  DIST_PANGONG_SERVER.'js/init.js'; ?>"></script>
	<script src="<?php echo  DIST_PANGONG_SERVER.'js/login-data.js'; ?>"></script>


</body>

</html>



