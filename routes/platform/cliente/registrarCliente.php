<?php session_start();
  header("Access-Control-Allow-Origin: *");
  /* Ruta del archivo de configuracion principal*/
  require_once ($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de controller */
  require_once(PROVIDER_PATH."clienteController.php");
  /* Rutas del directorio de model */
  require_once(MODEL_PATH."cliente.php");

  $modelCliente = new cliente(
    null,
    1,
    null,
    null,
    null,
    $_POST['nombre_apellido'],
    $_POST['documento'],
    $_POST['sexo'],
    $_POST['fecha_nacimiento'],
    $_POST['direccion'],
    $_POST['telefono'],
    $_POST['celular'],
    $_POST['email'],
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