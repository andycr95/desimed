<?php
  /* Ruta del archivo de configuracion principal*/
  //require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  /* Rutas del directorio de persistencia */
  require_once(PERSISTENCE_PATH."creditoDao.php");
  require_once(PERSISTENCE_PATH."cuotaDao.php");
  require_once(PERSISTENCE_PATH."sucursalDao.php");
  require_once(PERSISTENCE_PATH."observacioncreditoDao.php");
  require_once(PERSISTENCE_PATH."tarifaDao.php");

  require_once(PROVIDER_PATH."usuarioController.php");
class creditoController
{

     /*Retorno un obj de clase   */
  public static function objCredito($id_cliente){ 
    return creditoDao::creditoId($id_cliente);}

    public static function verFicha($id){
        $url =PLATFORM_SERVER."modules/credito/verFicha.php?id=".$id;
         /* Redirect browser */
        echo  "<script>window.location.replace('".$url."');</script> ";
     }

     public static function verFichaIncorporacion($id){
        $url =PLATFORM_SERVER."modules/credito/incorporacion.php?id=".$id;
         /* Redirect browser */

        echo  "<script>window.location.replace('".$url."');</script> ";
     }

    public static function interesesMorosos($id){ 
        return incorporacionDao::interesesMorosos($id);}

    public static function cuotasMorosas($idcredito){ 
        return creditoDao::cuotasMorosas($idcredito);}


    public static function desembolsar($fechaDesembolso,$fechaPrimeraCuota,$idcredito,$meses,$idsesion){ 
        //echo "Primera cuota ".$fechaPrimeraCuota;
        $objCredito = creditoController::objCredito($idcredito);
        $arraySql = array();
        $sql_desembolsar="
        UPDATE credito
        SET fecha_desembolso_credito='".$fechaDesembolso."',
        fecha_primera_cuota_credito='".$fechaPrimeraCuota."' , estado_credito = 3  WHERE idcredito=".intval($idcredito);
        //echo $idcredito+" ";
        //echo $sql_desembolsar."<br><br><br><br>";


            
            $fechaFinal = " DATE_SUB('".$fechaPrimeraCuota."',INTERVAL 1 MONTH)";
            $cuota = $objCredito->getCuota();
            $capitalVivo = $objCredito->getCapitalVivo();
            //echo "<br> capital vivo ".$objCredito->getCapitalVivo();
            $capitalAmortizado = 0;
            $amortizacion = 0;
            $interes = "";
            //$tasa = tarifaDao::valorTarifa($objCredito->getIdTarifa(),$objCredito->getTipoCredito());
            $tasa=$objCredito -> getTasa_ofrecidad();
            $tasa = floatval($tasa) / 100;
            echo "<br> ".$tasa."<br> ";
            echo "<br> capital vivo".$capitalVivo;
            $intereses_anticipados = floatval($tasa) * floatval($capitalVivo);
           // $suma = floatval($objCredito->getAvalCredito()) + floatval($objCredito->getSeguroCredito()) + floatval($objCredito->getAdministracionCredito());
            $intereses_anticipados=floatval($meses)* (floatval($intereses_anticipados));
            $sql_pago = "insert into pago values (null ,".$objCredito->getIdCredito().",'".$fechaDesembolso."','INTERESES ANTICIPADOS INICIALES','".$fechaDesembolso."' ,".$fechaFinal.",".$intereses_anticipados.",CURRENT_TIMESTAMP(),".$idsesion.",NULL,NULL,1)";
            //echo $sql_pago."<br><br><br><br>";
            $arraySql ['desembolsar'] = $sql_desembolsar;
            $arraySql ['pago'] = $sql_pago;


         
        for ($i=0; $i <  $objCredito->getPlazo(); $i++) { 
            
            $fecha = " DATE_ADD('".$fechaPrimeraCuota."',INTERVAL ".$i." MONTH)";
            $interes =  floatval($tasa) * floatval($capitalVivo) ;
            $amortizacion = floatval($cuota) - floatval($interes) ;
            $capitalVivo = floatval($capitalVivo) - floatval($amortizacion);
            $capitalAmortizado =floatval($capitalAmortizado) + floatval($amortizacion);
            //echo "i ".$interes." a  ".$amortizacion." c ".$capitalVivo."<br>";

         $sql_cuota ="insert into cuota values (".$objCredito->getIdCredito().",
         ".(intval($i)+1).",".$fecha.",".$fecha.",NULL,".$cuota.",".round($interes,2).","
         .round($amortizacion,2).",".round($capitalVivo,2).",".round($capitalAmortizado,2)."
          ,'NO PAGADO')";



          $clave ="sqlCuota".strval($i);
          $arraySql [$clave] = $sql_cuota;  
          echo $sql_cuota."<hr><br><br><br>";

         


        }

