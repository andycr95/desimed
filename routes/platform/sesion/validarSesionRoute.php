<?php session_start();
  header("Access-Control-Allow-Origin: *");
  require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  require_once(PROVIDER_PATH."sesionController.php");
  require_once(PROVIDER_PATH."empleadoController.php");
  $objSesion = sesionController::validarSesion($_POST['email'],$_POST['clave']);
 
  if($objSesion == false){
    echo "<div class='alert alert-danger'>
            <strong>Oh Tenemos un problema!</strong> No podemos validar los datos ingresados.
          </div>";
    session_destroy();
  }else{
    
   
   $objempleado = empleadoController::objDaoempleado($objSesion->getIdSesion());
   $_SESSION['idsesion'] = $objSesion->getIdSesion();
   $_SESSION['nombre'] = $objempleado->getNombre_empleado();
   $_SESSION['tipo'] = $objempleado->getTipo_empleado();
   //print_r($objempleado);
   $_SESSION['rol']=$objempleado->getRol_empleado();

   
   
   echo  "<script>window.location.replace('"."//".PLATFORM_SERVER."modules/dashboards/master.php');</script> ";
}
 ?>