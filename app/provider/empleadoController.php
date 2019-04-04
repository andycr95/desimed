<?php
  /* Ruta del archivo de configuracion principal*/
  require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de persistencia */
  require_once(PERSISTENCE_PATH."empleadoDao.php");
  
class empleadoController
{

  public static function selectAsesoras(){
    $objempleado = new empleadoDao();
    $arrayempleado=$objempleado->listaAsesoras();
    echo "<label for='country'>Asesoras disponibles:</label>
                <select class='form-control custom-select d-block w-100' id='selectAsesoras' name='selectAsesoras'>";
                    foreach ($arrayempleado as $key => $value) {
    echo           "<option value='".$arrayempleado[$key]->getIdempleado()."'>
                   ".$arrayempleado[$key]->getNombre_empleado()." - ".$arrayempleado[$key]->getTipo_empleado()."</option>";
                    }
    echo       "</select>";
}


  /*Retorno un obj de clase empleado a partir del idSesion  */
  public static function objDaoempleado($idsesion){ 
    return empleadoDao::empleadoIdSesion($idsesion);}
    /*Retorno el numero de empleados registrados  */

  public static function nempleados($estado){
    return empleadoDao::nempleados($estado);}




  public static function listaempleados($tipoConsulta,$estado,$busqueda){
     
    if(strlen(trim($busqueda))==0){ $busqueda=null;  }
    $arrayempleado = empleadoDao::listadoempleados($tipoConsulta,$estado,$busqueda);
    if($arrayempleado != false){
      echo "<div class='table-responsive'>
      <table class='table table-sm table-hover mb-0'>
              
          <thead>
              <tr>
                  <th>Tipo</th>
                  <th>Rol</th>
                  <th>Nombre</th>
                  <th>Genero</th>
                  <th>Estado</th>
                  <th>Acciones</th>
              </tr>
          </thead>
          <tbody>
              <tr>";
             foreach ($arrayempleado as $key => $value) {
                  
             echo"
                  <td>".$arrayempleado[$key]->getTipo_empleado()."</td>
                  <td>".$arrayempleado[$key]->getRol_empleado()."</td>
                  <td>".$arrayempleado[$key]->getNombre_empleado()."</td>
                  <td>".$arrayempleado[$key]->getSexo_empleado()."</td>

                  ";
                  if($arrayempleado[$key]->getEstado_empleado() == 1){
                      echo "<td><span class='badge badge-primary'>ACTIVO</span></td>";

                  }elseif($arrayempleado[$key]->getEstado_empleado() == 0){
                    echo "<td><span class='badge badge-danger'>INACTIVO</span></td>";
                  }
                  echo "
                  <td>
                      <button type='button' value='".$arrayempleado[$key]->getIdempleado()."' id='verFicha' class='btn btn-icon btn-icon-circle btn-gradient-success btn-icon-style-2 btn-lg' title='Ver ficha' >
                              <i class='fa fa-user-edit fa-7x'></i>
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
        <p>No hay empleados que correspondan a la consulta actual.</p>
        <hr class='hr-soft-success'>
        <p>Puedes utilizar los filtros y el boton Buscar para hacer una busqueda personalizada o puedes crear un nuevo empleado en la plataforma.</p>
    </div>";
    }  
   }

   public static function verFicha($id){
    $url =PLATFORM_SERVER."modules/empleados/verFicha.php?id=".$id;
     /* Redirect browser */
    echo  "<script>window.location.replace('".$url."');</script> ";
 }

  public static function objempleado($id){
    return empleadoDao::empleadoId($id);}

  public static function objempleadoSesion($id){
      return empleadoDao::empleadoIdSesion($id);}

 public static function registrarempleado($modelempleado){
     return empleadoDao::crearempleado($modelempleado);}

     

}
?>
