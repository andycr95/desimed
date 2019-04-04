<?php session_start();
  header("Access-Control-Allow-Origin: *");
  /* Ruta del archivo de configuracion principal*/
  require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
  /* Rutas del directorio de controller */
  require_once(PROVIDER_PATH."creditoController.php");
  /* Rutas del directorio de provider */
  require_once(PERSISTENCE_PATH."incorporacionDao.php");
  /* Rutas del directorio de model */
  require_once(MODEL_PATH."observacionCredito.php");
  require_once(MODEL_PATH."cuota.php");
  
$productos = explode(",", $_POST['listaProductos'] );
$credito_array=array();
$objIn = new incorporacionDao();
 foreach ($productos as $key => $value) {
     
     $modelCuota = new cuota($_POST['id'],$productos[$key],null,null,null,null,null,null,null,null,null);
     array_push( $credito_array,$modelCuota); 
 }
 $objIn->liquidarCuotas($credito_array);

 echo "<div class='alert alert-inv alert-inv-success alert-wth-icon alert-dismissible fade show' role='alert'>
    <span class='alert-icon-wrap'><i class='zmdi zmdi-check-circle'></i></span> Pago / Pagos realizados con exito.
    
</div>";
sleep(3);
header('Location: '.PLATFORM_SERVER."/modules/credito/liquidarCuotas.php?id='".$_POST['id']);
/* echo  "<script>
    
    window.location.replace('".PLATFORM_SERVER."/modules/credito/liquidarCuotas.php?id='".$_POST['id'].");</script> "; */
  
 ?>