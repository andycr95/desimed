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
    "Afiliado",
    $_POST['idempleado'],
    $_POST['registro'],
    $_POST['fecha_registro'],
    $_POST['nombre_apellido'],
    $_POST['documento'],
    $_POST['sexo'],
    $_POST['fecha_nacimiento'],
    $_POST['direccion'],
    $_POST['telefono'],
    $_POST['celular'],
    $_POST['email'],
    $_POST['dispacidad'],
    $_POST['extracto'],
    $_POST['nombre_beneficiario'],
    $_POST['sexo_beneficiario'],
    $_POST['documento_beneficiario'],
    $_POST['parentesco_beneficiario'],
    $_POST['discapacidad_beneficiario'],
    $_POST['discapacidad_desc_beneficiario'],
    $_POST['nombre_beneficiario2'],
    $_POST['sexo_beneficiario2'],
    $_POST['documento_beneficiario2'],
    $_POST['parentesco_beneficiario2'],
    $_POST['discapacidad_beneficiario2'],
    $_POST['discapacidad_desc_beneficiario2'],
    $_POST['nombre_beneficiario3'],
    $_POST['sexo_beneficiario3'],
    $_POST['documento_beneficiario3'],
    $_POST['parentesco_beneficiario3'],
    $_POST['discapacidad_beneficiario3'],
    $_POST['discapacidad_desc_beneficiario3'],
    $_POST['nombre_beneficiario4'],
    $_POST['sexo_beneficiario4'],
    $_POST['documento_beneficiario4'],
    $_POST['parentesco_beneficiario4'],
    $_POST['discapacidad_beneficiario4'],
    $_POST['discapacidad_desc_beneficiario4'],
    $_POST['nombre_afiliacion'],
    $_POST['sexo_afiliacion'],
    $_POST['documento_afiliacion'],
    $_POST['parentesco_afiliacion'],
    $_POST['discapacidad_afiliacion'],
    $_POST['discapacidad_desc_afiliacion'],
    $_POST['nombre_afiliacion2'],
    $_POST['sexo_afiliacion2'],
    $_POST['documento_afiliacion2'],
    $_POST['parentesco_afiliacion2'],
    $_POST['discapacidad_afiliacion2'],
    $_POST['discapacidad_desc_afiliacion2'],
    $_POST['diabetes'],
    $_POST['hipertension'],
    $_POST['enf_cardiacas'],
    $_POST['estres'],
    $_POST['osteoporosis'],
    $_POST['artitis'],
    $_POST['cancer'],
    $_POST['alergias'],
    $_POST['migrana'],
    $_POST['ets'],
    $_POST['anemia'],
    $_POST['pulmonia'],
    $_POST['otras_cual'],
    1
 );
  if(clienteController::registrarAfiliado($modelCliente)){
  
  echo "<div class='alert alert-primary' role='alert'>
             Registro de cliente completo ! &nbsp
           </div>";
  }else{
    echo "<div class='alert alert-danger' role='alert'>
             Error no se puede registrar el cliente !    
           </div>";  
  }
 ?>