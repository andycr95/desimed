<?php session_start();
  header("Access-Control-Allow-Origin: *");

  /* Ruta del archivo de configuracion principal*/
  require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
  /* Rutas del directorio de controller */
  include_once(PROVIDER_PATH."creditoController.php");
  
  //echo " -- ".$_POST['fechaActual']. " -- ".$_POST['meses1']. " -- ".$_POST['idcredito']." --- ".$_POST['meses']." --- ".$_POST['idsesion'];
 $fechaActual = str_replace ('/','-',$_POST['fechaActual']);
 $fechaPrimeraCuota = str_replace ('/','-',$_POST['meses1']);

 echo creditoController::desembolsar( $fechaActual, $fechaPrimeraCuota,$_POST['idcredito'],$_POST['meses'],$_POST['idsesion']);

 ?>