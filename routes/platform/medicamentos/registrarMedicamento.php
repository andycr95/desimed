<?php 
  header("Access-Control-Allow-Origin: *");
  /* Ruta del archivo de configuracion principal*/
  include_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de controller */
  require_once(PROVIDER_PATH."productoController.php");
  /* Rutas del directorio de model */
  require_once(MODEL_PATH."producto.php");

  $modelProducto = new producto(
	  null,
	  $_POST['proveedor'],
	  $_POST['laboratorio'],
	  $_POST['categorizacion'],
	  $_POST['tipo_presentacion'],
	  $_POST['codigo_barras'],
	  $_POST['etiqueta_comercial'],
	  $_POST['descripcion'],
	  $_POST['valor'],
	  $_POST['descuento'],
	  $_POST['iva'],
	  null,
	  $_POST['tipo_venta'],
	  $_POST['stock_minimo'],
	  $_POST['stock_Actual'],
	  $_POST['naturaleza'],
	  $_POST['ganancia']

 );
 //print_r($modelProducto);
 $url2="//".PLATFORM_SERVER."modules/movimientos/agregar.php";
 
 echo $url2;
 if(productoController::registrarProducto($modelProducto)){
	 
	$url="//".PLATFORM_SERVER."modules/medicamentos/verFicha.php?id=".productoController::ultimoIdmedicamento();
	echo $url;
    echo "<div class='alert alert-primary' role='alert'>
			 Registro de producto completo ! &nbsp <a href='". $url."'  class='btn btn-gradient-primary text-white'>Ver ficha del producto </a>
			 <a href='". $url2."'  class='btn btn-gradient-success text-white'>Registrar movimientos (Stock) </a>
           </div>";
  
  }else{
    echo "<div class='alert alert-danger' role='alert'>
             Error no se puede registrar el producto contacte con su administrador!    
           </div>";
           
  }
 ?>