<?php session_start();
  header("Access-Control-Allow-Origin: *");
  /* Ruta del archivo de configuracion principal*/
  require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
  /* Rutas del directorio de controller */
  include_once(PROVIDER_PATH."creditoController.php");
  creditoController::listaCartera($_POST['estado'],$_POST['entidad']);
  
 ?>