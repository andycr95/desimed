<?php 
  header("Access-Control-Allow-Origin: *");
  /* Ruta del archivo de configuracion principal*/
  include_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de controller */
  require_once(PROVIDER_PATH."proveedorController.php");
  /* Rutas del directorio de model */
  require_once(MODEL_PATH."proveedor.php");

  $modelProveedor = new proveedor(
	  null,
    $_POST['razon_social'],
    $_POST['etiqueta_contacto'],
    $_POST['nombre_contacto'],
    $_POST['telefono_contacto'],
    $_POST['direccion_contacto'],
    $_POST['ciudad_contacto']
	);
  if(proveedorController::registrarProveedor($modelProveedor)){
    echo "<div class='alert alert-primary' role='alert'>
			 Registro de proveedor completo ! &nbsp <a href='
           </div>";
  
  }else{
    echo "<div class='alert alert-danger' role='alert'>
             Error no se puede registrar la proveedor contacte con su administrador!    
           </div>";
           
  }
 ?>