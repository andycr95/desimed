<?php session_start();
  header("Access-Control-Allow-Origin: *");

  /* Ruta del archivo de configuracion principal*/
  require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
  /* Rutas del directorio de controller */
  require_once(PROVIDER_PATH."creditoController.php");
  /* Rutas del directorio de model */
  require_once(MODEL_PATH."observacionCredito.php");
  
  $modelObservacion = new observacionCredito(null,$_POST['descripcion'],null,$_POST['sesion'],$_POST['credito']);
    
  
  if(creditoController::registrarObservacion($modelObservacion)){

    echo "<div class='alert alert-success' role='alert'>
          Observacion guardada satisfactoriamente !    
         </div>";
       
  }else{
    echo "<div class='alert alert-danger' role='alert'>
             Error no se puede registrar la observacion !    
           </div>";          
    //echo  "<script>document.getElementsByName('validar')[0].value=0;</script> "; 
  }

 ?>