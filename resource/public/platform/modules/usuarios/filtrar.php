<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/credito/config/directory.php');
include_once(PERSISTENCE_PATH."usuarioDao.php");
include_once(PERSISTENCE_PATH."sesionDao.php");
include_once(PERSISTENCE_PATH."sucursalDao.php");
include_once(PERSISTENCE_PATH."funcionesDao.php");


//$data=Session::getInstance();
if(!isset($_SESSION['idsesion'])){
    header('Location: '.$RouteViewLogin);
    exit;
 }

/**** var Implement ****************/
 $objSesionDao = new sesionDao();

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
						<h1 class="page-header text-overflow">Usuarios - Empleados COOSERVIPRESS</h1>
					</div>
					<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					<!--End page title-->


					<!--Breadcrumb-->
					<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					<ol class="breadcrumb">
						<li><a href="#" id="vRouteTitle" title="vInicio"><i class="demo-pli-home"></i></a></li>
						<li>administracion</li>
						<li class="active">Usuarios</li>
					</ol>
					<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					<!--End breadcrumb-->

				</div>

<?php

$objUsuario = new usuarioDao();
$objSesion = new sesionDao();
$objSucursal = new sucursalDao();
$objFunciones = new funcionesDao();
$arrayUsuario = $objUsuario->listadoUsuarios();


