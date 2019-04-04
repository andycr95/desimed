<?php 
include_once ($_SERVER['DOCUMENT_ROOT'].'/credito/config/directory.php');
require_once(PERSISTENCE_PATH."usuarioDao.php");
require_once(PERSISTENCE_PATH."sesionDao.php");
require_once(PERSISTENCE_PATH."funcionesDao.php");
$objFunciones= new funcionesDao();
?>
<nav id="mainnav-container">
	<div id="mainnav">
		<!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
		<!--It will only appear on small screen devices.-->
		<div class="mainnav-brand">
			<a href="<?php echo $RouteViewIndexPlatform; ?>" class="brand">
				<img src="<?php echo $RouteViewAssets.'nifty/img/logo.png'; ?>" alt="Nifty Logo" class="brand-icon">
				<span class="brand-text">Version Movil</span>
			</a>
			<a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
		</div>
		<div id="mainnav-menu-wrap">
			<div class="nano">
				<div class="nano-content">

					<!--Profile Widget-->
					<!--================================-->
					<div id="mainnav-profile" class="mainnav-profile">
						<div class="profile-wrap text-center">
							<div class="pad-btm">
								<img class="img" src="<?php echo $RouteViewAssets.'nifty/img/bg-img/cooservipress.jpg'; ?>" alt="Profile Picture"
								 width="190" height="80" alt="User" style="border-radius:5px">
							</div>
							<a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
								<span class="pull-right dropdown-toggle">
									<i class="dropdown-caret"></i>
								</span>
								<p class="mnp-name">ADMINISTRADOR</p>
								<span class="mnp-desc">Miguel angel claros</span>
							</a>
						</div>
						<div id="profile-nav" class="collapse list-group bg-trans">
							<a href="#" class="list-group-item" id="vRouteView" title="vPerfil">
								<i class="demo-pli-male icon-lg icon-fw"></i>Ver perfil
							</a>
							<a href="#" class="list-group-item" id="vRouteView" title="vConfiguracion">
								<i class="demo-pli-gear icon-lg icon-fw"></i>Configuracion
							</a>
							<a href="#" class="list-group-item" id="vRouteView" title="vAyuda">
								<i class="demo-pli-information icon-lg icon-fw"></i>Ayuda
							</a>
							<a href="#" class="list-group-item" id="vRouteView" title="aCerraSesion">
								<i class="demo-pli-unlock icon-lg icon-fw"></i>Cerrar sesion
							</a>
						</div>
					</div>

					<ul id="mainnav-menu" class="list-group">

						<!--Category name-->
						<li class="list-header">Menu de opciones</li>

						<!--Menu list item-->
						<li class="active-sub">
							<a href="<?php echo $RouteViewIndexPlatform; ?>" id="" title="Inicio">
								<i class="demo-pli-home"></i>
								<span class="menu-title">Inicio</span>

							</a>
						</li>
						<?php 
						
						if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){ ?>
						<li>
							<a href='#'>
								<i class='fa fa-cubes'></i>
								<span class='menu-title'>Administracion</span>
								<i class='arrow'></i>
							</a>

							<ul class='collapse'>
								<?php 
								if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){ ?>
								<li>
									<a href='".$RouteViewApp."module/usuarios/index.php'>
									<i class='fa fa-users '></i>Usuarios
									</a>
								</li>
								<?php }

								if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){
								?>
								<li>
									<a href='".$RouteViewApp."module/pagadurias/index.php'>
									<i class='fa fa-tags '></i>Pagadurias
									</a>
								</li>
								<?php }

								if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){?>
								<li>
									<a href='".$RouteViewApp."module/sucursales/index.php'>
									<i class='fa fa-building '></i>Sucursales
									</a>
								</li>
								<?php }
								?>
							</ul>
						</li>
						<?php } ?>

						<?php 
						
						if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){?>
						<li>
							<a href='".$RouteViewApp."module/clientes/index.php'>
								<i class='fa fa-address-book-o'></i>
								<span class='menu-title'>Clientes</span>
							</a>
						</li>
						<?php }

						if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){?>
						<li>
							<a href='#'>
								<i class='fa fa-handshake-o'></i>
								<span class='menu-title'>Credito</span>
								<i class='arrow'></i>
							</a>

							<ul class="collapse">
								<li>
								    <a href='".$RouteViewApp."module/credito/index.php' i>
								       <i class='fa fa fa-calendar-check-o'></i>Listado de creditos
								    </a>
								</li>

								<?php 
						        if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){?>

								<li><a href='".$RouteViewApp."module/credito/solicitud.php'><i class='fa fa-line-chart'></i>Solicitud de credito</a>
								</li>
								<?php }

						        if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){?>
								<li>
								    <a href='".$RouteViewApp."module/credito/simulador.php'>
									   <i class='fa fa-sliders'></i>Simulador
									</a>
								</li>
								<?php } ?>
							</ul>
						</li>
						<?php } 

						if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){?>
						<li>
							<a href='".$RouteViewApp."module/pago/index.php'>
								<i class='fa fa-credit-card'></i>
								<span class='menu-title'>Incorporacion</span>
							</a>
						</li>
						<?php } 

						if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){?>
						<li>
							<a href='".$RouteViewApp."module/cartera/index.php'>
								<i class='fa fa-calendar'></i>
								<span class='menu-title'>Cartera</span>
							</a>
						</li>
						<?php } 

						if($objFunciones->validarFuncion( $_SESSION['rol'],8) == 1){?>
						<li class='list-divider'></li>
						<li>
							<a href='#' id='vRouteView' title='vConfiguracion'>
								<i class='fa fa-gears'></i>
								<span class='menu-title'>Configuracion</span>
							</a>
						</li>
						<?php } ?>
					</ul>

				</div>
			</div>
		</div>
		<!--================================-->
		<!--End menu-->

	</div>
</nav>