<?php session_start();
  header("Access-Control-Allow-Origin: *");
  /* Ruta del archivo de configuracion principal*/
  require_once ($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de controller */
  require_once(PROVIDER_PATH."proveedorController.php");
  proveedorController::listaproveedoresParametrizable($_POST['consulta'],$_POST['busqueda']);
 
 ?>