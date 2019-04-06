<?php 
  header("Access-Control-Allow-Origin: *");
  /* Ruta del archivo de configuracion principal*/
  include_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de controller */
  require_once(PROVIDER_PATH."categoriaController.php");
  /* Rutas del directorio de model */
  require_once(MODEL_PATH."categoria.php");

  $modelCategoria = new categoria(
	  null,
	  $_POST['name']
	);
  if(categoriaController::registrarCategoria($modelCategoria)){
    echo "<div class='alert alert-primary' role='alert'>
			 Registro de categoria completo ! &nbsp <a href='
           </div>";
  
  }else{
    echo "<div class='alert alert-danger' role='alert'>
             Error no se puede registrar la categoria contacte con su administrador!    
           </div>";
           
  }
 ?>