<?php 
  header("Access-Control-Allow-Origin: *");
  /* Ruta del archivo de configuracion principal*/
  include_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de controller */
  require_once(PROVIDER_PATH."productoController.php");
  require_once(PROVIDER_PATH."movimientosController.php");
  /* Rutas del directorio de model */
  require_once(MODEL_PATH."producto.php");
  require_once(MODEL_PATH."factura.php");
  require_once(MODEL_PATH."movimientos.php");

  $modelfactura = new factura(null, null, $_POST['idusuario'], $_POST['fecha_utilidad'], 0,  $_POST['tipo_factura'], "BORRADOR" );

  if(movimientosController::registrarFactura($modelfactura)){
	  $id = movimientosController::ultimoIdfactura();
	  $modelmovimiento = new movimientos(null,$_POST['proveedor'],$id );   
    if(movimientosController::registrarMovimiento($modelmovimiento)){
		$url ="agregar.php?idmovimiento=".movimientosController::ultimaIdmovimiento();
   
		echo "<div class='alert alert-primary' role='alert'>
				 Registro de factura completo ! &nbsp <a href='". $url."'  class='btn btn-gradient-primary text-white'><li class='fa fa-file-invoice'></li> Revisar factura </a>
			   </div>";
	  
	    }
  
  }else{
    echo "<div class='alert alert-danger' role='alert'>
             Error no se puede registrar la factura contacte con su administrador!    
           </div>";
           
   }
 ?>