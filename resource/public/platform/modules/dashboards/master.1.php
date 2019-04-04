<?php session_start();
/* Ruta del archivo de configuracion principal*/

require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
/* Rutas del directorio de controller */

require_once(PROVIDER_PATH."empleadoController.php");
require_once(PROVIDER_PATH."productoController.php");
 /* Ruta del archivo de sesion*/

require_once(CONFIGURATION_PATH."session.php");

session::verificarSesion($_SESSION['idsesion']);

$fecha = getdate();
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
	<input type="hidden" value="<?php echo $_SESSION['rol'];   ?>" />
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="loader-pendulums"></div>
	</div>
	<!-- /Preloader -->
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-alt-nav">
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
		<div class="hk-pg-wrapper" style="min-height: 636px;">
			<!-- Container -->

			<div class="row">
				<div class="col-xl-12">
					<br>
					<h5 class="hk-sec-title">&nbsp;&nbsp;DSIMED servicio integral en salud</h5>
					<p class="mb-40">&nbsp;&nbsp;Plataforma de gestion administrativa y logistica.</p>
					<div class="row">
						<div class="col-xl-12">
							<section class="hk-sec-wrapper">
								<h5 class="hk-sec-title">Panel de trabajo</h5>
								<p class="mb-25">Desde aqui puede ver un resumen del estado de su plataforma.<br>Recuerde que al presionar en la opcion se desplega en panel ,recuerde volver a presionar para cerrar si desea ver otra opcion</p>
								<div class="row">
									<div class="col-sm">
										<div class="button-list mb-15">
											<a class="btn btn-gradient-primary collapsed" data-toggle="collapse" href="#medicamentos" role="button"
											 aria-expanded="false" aria-controls="collapseExample">
												<li class="fa fa-pills"></li> Medicamentos
											</a>
											<button class="btn btn-gradient-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseExample"
											 aria-expanded="false" aria-controls="collapseExample">
												<li class="fa fa-pills"></li> Facturas
											</button>
											<button class="btn bbtn btn-gradient-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseExample"
											 aria-expanded="false" aria-controls="collapseExample">
												<li class="fa fa-pills"></li> Afiliados
											</button>
											<button class="btn bbtn btn-gradient-primary collapsed" type="button" data-toggle="collapse" data-target="#accesos"
											 aria-expanded="false" aria-controls="collapseExample">
												<li class="fa fa-th-large"></li> Accesos directos
											</button>
											<button class="btn bbtn btn-gradient-primary collapsed" type="button" data-toggle="collapse" data-target="#administrativas"
											 aria-expanded="false" aria-controls="collapseExample">
												<li class="fa fa-user-md"></li> Estadisticas administrativas
											</button>
										</div>
										<div class="collapse" id="medicamentos" style="">
											<div class="card card-body">
												<div class="w-1024p">
													<div class="form-inline">
														<div class="form-row align-items-center ">
															<div class="col-auto">
																<div class="custom-control ">
																	<label class=""> <i class='fa fa-sort-numeric-up fa-2x '></i>
																		.</label>
																</div>
															</div>
															<div class="col-auto">
																<div class="custom-control ">
																	<label class=""> <i class='fa fa-clipboard-list fa-2x '></i> .</label>
																</div>
															</div>
															<div class="col-auto">
																<div class="input-group mb-2">
																	<select class="form-control custom-select d-block w-150" id="estado" name="estado">
																		<option value="tc">Todos los productos</option>
																		<option value="tc">Stock > minimo </option>
																		<option value="tc">Stock <= minimo </option> <option value="tc">Stock 0 </option>
																	</select>
																</div>
															</div>
															<div class="col-auto">
																<div class="custom-control ">
																	<label class=""> <i class='fa fa-filter fa-2x '></i> .</label>
																</div>
															</div>
															<div class="col-auto">
																<div class="input-group mb-2">
																	<select class="form-control custom-select d-block w-150" id="estado" name="estado">
																		<option value="tc">Venta normal</option>
																		<option value="tc">Venta Afiliados</option>

																	</select>
																</div>
															</div>

															<div class="col-auto">
																<div class="form-group">
																	<div class="input-group mb-2">
																		<input type="text" class="form-control w-70" placeholder="Consultar  ..." id="busqueda" name="busqueda">
																		<div class="input-group-append">
																			<button class="btn btn-gradient-info" type="button" id="buscarCliente">
																				<li class="fa fa-search"></li>
																			</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div id="tablaDinamica">
													<?php productoController::listaProductos();?>
												</div>
											</div>
										</div>

										<div class="collapse" id="accesos" style="">
											<div class="card card-body">
												<div class="row">
													<div class="col-sm">
														<div class="row">
															<div class="col-lg-2 col-md-2 col-sm-12 mb-30">
																<div class="card">
																	<div class="card-header">
																		<h5 class="card-title">Venta (POS)</h5>
																	</div>
																	<div class="card-body">

																		<p class="card-text ">Modulo de caja registradora y ticket.</p>
																		<a href="#" class="btn btn-gradient-primary"><i class="fa fa-cart-plus fa-5x"></i> </a>
																	</div>
																	<div class="card-footer text-muted text-justify">
																		Modulo principal
																	</div>
																</div>
															</div>
															<div class="col-lg-2 col-md-2 col-sm-12 mb-30">
																<div class="card">
																	<div class="card-header">
																		<h5 class="card-title">Contabilidad</h5>
																	</div>
																	<div class="card-body">

																		<p class="card-text text-justify">Modulo de contable y facturacion.</p>
																		<a href="#" class="btn btn-gradient-primary"><i class="fa fa-balance-scale fa-5x"></i> </a>
																	</div>
																	<div class="card-footer text-muted text-justify">
																		Modulo principal
																	</div>
																</div>
															</div>

															<div class="col-lg-2 col-md-2 col-sm-12 mb-30">
																<div class="card">
																	<div class="card-header">
																		<h5 class="card-title">Proveedores</h5>
																	</div>
																	<div class="card-body">

																		<p class="card-text ">gestion de Proveedores.</p>
																		<a href="#" class="btn btn-gradient-primary"><i class="fa fa-clipboard-list fa-5x"></i> </a>
																	</div>
																	<div class="card-footer text-muted ">
																		Modulo principal
																	</div>
																</div>
															</div>
															<div class="col-lg-2 col-md-2 col-sm-12 mb-30">
																<div class="card">
																	<div class="card-header">
																		<h5 class="card-title">Inventario</h5>
																	</div>
																	<div class="card-body">

																		<p class="card-text ">Logistica e inventario &nbsp;</p>
																		<a href="#" class="btn btn-gradient-primary"><i class="fa fa-boxes fa-5x"></i> </a>
																	</div>
																	<div class="card-footer text-muted ">
																		Modulo principal
																	</div>
																</div>
															</div>
															<div class="col-lg-2 col-md-2 col-sm-12 mb-30">
																<div class="card">
																	<div class="card-header">
																		<h5 class="card-title">Consultorio</h5>
																	</div>
																	<div class="card-body">

																		<p class="card-text ">gestion de consultorio &nbsp;</p>
																		<a href="#" class="btn btn-gradient-primary"><i class="fa fa-user-md fa-5x"></i> </a>
																	</div>
																	<div class="card-footer text-muted ">
																		Modulo principal
																	</div>
																</div>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="collapse" id="administrativas" style="">
											<div class="card card-body">
												<section class="hk-sec-wrapper">
													<h5 class="hk-sec-title mb-25">Estadisticas administrativas y de recursos humanos :
														
													</h5>
													<div class="row">
														<div class="col-sm">
															<div class="row">
																<div class="col-md-6">
																	<ul class="list-group mb-15">
																		<li class="list-group-item d-flex justify-content-between align-items-center">
																			ASESORAS <i class="text-light font-22"></i>
																			<?php echo productoController::nproductos(); ?>
																		</li>
																		<li class="list-group-item d-flex justify-content-between align-items-center">
																			ENFERMERAS <i class="text-light font-22"></i>0
																		</li>
																		<li class="list-group-item d-flex justify-content-between align-items-center">
																			MEDICOS<i class="text-light font-22"></i>0
																		</li>
																		<li class="list-group-item d-flex justify-content-between align-items-center">
																			ESPECIALISTAS<i class="text-light font-22"></i>0
																		</li>
																	</ul>
																</div>
																<div class="col-md-6">
																	<ul class="list-group">
																		<li class="list-group-item d-flex justify-content-between align-items-center">
																		   FARMACIA <i class="text-light font-22"></i>0
																		</li>
																		<li class="list-group-item d-flex justify-content-between align-items-center">
																		     MENSAJERIA <i class="text-light font-22"></i> 0
																		</li>
																		<li class="list-group-item d-flex justify-content-between align-items-center">
																		     Administrativa y otros cargos logisticos<i class="text-light font-22"></i> 0
																		</li>
																		<li class="list-group-item d-flex justify-content-between align-items-center">
																		     Clientes afiliados <i class="text-light font-22"></i> 0
																		</li>

																	</ul>
																</div>
															</div>
														</div>
													</div>
												</section>
											</div>
										</div>

									</div>


								</div>
								<div id="contenido">

									<section class="hk-sec-wrapper">
										<h5 class="hk-sec-title mb-25">Estadisticas del sistema :
											<?php echo " Fecha actual ".$fecha['mday']."/".$fecha['mon']."/".$fecha['year'] ?>
										</h5>
										<div class="row">
											<div class="col-sm">
												<div class="row">
													<div class="col-md-6">
														<ul class="list-group mb-15">
															<li class="list-group-item d-flex justify-content-between align-items-center">
																Medicamentos registrados <i class="text-light font-22"></i>
																<?php echo productoController::nproductos(); ?>
															</li>
															<li class="list-group-item d-flex justify-content-between align-items-center">
																Medicamentos con lotes de vencimiento <i class="text-light font-22"></i>0
															</li>
															<li class="list-group-item d-flex justify-content-between align-items-center">
																Medicamentos con lote minimo o 0<i class="text-light font-22"></i>0
															</li>
														</ul>
													</div>
													<div class="col-md-6">
														<ul class="list-group">
															<li class="list-group-item d-flex justify-content-between align-items-center">
																Ventas del dia <i class="text-light font-22"></i>0
															</li>
															<li class="list-group-item d-flex justify-content-between align-items-center">
																Clientes afiliados <i class="text-light font-22"></i>H - 0 , BD - 0
															</li>

														</ul>
													</div>
												</div>
											</div>
										</div>
									</section>



								</div>
							</section>


						</div>
					</div>



				</div>
			</div>

			<!-- Footer -->
			<?php  include_once("../../global/layouts/footer.php");  ?>
			<!-- /Footer -->
		</div>
		<!-- /Row -->
	</div>
	<!-- /Container -->

	</div>
	<!-- /Main Content -->
	<!-- /HK Wrapper -->
	<!-- App Libs -->
	<?php  include_once("../../global/layouts/appLib.php");  ?>
	<!-- /App Libs -->
	<script src="<?php echo JS_SERVER.'directory.js';  ?>"></script>
	<script src="<?php echo JS_SERVER.'app.js';  ?>"></script>
	<script src="<?php echo JS_SERVER.'usuario/module.js';  ?>"></script>
	<script>
		$(document).on('click', '#cerrarCollapse', function (e) {
			$('.panel-collapse').collapse({
           toggle: false
           });
		});

	   
	</script>
</body>

</html>