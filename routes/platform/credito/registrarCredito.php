<?php session_start();
  header("Access-Control-Allow-Origin: *");
  /* Ruta del archivo de configuracion principal*/
  require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  
  /* Rutas del directorio de controller */
  require_once(PROVIDER_PATH."creditoController.php");
  /* Rutas del directorio de model */
  require_once(MODEL_PATH."credito.php");
  echo "xxxxx test";
  $modelCredito = new credito(null,
  $_POST['idcliente'],
  $_POST['codigo_doc_credito'],
  $_POST['tipoCredito'],
  $_POST['monto'],
  $_POST['idtarifa'],
  $_POST['plazo'],
  $_POST['cuota'],
  $_POST['aval_credito'],
  $_POST['seguro_credito'],
  $_POST['administracion_credito'],
  $_POST['monto'],
  0,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  null,
  $_POST['sucursalForm'],
  $_POST['entidadForm'],
  null,
  $_POST['idsesion'],
  $_POST['modalidad'],
  $_POST['tipo_cuenta'],
  $_POST['entidad'],
  $_POST['n_cuenta'],
  null,
  $_POST['tasa_ofrecidad'],
  $_POST['entidad1'],
  $_POST['nit1'],
  $_POST['tipo_cuenta1'],
  $_POST['cuenta1'],
  $_POST['monto1'],
  $_POST['cuota1'],
  $_POST['entidad2'],
  $_POST['nit2'],
  $_POST['tipo_cuenta2'],
  $_POST['cuenta2'],
  $_POST['monto2'],
  $_POST['cuota2'],
  $_POST['entidad3'],
  $_POST['nit3'],
  $_POST['tipo_cuenta3'],
  $_POST['cuenta3'],
  $_POST['monto3'],
  $_POST['cuota3']
 );

  if(creditoController::registrarCredito($modelCredito)){
    $id=creditoController::ultimoCredito();
    $directorio=DOCUMENT_PATH.'/'.$id;
  
    if(!is_dir($directorio)){
        mkdir($directorio, 0755);}
    $temp_archivo = $_FILES["documento1"]["tmp_name"];
    $temp_archivo2 = $_FILES["documento2"]["tmp_name"];
    $temp_archivo3 = $_FILES["documento3"]["tmp_name"];
    $temp_archivo4 = $_FILES["documento4"]["tmp_name"];
    $temp_archivo5 = $_FILES["documento5"]["tmp_name"];
    $f1=move_uploaded_file($temp_archivo,$directorio . "/" . "documento1.pdf");
    $f2=move_uploaded_file($temp_archivo2,$directorio . "/" . "documento2.pdf");
    $f3=move_uploaded_file($temp_archivo3,$directorio . "/" . "documento3.pdf");
    $f4=move_uploaded_file($temp_archivo4,$directorio . "/" . "documento4.pdf");
    $f5=move_uploaded_file($temp_archivo5,$directorio . "/" . "documento5.pdf");
    echo "<div class='alert alert-primary' role='alert'>
             Registro de credito completo ! &nbsp <a href='".PLATFORM_SERVER.'modules/credito/verFicha.php?id='.$id."'  class='btn btn-gradient-primary text-white'>Ver folio del credito registrado</a>
           </div>";
  
  }else{
    echo "<div class='alert alert-danger' role='alert'>
             Error no se puede registrar el credito !    
           </div>";
           
  }
 ?>