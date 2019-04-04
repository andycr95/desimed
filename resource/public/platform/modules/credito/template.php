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
	<script src="../../../../../resource/public/assets/cooservipress/routePlatform.js"></script>
</body>

</html>
