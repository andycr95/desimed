<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  /* Ruta del archivo de sesion*/
  require_once(CONFIGURATION_PATH."session.php");
  require_once(PROVIDER_PATH."productoController.php");
  require_once(PROVIDER_PATH."proveedorController.php");
  require_once(PROVIDER_PATH."movimientosController.php");
  require_once(PROVIDER_PATH."empleadoController.php");
  session::verificarSesion($_SESSION['idsesion']);
  $objmovimiento = movimientosController::objmovimiento($_GET['idmovimiento']);
  $objusuario =  empleadoController::objempleado($objmovimiento->getIdfactura_movimientos()->getIdusuario());
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
	<input type="hidden" value="<?php echo $_GET['idmovimiento'];  ?>" name="idmovimiento" />
	<input type="hidden" value="<?php echo $objmovimiento->getIdfactura_movimientos()->getIdfactura();  ?>" name="idfactura" />
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
					<li class="breadcrumb-item active"><a
							href="<?php echo "//".PLATFORM_SERVER."modules/movimientos/index.php"; ?>">Listado de
							facturas entrada</a></li>
					<li class="breadcrumb-item active" aria-current="page">Reportar movimiento</li>
				</ol>
			</nav>
			<!-- /Breadcrumb -->
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row  ">
					<div class="col-xl-12">
						<section class="hk-sec-wrapper">
							<h5 class="hk-sec-title">Factura rectificada - movimiento de entrada (Compra) : </h5>
							<div class="row">
								<div class="col-xl-12 mb-20">
									<form>
										<div class="row">
											<div class="col-md-12 form-group">
												<label for='country'>
													<li class="fa fa-exclamation-circle"></li> A tener en cuenta
												</label>
												<p>Esta factura es de tipo borrador , por lo que la naturaleza contable de esta le permite ser anulada o eliminada del sistema.</p>
												<div class="col-md-3 mb-10">
												<br>
                                                    <label for="state">Proceso de cambio de estado de factura !</label>
                                                       <select class="form-control custom-select d-block w-100" id="state">
                                                            <option value="1">Validar</option>
                                                            <option value="2">Anular</option>
                                                        </select>
                                                </div>
												<div class="col-md-3 mb-10">
												
                                                    <label for="state"></label>
													<button type="button" class="btn btn-gradient-primary btn-rounded" >
													<li class="fa fa-ban"></li> procesar 
												    </button>
                                                </div>

											</div>
											<div class="col-md-3 form-group">
												<label for='country'>
													<li class="fa fa-truck "></li> Proveedor :
												</label>
												<input readonly type="text" class="form-control" name="proveedor"
													id="proveedor"
													value="<?php echo $objmovimiento->getIdproveedor_movimientos()->getRazon_social(); ?>" />
											</div>
											<div class="col-md-3 form-group">

												<label for='country'>
													<li class="fa fa-calendar-alt  "></li> Fecha de registro :
												</label>
												<input readonly type="text" class="form-control" name="proveedor"
													id="proveedor"
													value="<?php echo $objmovimiento->getIdfactura_movimientos()->getFecha_registro(); ?>" />
											</div>
											<div class="col-md-3 form-group">

												<label for='country'>
													<li class="fa fa-user-tag  "></li> Empleado que facturo :
												</label>
												<input readonly type="text" class="form-control" name="usuario"
													id="usuario"
													value="<?php echo $objusuario->getNombre_empleado(); ?>" />
											</div>

											<hr>
											<div class="col-md-12 form-group">
												<div id="smgMedicamento">
													
												</div>

												
											</div>
											<div class="col-md-12 form-group">
												<button type="button" class="btn btn-gradient-primary" data-toggle="modal"
													data-target="#exampleModal">
													<li class="fa fa-plus"></li> Agregar medicamento 
												</button>
											</div>
											<div class="col-md-12 form-group" id="elementos">
												<?php movimientosController::listadoItemFactura($objmovimiento->getIdfactura_movimientos()->getIdfactura()); ?>
											</div>

											
										</div>

									</form>
								</div>
							</div>
							<hr>

						</section>
						<div id="resultado"></div>

						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
							aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Agregar elemento ala factura</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="col-md-12 form-group">
											<div class="hk-pg-header align-items-top" id="areaImprimir">
												<div>
													<h2 class="hk-pg-title font-weight-600 mb-10">Listado de
														medicamentos disponibles.</h2>
												</div>
												<div class="w-1024p">
													<div class="form-inline">
														<div class="form-row align-items-center ">
															
														<div class="col-auto">
															    
												                <label for='country'>
													                <li class="fa fa-boxes  "></li>
																	&nbsp;&nbsp;&nbsp;Cantidad :
												                </label>
												                <input  type="text" class="form-control" 
																name="cantidad" id="cantidad"
													            value="1" />
															    

															</div>
															<div class="col-auto">
															    
												                <label for='country'>
													                <li class="fa fa-box  "></li>
																	&nbsp;&nbsp;&nbsp;Lote :
												                </label>
												                <input  type="text" class="form-control" 
																name="lote" id="lote"
													            value="lote abc-000-000" />
															    

															</div>
															
															<div class="col-auto">
															    
															    <label for=""><li class="fa fa-calendar-alt "></li>&nbsp;&nbsp;&nbsp; Fecha de vencimiento</label>
                                                                <input class="form-control" id="fecha_utilidad"
                                                                   name="fecha_utilidad"  
                                                                   type="text">
															    

															</div>

															<div class="col-auto">
															    
															    <label for=""><li class="fa fa-calendar-alt "></li>&nbsp;&nbsp;&nbsp; Precio de venta</label>
                                                                <input class="form-control" id="venta"
                                                                   name="venta"  
                                                                   type="text">
															    

															</div>
															
															<br><br><br><br>
															<div class="col-auto">
																<div class="form-group">
																	<div class="input-group mb-2">
																	<label for=""><li class="fa fa-pills"></li>&nbsp;&nbsp;&nbsp; Buscar medicamento : </label>
																		<input type="text" class="form-control w-70"
																			placeholder="Consultar  ..." id="busqueda"
																			name="busqueda">
																		<div class="input-group-append">
																			<button class="btn btn-gradient-info"
																				type="button" id="buscarMedicamento3">
																				<li class="fa fa-search"></li>
																			</button>
																		</div>
																	</div>
																</div>
															</div>
															
														</div>
													</div>
												</div>
											</div>
											<!-- style="border : solid 2px #ff0000;
                                                      padding : 4px;
                                                      width : 1054px;
                                                      height : 300px;
                                                      overflow : auto; " -->
											<div id="tablaDinamica" >
												<?php productoController::listaproductosParametrizable2('az','tp','tv',null);?>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Cerrar</button>
										
									</div>
								</div>
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

	<script src="<?php echo "//".JS_SERVER.'directory.js';  ?>"></script>
	<script src="<?php echo "//".JS_SERVER.'app.js';  ?>"></script>
	<script src="<?php echo "//".JS_SERVER.'medicamentos/module.js';  ?>"></script>
	<script src="<?php echo "//".DIST_PANGONG_SERVER.'js/daterangepicker-data.js';  ?>"></script>
	<!-- /App Libs -->
</body>

</html>