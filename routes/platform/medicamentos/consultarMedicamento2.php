<?php session_start();
  header("Access-Control-Allow-Origin: *");

  /* Ruta del archivo de configuracion principal*/
  require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de controller */
  include_once(PROVIDER_PATH."productoController.php");
  // $busqueda="";
  // if(strcmp($_POST['busqueda'],"")===0){
  //   $busqueda = $_POST['busqueda'];
  // }else{
    
  //   $busqueda = null;
  // }
  // echo $busqueda;
  //echo $_POST['consulta']." xxx ".$_POST['estado']." xxx ".$_POST['busqueda']."<br>";
  productoController::listaproductosParametrizable2($_POST['organizacion'],$_POST['stock'],$_POST['venta'],$_POST['busqueda']);

 ?>