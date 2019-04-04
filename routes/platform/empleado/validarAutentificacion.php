<?php 

require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  require_once(PROVIDER_PATH."sesionController.php");
 
  $objSesion = sesionController::validarSesion($_POST['email'],$_POST['clave']);
 
  if($objSesion == false){
    echo "<div class='alert alert-success'>
            <strong>Usuario y clave permitidos!</strong> .
          </div>";
    
  }else{
	echo "<div class='alert alert-danger'>
	           <strong>Oh Tenemos un problema!</strong> El usuario ya existe o no es permitido en la plataforma.
          </div>";
  }



?>
