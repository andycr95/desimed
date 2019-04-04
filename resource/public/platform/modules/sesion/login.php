<!DOCTYPE html>
<html lang="en">
<head>

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');?>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, 
	    user-scalable=no" />
	<title>Plataforma</title>
	<meta name="description" content="" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo  "//".ASSETS_SERVER.'cooservipress/img/favicon.ico'; ?>">
	<link rel="icon" href="<?php echo  "//".ASSETS_SERVER.'cooservipress/img/favicon.ico'; ?>" type="image/x-icon">
	<!-- Custom CSS -->
	<link href="<?php echo  "//".DIST_PANGONG_SERVER.'/css/style.css'; ?>" rel="stylesheet" type="text/css">
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
			<header class="d-flex justify-content-between align-items-center">
				<a class="d-flex auth-brand" href="#">
					
				</a>
				
			</header>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-5 pa-0">
						<div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
							<div class="fadeOut item auth-cover-img overlay-wrap" style="<?php echo 'background-image:url('.DIST_PANGONG_SERVER.'img/imagen1.png)'; ?> ">
								<div class="auth-cover-info py-xl-0 pt-100 pb-50">
									<div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
											
										<h1 class="display-3 text-white mb-20">Una plataforma pensada para tu farmacia.</h1>
										
										<p class="text-white text-justify">Software Administrativo y Contable para Droguerías y Farmacias cuenta con:  Control de Inventario y Lotes , Punto de Venta ( TPV-POS ), Contabilidad Automática, Facturación On-Line, Reportes Financiero, y más, Tu Negocio disponible las 24/7 , Instalación Local y Cloud ERP.</p>
										<br>
										
									</div>
								</div>
								<div class="bg-overlay bg-trans-dark-50"></div>
							</div>
							<div class="fadeOut item auth-cover-img overlay-wrap" style="<?php echo 'background-image:url('.DIST_PANGONG_SERVER.'img/bg1.jpg)'; ?> ">
								<div class="auth-cover-info py-xl-0 pt-100 pb-50">
									<div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
										<h1 class="display-3 text-white mb-20">Farmacias mas eficientes.</h1>
										<p class="text-white text-justify">Recuerde que una Administración Eficiente y Contabilidad al Día es un requerimiento indispensable en el Crecimiento Sostenible y Éxito de tu Empresa, con  Software ERP lo puedes lograr. Si deseas disfrutar todos los benefcios, entre en contacto, nuestro personal le brindará la información necesaria en fin de implementar, el Sistema más Efectivo y Económico del Mercado. Asesorías Totalmente gratis .</p>
									</div>
								</div>
								<div class="bg-overlay bg-trans-dark-50"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-7 pa-0">
						<div class="auth-form-wrap py-xl-0 py-50">
							<div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
								
									<h1 class="display-4 mb-10">Bienvenido a la plataforma </h1>
									<img  src="http://drogasdsimed.com/resource/public/assets/cooservipress/img/LOGO DSIMED TRANSP.png"  height="200" width="500"    alt="brand" />
									<p class="mb-30">Inicia sesion en tu cuenta.</p>
									<div class="form-group">
										<input class="form-control" placeholder="Email" type="text"  id="email" name="email" required> 
									</div>
									<div class="form-group">
										<div class="input-group">
											<input class="form-control" placeholder="Password" type="password"  id="clave" name="clave" autocomplete="new-password" required>
											<div class="input-group-append">
												<span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
											</div>
										</div>
									</div>
									<button class="btn btn-primary btn-block"  id="validarSesion">iniciar sesion</button>
									<div class="option-sep">&nbsp;</div>
									<div id="smg_login">
										<!-- <p class="text-center">No puedes iniciar sesion</p> -->
									</div>
								
									
									<p class="text-center">Correo Empresarial DSIMED SAS <a href="<?php echo  EMAIL_PATH; ?> "   >VER</a></p>
								
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
	<script src="<?php echo  "//".VENDOR_SERVER.'plugins/jquery/dist/jquery.min.js'; ?>"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo  "//".VENDOR_SERVER.'plugins/popper.js/dist/umd/popper.min.js'; ?>"></script>
	<script src="<?php echo  "//".VENDOR_SERVER.'plugins/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
	<!-- Slimscroll JavaScript -->
	<script src="<?php echo  "//".DIST_PANGONG_SERVER.'js/jquery.slimscroll.js'; ?>"></script>
	<!-- Fancy Dropdown JS -->
	<script src="<?php echo  "//".DIST_PANGONG_SERVER.'js/dropdown-bootstrap-extended.js'; ?>"></script>
	<!-- Owl JavaScript -->
	<script src="<?php echo  "//".VENDOR_SERVER.'plugins/owl.carousel/dist/owl.carousel.min.js'; ?>"></script>
	<!-- FeatherIcons JavaScript -->
	<script src="<?php echo  "//".DIST_PANGONG_SERVER.'js/feather.min.js'; ?>"></script>
	<!-- Init JavaScript -->
	<script src="<?php echo  "//".DIST_PANGONG_SERVER.'js/init.js'; ?>"></script>
	<script src="<?php echo  "//".DIST_PANGONG_SERVER.'js/login-data.js'; ?>"></script>
	<script src="<?php echo  "//".JS_SERVER.'directory.js'; ?>" ></script>
	<script src="<?php echo  "//".JS_SERVER.'app.js'; ?>" ></script>
	<script src="<?php echo  "//".JS_SERVER.'appSesion.js'; ?>" ></script>
</body>
</html>
