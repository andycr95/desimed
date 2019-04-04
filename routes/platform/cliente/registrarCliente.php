<?php session_start();
  header("Access-Control-Allow-Origin: *");
  /* Ruta del archivo de configuracion principal*/
  require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
  /* Rutas del directorio de controller */
  require_once(PROVIDER_PATH."clienteController.php");
  /* Rutas del directorio de model */
  require_once(MODEL_PATH."cliente.php");

  $modelCliente = new cliente(
  null,
  "CLIENTE ESTANDAR",
  null,
  null,
  null,
  $_POST['nombre_apellido_cliente'],
  $_POST['documento_cliente'],
  $_POST['genero'],
  $_POST['fecha'],
  $_POST['direccion'],
  $_POST['telefono_fijo_cliente'],
  $_POST['telefono_personal_cliente'],
  $_POST['mail'],
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null
 );
  if(clienteController::registrarCliente($modelCliente)){
  
  echo "<div class='alert alert-primary' role='alert'>
             Registro de cliente completo ! &nbsp
           </div>";
  }else{
    echo "<div class='alert alert-danger' role='alert'>
             Error no se puede registrar el cliente !    
           </div>";  
  }
 ?>