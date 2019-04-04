<?php session_start();
  header("Access-Control-Allow-Origin: *");

  /* Ruta del archivo de configuracion principal*/
  require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
  /* Rutas del directorio de controller */
  include_once(PROVIDER_PATH."creditoController.php");

 
  creditoDao::aprobar($_POST['idsesion'],$_POST['idcredito']);
  echo "<div class='alert alert-inv alert-inv-success alert-wth-icon alert-dismissible fade show' role='alert'>
  <span class='alert-icon-wrap'><i class='zmdi zmdi-check-circle'></i></span> Credito Aprobado satisfactoriamente.
</div>";
  
 ?>