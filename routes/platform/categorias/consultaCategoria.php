<?php session_start();
  header("Access-Control-Allow-Origin: *");

  /* Ruta del archivo de configuracion principal*/
  require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de controller */
  include_once(PROVIDER_PATH."categoriaController.php");
  // $busqueda="";
  // if(strcmp($_POST['busqueda'],"")===0){
  //   $busqueda = $_POST['busqueda'];
  // }else{
    
  //   $busqueda = null;
  // }
  // echo $busqueda;
  //echo $_POST['consulta']." xxx ".$_POST['estado']." xxx ".$_POST['busqueda']."<br>";
  categoriaController::listacategoriasParametrizable($_POST['organizacion'],$_POST['busqueda']);

 ?>