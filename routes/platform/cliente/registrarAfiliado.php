<?php session_start();
  header("Access-Control-Allow-Origin: *");
  /* Ruta del archivo de configuracion principal*/
  require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
  /* Rutas del directorio de controller */
  require_once(PROVIDER_PATH."clienteController.php");
  /* Rutas del directorio de model */
  require_once(MODEL_PATH."cliente.php");

  require_once(TOOLS_PATH."formatterString.php");
  $modelCliente = new cliente(
  null,
  "CLIENTE AFILIADO",
  $_POST['selectAsesoras'],
  $_POST['referencia_cliente'],
  now(),
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
  null
 );
  if(clienteController::registrarCredito($modelCliente)){
  
  echo "<div class='alert alert-primary' role='alert'>
             Registro de cliente completo ! &nbsp
           </div>";
  }else{
    echo "<div class='alert alert-danger' role='alert'>
             Error no se puede registrar el cliente !    
           </div>";  
  }
 ?>