<?php 
  header("Access-Control-Allow-Origin: *");
  /* Ruta del archivo de configuracion principal*/
  include_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de controller */
  require_once(PROVIDER_PATH."productoController.php");
  require_once(PROVIDER_PATH."movimientosController.php");
  /* Rutas del directorio de model */
  require_once(MODEL_PATH."lote.php");
  require_once(MODEL_PATH."item_factura.php");

  $modelfactura = new item_factura(
	  null,
	  $_POST['idfactura'],
	  $_POST['idproducto'],
    $_POST['cantidad'],
    $_POST['venta']
 );

 //print_r($modelfactura);

 
  if(movimientosController::registrarItemFactura($modelfactura)){
    $modelLote = new lote(
      null,
      $_POST['lote'],
      $_POST['idproducto'],
      $_POST['cantidad'],
      $_POST['fecha'],
  	  $_POST['idfactura'],
      movimientosController::ultimoIditem()
       );
       
    if(movimientosController::registrarLote($modelLote)){
		
		echo "<div class='alert alert-primary' role='alert'>
				 Elemento agregado ! 
			   </div>";
		}
		
  }else{
    echo "<div class='alert alert-danger' role='alert'>
             Error no se puede registrar la el elemento a la factura contacte con su administrador!    
           </div>";
   }
 ?>