?>
				<!--Page content-->
				<!--===================================================-->
				<div id="page-content">

					<!-- Search -->
					<!--===================================================-->
					<div class="row pad-btm">
						<form action="#" method="post" class="col-xs-12 col-sm-10 col-sm-offset-1 pad-hor">
							<div class="input-group mar-btm">
								<input type="text" name="buscar" placeholder="Buscar usuario xyz ..." class="form-control input-lg">
								<span class="input-group-btn">
									<button class="btn btn-primary btn-lg" type="button" id="vRouteActionInput" name="aBuscarUsuario">Buscar</button>
								</span>
							</div>
						</form>
					</div>

					<!-- Toolbar -->
					<!--===================================================-->
					<div class="pad-all text-center">
						<div class="box-inline mar-btm pad-rgt">
							<!-- Solo los  :
							 <div class="select">
								 <select id="demo-ease">
									 <option value="internet" selected="">Todas las Sucursales</option>
									 <option value="musics">Sucursal A</option>
									 <option value="sports">Sucursal B</option>
								 </select>
							 </div> -->
						</div>
						<div class="box-inline mar-btm">
							Ordenar por :
							<div class="select">
								<select id="demo-ease">
									<option value="creacion">Fecha de creacion</option>
									<option value="az">Orden alfabetico A-Z</option>
									<option value="za">Orden alfabetico Z-A</option>
								</select>
							</div>
						</div>
						&nbsp;
						<div class="box-inline mar-btm">
							Estado :
							<div class="select">
								<select id="demo-ease">
									<option value="todos">Todos</option>
									<option value="linea">En Linea</option>
									<option value="activos">Solo activos</option>
									<option value="iantivos">Solo inactivos</option>
								</select>
							</div>
						</div>
						<button class="btn btn-default" id="vRouteActionInput" name="aFiltrarUsuario">Filtar</button>
					</div>

					<hr class="new-section-xs bord-no">

					<div class="panel">
						<div class="panel-body">
							<div class="table-responsive">
								<div class="col-sm-6 table-toolbar-left">
									<?php  
					if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){
						 echo "<a href='".$RouteViewApp."module/usuarios/agregar.php"."' class='btn btn-purple'><i class='demo-pli-add'></i> Agregar nuevo usuario.</a>";
					}
				?>
								</div>
								<table class="table table-striped table-vcenter">
									<thead>
										<tr>
										    <th>Foto</th>
											<th>ID</th>
											<th>Nombre Completo</th>
											<th>Sucursal</th>
											<th>Ciudad</th>
											<th>Ultima sesion</th>
											<th>Estado</th>
											<th class="text-center">Acciones</th>
										</tr>
									</thead>
									<tbody>
										<?php

			if($arrayUsuario != false){
				foreach ($arrayUsuario as $key => $value) {
											 
					$Sucursal=$objSucursal->sucursalId($arrayUsuario[$key]->getIdSucursal());
					$Sesion = $objSesion->usuarioIdSesion($arrayUsuario[$key]->getidUsuario());

				  echo "<tr>";
								echo  "<td>
								            <img class='img-responsive img-sm' src='https://definicion.mx/wp-content/uploads/2013/11/usuario.jpg' alt='thumbs'>
								        </td>";
						   echo "
							 <td>".$arrayUsuario[$key]->getidUsuario()."</td>
							 
							<td><a class='btn-link' href='#'>".$arrayUsuario[$key]->getNombreApellidoUsuario()."</a>
							</td>

							<td><span class='text-muted'>".$Sucursal->getetiquetaSucursal()."</span>
							</td>

							 <td>".$Sucursal->getidCiudad()."</td>
							 
							<td><a href='#' class='btn-link'>".$Sesion->getUltimaSesion()."</a>
							</td>";

							 if($Sesion->getEstado() == 1){
								echo "<td>
										 <div class='label label-table label-success'>Online</div>
									 </td>";

							 }elseif ($Sesion->getEstado() == 2) {
								 echo "<td>
										 <div class='label label-table label-default'>Desconectado</div>
									 </td>";
							 }elseif ($Sesion->getEstado() == 3) {
							 echo "<td>
									 <div class='label label-table label-danger'>Inactivo</div>
								 </td>";
								 }

						 echo "	<td class='min-width'>
									 <div class='btn-groups'>";			

									 if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){
										 echo "<a href='#' id='vRouteAction' title='aVerUsuario' class='btn btn-icon demo-pli-file-text-image icon-lg add-tooltip'
										 data-original-title='Ver mas' data-container='body'>
										 </a>";
									 }

									 if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){
										 echo "<a href='#' id='vRouteAction' title='aModificarUsuario' class='btn btn-icon demo-pli-pen-5 icon-lg add-tooltip'
										 data-original-title='Editar Usuario' data-container='body'>
										 </a>";
									 }

									 if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){
										 echo "<a href='#' id='vRouteAction' title='aEliminarUsuario' class='btn btn-icon demo-pli-gear icon-lg add-tooltip'
										 data-original-title='Desactivar Usuario' data-container='body'>
										 </a>";
									 }

									 if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){
										 echo "
										 <a href='#' id='vRouteAction' title='aDesactivarUsuario' class='btn btn-icon demo-pli-trash icon-lg add-tooltip'
										 data-original-title='Eliminar' data-container='body'>
										 </a>";
									 }
							 echo  "</div>
								 </td>
							</tr>";		
						 }
					 } 
					 ?>
									</tbody>
								</table>
							</div>
						</div>
						<!--===================================================-->
						<!--End Posts Table-->
					</div>
					<!--===================================================-->
					<!--End page content-->
				</div>
			</div>
			<!--===================================================-->
			<!--END CONTENT CONTAINER-->
			<!--ASIDE-->
			<!--===================================================-->

			<!--===================================================-->
			<!--END ASIDE-->


			<!--MAIN NAVIGATION-->
			<!--===================================================-->

			<?php  include_once("layout/asideprofile/asideprofile.php");  ?>
			<!--===================================================-->
			<!--END MAIN NAVIGATION-->
			<!--===================================================-->

		</div>

		<footer id="footer">

			<div class="show-fixed pad-rgt pull-right">
				You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>
			</div>



			<div class="hide-fixed pull-right pad-rgt">
				14GB of <strong>512GB</strong> Free.
			</div>



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
	<script src="../../../../../resource/public/assets/cooservipress/routePlatform.js"></script>
</body>

</html>

<!--===================================================-->
<!--END CONTENT CONTAINER-->