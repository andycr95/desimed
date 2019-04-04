<?php session_start();
  header("Access-Control-Allow-Origin: *");
  /* Ruta del archivo de configuracion principal*/
  require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de controller */
  require_once(PROVIDER_PATH."empleadoController.php");
  require_once(PROVIDER_PATH."sesionController.php");
  /* Rutas del directorio de model */
  require_once(MODEL_PATH."empleado.php");
  require_once(MODEL_PATH."sesion.php");
  
  $modelsesion = new sesion(
	null,
	$_POST['usuario'],
	$_POST['clave'],
	null
   );


 if(sesionController::registrarsesion($modelsesion)){
  $modelempleado = new empleado(
		null,
		$_POST['tipo'],
		$_POST['rol_empleado'],
		$_POST['descripcion'],
		$_POST['nombre_empleado'],
		$_POST['documento_empleado'],
		$_POST['direccion'],
		$_POST['celular'],
		$_POST['genero'],
		$_POST['fecha'],
		$_POST['mail'],
		sesionController::ultimoUsuarioSesion(),
		null
	   );
  if(empleadoController::registrarempleado($modelempleado)){
    

  
  echo "<div class='alert alert-primary' role='alert'>
             Registro de empleado completo ! &nbsp
           </div>";
  }else{
    echo "<div class='alert alert-danger' role='alert'>
             Error no se puede registrar el empleado !    
           </div>";  
  }

}else{
	echo "<div class='alert alert-danger' role='alert'>
             Error no se puede registrar el empleado !    
           </div>";  

}
 ?>