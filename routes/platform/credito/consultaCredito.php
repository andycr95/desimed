<?php session_start();
  header("Access-Control-Allow-Origin: *");

  /* Ruta del archivo de configuracion principal*/
  require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
  /* Rutas del directorio de controller */
  include_once(PROVIDER_PATH."creditoController.php");

  //echo $_POST['consulta']." xxx ".$_POST['estado']." xxx ".$_POST['busqueda']."<br>";
  creditoController::listaCreditos($_POST['consulta'],$_POST['estado'],$_POST['busqueda']);

 ?>