        //print_r($arraySql);
        return creditoDao::desembolsar($arraySql);
    }

    /**/
  public static function aprobar($idsesion,$idcredito){return creditoDao::aprobar($idsesion,$idcredito);}



    /**/
  public static function registrarCredito($model){return creditoDao::crearCredito($model);}

  public static function seleccionarTarifa($id){return tarifaDao::seleccionarTarifa($id);}


    /* */
  public static function nCredito($estado){return creditoDao::nCredito($estado);}

    /* */
  public static function ultimoCredito(){return creditoDao::ultimoCredito();}

  /*Retorno un listado de usuarios a partir del tipo de consulta y el filtro de estado */
  public static function listaCreditos($tipoConsulta,$estado,$busqueda){
     
      if(strlen(trim($busqueda))==0){ $busqueda=null;  }
      $arrayCredito = creditoDao::listaCreditos($tipoConsulta,$estado,$busqueda);
      if($arrayCredito != false){
        echo "<div class='table-responsive'>
        <table class='table table-sm table-hover mb-0'>
            <thead>
                <tr>
                    <th style='font-size: 12px;'>Referencia</th>
                    <th style='font-size: 12px;'>Tipo</th>
                    <th style='font-size: 12px;'>Monto</th>
                    <th style='font-size: 12px;'>Cliente</th>
                    <th style='font-size: 12px;'>Sucursal</th>
                    <th style='font-size: 12px;'>Asesor </th>
                    <th style='font-size: 12px;'> Fecha de registro</th>
                    <th style='font-size: 12px;'>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>";
               foreach ($arrayCredito as $key => $value) {
               echo"
                    <td>".$arrayCredito[$key]->getCodigoDocCredito()."</td>
                    <td style='font-size: 11px;'>".$arrayCredito[$key]->getTipoCredito()."</td>
                    <td>".$arrayCredito[$key]->getMonto()."</td>
                    <td style='font-size: 11px;'>".$arrayCredito[$key]->getIdCliente()."</td>
                    <td>".$arrayCredito[$key]->getIdSucursal()."</td>
                    <td style='font-size: 11px;'>".usuarioController::objDaoUsuario($arrayCredito[$key]->getIdSesionUsuarioCreacion())->getNombreApellidoUsuario()."</td>
                    <td style='font-size: 11px;'>".$arrayCredito[$key]->getRegistro()."</td>
                    ";
                    //echo "xx-".$arrayCredito[$key]->getEstado();
               
                    if($arrayCredito[$key]->getEstado() == 0){
                        echo "<td><span class='badge badge-danger'>Inactivo</span></td>";
                    }elseif($arrayCredito[$key]->getEstado() == 1){
                      echo "<td><span class='badge badge-secondary'>Pre-aprobado</span></td>";
                    }elseif($arrayCredito[$key]->getEstado() == 2){
                      echo "<td><span class='badge badge-success'>Aprobado</span></td>";
                    }elseif($arrayCredito[$key]->getEstado() == 3){
                        echo "<td><span class='badge badge-warning'>Desembolsado</span></td>";
                    }elseif($arrayCredito[$key]->getEstado() == 4){
                        echo "<td><span class='badge badge-primary'>Finalizado</span></td>";
                    }
                    echo "
                    <td>
                        <button type='button' id='verFicha' name='verFicha' value='".$arrayCredito[$key]->getIdCredito()."' class='btn btn-icon btn-icon-circle btn-gradient-success btn-icon-style-2 btn-lg' title='Ver ficha' >
                                <i class='fa fa-calendar-check fa-5x'></i>
                        </button> 
                    </td>
                </tr>";

               }  
             echo "
            </tbody>
        </table>
    </div>";

      }else{
          echo "<div class='alert alert-danger' role='alert'>
          <h4 class='lert-heading mb-10'>!OHS tenemos problemas.</h4>
          <p>No hay creditos que correspondan a la consulta actual.</p>
          <hr class='hr-soft-success'>
          
      </div>";
      }
      
     
   }

    /*Retorno un listado de usuarios a partir del tipo de consulta y el filtro de estado */
  public static function listaCartera($tipoConsulta,$entidad){
     
    
    $arrayCredito = creditoDao::listaCartera($tipoConsulta,$entidad);
    if($arrayCredito != false){
      echo "<div class='table-responsive'>
      <table class='table table-sm table-hover mb-0'>
          <thead>
              <tr>
                  <th>Estado</th>
                  <th>Folio </th>
                  <th>Pagaduria</th>
                  <th>Ultimo pago</th>
                  <th>Meses atrasados</th>
                  <th>Nombre</th>
                  <th>Documento</th>
                  <th>Telefono</th>
              </tr>
          </thead>
          <tbody>
              <tr>";

             foreach ($arrayCredito as $key => $value) {
                  $estado = '';
                  if($arrayCredito[$key]->getCuota() == 0){
                    $estado = "<span class='badge badge-success'>A tiempo</span>";
                  }elseif($arrayCredito[$key]->getCuota()== 1){
                    $estado = "<span class='badge badge-danger'>En mora</span>";
                  } 
             echo"
                  <td>".$estado."</td>
                  <td>".$arrayCredito[$key]->getIdCredito()."</td>
                  <td>".$arrayCredito[$key]->getIdEntidad()."</td>
                  <td>".$arrayCredito[$key]->getFechaCuota()."</td>
                  <td>".$arrayCredito[$key]->getCuota()."</td>
                  <td>".$arrayCredito[$key]->getNombre()."</td>
                  <td>".$arrayCredito[$key]->getDocumento()."</td>
                  <td>".$arrayCredito[$key]->getTelefono()."</td>
                  <td>
                      <button type='button' id='verFichaCredito' name='verFichaCredito' value='".$arrayCredito[$key]->getIdCredito()."' class='btn btn-icon btn-icon-circle btn-gradient-success btn-icon-style-2 btn-lg' title='Ver ficha' >
                              <i class='fa fa-money-bill fa-7x'></i>
                      </button> 
                  </td>
              </tr>";
             }  
           echo "
          </tbody>
      </table>
  </div>";

    }else{
        echo "<div class='alert alert-danger' role='alert'>
        <h4 class='lert-heading mb-10'>!OHS tenemos problemas.</h4>
        <p>No hay creditos que correspondan a la consulta actual.</p>
        <hr class='hr-soft-success'>
        
    </div>";
    }
    
   
 }

   /* retorna el id de la ultima tarifa registrada*/
   public static function tarifa(){
     return tarifaDao::ultimaTarifa();}

   /* retorna el estado en String*/
   public static function estadoCredito($estado){
       $text = "";
        switch ($estado) {
            case '0':
            $text = "INACTIVO"; 
            break;

            case '1':
            $text = "PRE-APROBADO"; 
            break;

            case '2':
            $text = "APROBADO"; 
            break;

            case '3':
            $text = "DESEMBOLSADO"; 
            break;

            case '4':
            $text = "FINALIZADO"; 
            break;
        }

        return $text;

   }  


   public static function listaObservacionesCredito($tipoConsulta,$idcredito){
     
    
    $arrayObservacion = observacioncreditoDao::listadoCreditosObservaciones($tipoConsulta,$idcredito);
    if($arrayObservacion != false){
      echo "<div class='table-responsive'>
      <table class='table table-sm table-hover mb-0'>
          <thead>
              <tr>

                  <th>Registro</th>
                  <th>Usuario</th>
                  <th>Observacion</th>
                  
              </tr>
          </thead>
          <tbody>
              <tr>";
             foreach ($arrayObservacion as $key => $value) {
             echo"
                  
                  <td>".$arrayObservacion[$key]->getRegistro()."</td>
                  <td>".$arrayObservacion[$key]->getIdSesionObservacionUsuario()."</td>
                  <td><textarea class='form-control mt-15 text-justify' rows='4' placeholder='Textarea'>".$arrayObservacion[$key]->getDescripcion()."</textarea></td>
              </tr>";
             }  
           echo "
          </tbody>
      </table>
  </div>";

  
    }else{
        echo "<div class='alert alert-danger' role='alert'>
        <h4 class='lert-heading mb-10'>!OHS tenemos problemas.</h4>
        <p>No hay Observaciones que correspondan al credito.</p>
        <hr class='hr-soft-success'>
        <p>Puedes utilizar los filtros y el boton Buscar para hacer una busqueda personalizada o puedes crear una nueva observacion.</p>
    </div>";
    }
    
   
 }


 public static function registrarObservacion($model){
     
    return observacioncreditoDao::crearObservacionCredito($model);}

 public static function listaCuotas($idcredito){
       
        $objCredito = creditoController::objCredito($idcredito);
        
        /* $av = $objCredito->getAvalCredito();
        $ad = $objCredito->getAdministracionCredito();
        $s = $objCredito->getSeguroCredito();
        $otros = floatval($av) + floatval($ad) + floatval($s); */
        //echo $otros;

        $arrayCredito = cuotaDao::listaCuotas($idcredito);
        if($arrayCredito != false){
            echo "<div class='table-responsive'>
            <table class='table table-sm table-hover mb-0 ' >
                <thead>
                    <tr>
                        <th style='font-size: 11px;'>#</th>
                        <th style='font-size: 11px;'>FP</th>
                        <th style='font-size: 11px;'>FPR</th>
                        <th style='font-size: 11px;'>FPA</th>
                        <th style='font-size: 11px;'>C</th>
                        <th style='font-size: 11px;'>I</th>
                        
                        <th style='font-size: 11px;'>A</th>
                        <th style='font-size: 11px;'>CV</th>
                        <th style='font-size: 11px;'>CA</th>
                        <th style='font-size: 11px;'>Estado</th>
                        <th style='font-size: 11px;'>Accion</th>
                    </tr>
                </thead>
                <tbody>
                  ";
                   foreach ($arrayCredito as $key => $value) {
                       //$co = floatval($arrayCredito[$key]->getcuota())+floatval($otros);           
                   echo"  <tr>
                        <td style='font-size: 11px;'>".$arrayCredito[$key]->getNumeroCuota()."</td>
                        <td style='font-size: 11px;'>".$arrayCredito[$key]->getFechaPactada()."</td>
                        <td style='font-size: 11px;'>".$arrayCredito[$key]->getFechaProgramada()."</td>
                        <td style='font-size: 11px;'>".$arrayCredito[$key]->getFechaPagada()."</td>
                        <td style='font-size: 11px;'>".$arrayCredito[$key]->getcuota()."</td>
                        <td style='font-size: 11px;'>".$arrayCredito[$key]->getIntereses()."</td>
                        
                        <td style='font-size: 11px;'>".$arrayCredito[$key]->getAmortizacion()."</td>
                        <td style='font-size: 11px;'>".$arrayCredito[$key]->getCapital()."</td>
                        <td style='font-size: 11px;'>".$arrayCredito[$key]->getCapitalAmortizado()."</td>
                        <td style='font-size: 11px;'>".$arrayCredito[$key]->getEstado()."</td>
                        <td>
                            <button type='button' value='1' class='btn btn-icon btn-icon-circle btn-gradient-success btn-icon-style-2 btn-lg' title='Pagar cuota' >
                                    <i class='fa fa-money-bill fa-7x'></i>
                            </button> 
                            
                        </td>
                    </tr>";
    
                   }  
                 echo "
                </tbody>
            </table>
        </div>";
    
          }
        
     }




     public static function listaCuotasNoPagadas($idcredito){
       
        $objCredito = creditoController::objCredito($idcredito);
        
        $av = $objCredito->getAvalCredito();
        $ad = $objCredito->getAdministracionCredito();
        $s = $objCredito->getSeguroCredito();
        $otros = floatval($av) + floatval($ad) + floatval($s);

        
        $arrayCredito = cuotaDao::listaCuotasNoPagadas($idcredito);
        if($arrayCredito != false){
            echo "<div class='table-responsive'>
            <table class='table table-sm table-hover mb-0 ' >
                <thead>
                    <tr>
                        <th style='font-size: 11px;'>Seleccione Cuotas</th>
                        <th style='font-size: 11px;'>#</th>
                        <th style='font-size: 11px;'>C</th>
                        <th style='font-size: 11px;'>I</th>
                        
                        <th style='font-size: 11px;'>Estado</th>
                    </tr>
                </thead>
                <tbody>
                  ";


                   foreach ($arrayCredito as $key => $value) {
                       //$co = floatval($arrayCredito[$key]->getcuota())+floatval($otros);           
                   echo"  <tr>
                        <td>
                            <div class='custom-control custom-checkbox checkbox-teal'>
                            <input type='checkbox' class='custom-control-input' id='".$arrayCredito[$key]->getNumeroCuota()."' name='".$arrayCredito[$key]->getNumeroCuota()."' value='".$arrayCredito[$key]->getNumeroCuota()."' >
                            <label class='custom-control-label' for='".$arrayCredito[$key]->getNumeroCuota()."'>Pagar cuota</label>
                        </div>
                        </td>
                        <td style='font-size: 11px;'>".$arrayCredito[$key]->getNumeroCuota()."</td>
                        <td style='font-size: 11px;'>".$arrayCredito[$key]->getcuota()."</td>
                        <td style='font-size: 11px;'>".$arrayCredito[$key]->getIntereses()."</td>
                        
                        <td style='font-size: 11px;'>".$arrayCredito[$key]->getEstado()."</td>
                    </tr>";
    
                   }  
                 echo "
                </tbody>
            </table>
        </div>";
    
          }
        
     }
     
    public static function listaTarifas(){
        $estado="";
        $objTarifa = new tarifaDao();
        $arrayTarifa=$objTarifa->listadoTarifas();
        if($arrayTarifa != false){
        echo "
        <section class='hk-sec-wrapper'>
        <div class='row'>";
            foreach ($arrayTarifa as $key => $value) {
                if(floatval($arrayTarifa[$key]->getEstado()) >0){
                    $estado = "<span class='badge badge-success'>Seleccionado</span>";
                }else{
                    $estado = "<span class='badge badge-warning'>Inactivo.</span>";
                }

        echo "
        
    <div class='col-lg-4 col-sm-12'>
        <div class='card card-refresh'>
            <div class='refresh-container'>
                <div class='loader-pendulums'></div>
            </div>
            <div class='card-header card-header-action'>
                <h6>".$arrayTarifa[$key]->getDescripcionTarifa()." <br> ".$estado."</h6>
                <div class='d-flex align-items-center card-action-wrap'>
                    <a class='inline-block mr-15' data-toggle='collapse' href='#collapse_".$arrayTarifa[$key]->getIdTarifa()."' aria-expanded='true'>
                        <i class='zmdi zmdi-chevron-down'></i>
                    </a>
                    <div class='inline-block dropdown mr-15'>
                        <a class='dropdown-toggle no-caret' data-toggle='dropdown' href='#' aria-expanded='false' role='button'><i class='ion ion-md-more'></i></a>
                        <div class='dropdown-menu' x-placement='bottom-start' style='position: absolute; transform: translate3d(0px, 24px, 0px); top: 0px; left: 0px; will-change: transform;'>
                            <a class='dropdown-item' id='' href='#' value='".$arrayTarifa[$key]->getIdTarifa()."'><i class='dropdown-icon zmdi zmdi-account'></i><span>Ficha credito</span></a>
                            <a class='dropdown-item' id='seleccionarTarifa' name='seleccionarTarifa' href='#' value='".$arrayTarifa[$key]->getIdTarifa()."'><i class='dropdown-icon zmdi zmdi-card'></i><span>Seleccionar tarifa</span></a>
                        </div>
                    </div>
                     
                    <a href='#' class='inline-block full-screen mr-15'>
                        <i class='ion ion-md-expand'></i>
                    </a>
                    <a class='inline-block card-close' href='#' data-effect='fadeOut'>
                        <i class='ion ion-md-close'></i>
                    </a>
                </div>
            </div>
            <div id='collapse_".$arrayTarifa[$key]->getIdTarifa()."' class='collapse show' style=''>
                <div class='card-body'>
                    <h5 class='card-title'>Tarifas configuradas</h5>
                    <p class='card-text'><ul class='list-group mb-15'>
                    <li class='list-group-item d-flex justify-content-between align-items-center'>
                    ".$arrayTarifa[$key]->getDescripcionTarifa()."
                    </li>
                    <li class='list-group-item d-flex justify-content-between align-items-center'>
                    <span class='badge badge-primary badge-pill'>Libre inversion</span>".$arrayTarifa[$key]->getPorcentajeLibreInversion()."
                    </li>
                    <li class='list-group-item d-flex justify-content-between align-items-center'>
                    <span class='badge badge-info badge-pill'>Cartera</span>".$arrayTarifa[$key]->getPorcentajeCartera()."
                    </li>
                    <li class='list-group-item d-flex justify-content-between align-items-center'>
                    <span class='badge badge-success badge-pill'>Saneamiento</span>".$arrayTarifa[$key]->getPorcentajeSaneamiento()."
                    </li>
                    <li class='list-group-item d-flex justify-content-between align-items-center'>
                    <span class='badge badge-secondary badge-pill' >Registro</span><span >".$arrayTarifa[$key]->getregistro()."</span>
                    </li>
                </ul></p>
                    
                </div>
            </div>
        </div>
    </div>
    ";
        }
        echo "</div>
        </section>";

    }else{
        echo "<div class='alert alert-danger' role='alert'>
             <h4 class='lert-heading mb-10'>!OHS tenemos problemas.</h4>
             <p>No hay tarifas registradas.</p>
            <hr class='hr-soft-success'>
         </div>";

    }
        
   
        
   
       
     }







}


?>