<?php
  /* Ruta del archivo de configuracion principal*/
  require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de persistencia */
  require_once(PERSISTENCE_PATH."clienteDao.php");
  
class clienteController
{


  /*Retorno un obj de clase   */
  public static function objDaoCliente($id_cliente){ 
    return clienteDao::clienteId($id_cliente);}


    /*Retorno el numero de usuarios registrados  */
  public static function nClientes($estado){
     
    return clienteDao::nClientes($estado);}

  /*Retorno un listado de usuarios a partir del tipo de consulta y el filtro de estado */
  public static function listaCliente($tipoConsulta,$estado,$busqueda){
     
      if(strlen(trim($busqueda))==0){ $busqueda=null;  }

      $arrayCliente = clienteDao::listaClientes($tipoConsulta,$estado,$busqueda);
      
      if($arrayCliente != false){
        echo "<div class='table-responsive'>
        <table class='table table-sm table-hover mb-0'>
                
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Genero</th>
                    <th>Fecha de nacimiento</th>
                    <th>Profesion</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>";
               foreach ($arrayCliente as $key => $value) {
                    
               echo"
                    <td>".$arrayCliente[$key]->getNombreCompletoCliente()."</td>
                    <td>".$arrayCliente[$key]->getGenero()."</td>
                    <td>".$arrayCliente[$key]->getFechaNacimiento()."</td>
                    <td>".$arrayCliente[$key]->getProfesion()."</td>

                    ";
                    if($arrayCliente[$key]->getEstado() == 1){
                        echo "<td><span class='badge badge-primary'>ACTIVO</span></td>";
  
                    }elseif($arrayCliente[$key]->getEstado() == 0){
                      echo "<td><span class='badge badge-danger'>INACTIVO</span></td>";
                    }
                    echo "
                    <td>
                        <button type='button' value='".$arrayCliente[$key]->getIdcliente()."' id='verFicha' class='btn btn-icon btn-icon-circle btn-gradient-success btn-icon-style-2 btn-lg' title='Ver ficha' >
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
          <p>No hay clientes que correspondan a la consulta actual.</p>
          <hr class='hr-soft-success'>
          <p>Puedes utilizar los filtros y el boton Buscar para hacer una busqueda personalizada o puedes crear un nuevo usuario en la plataforma.</p>
      </div>";
      }
      
 
     
   }


   /*Retorno un listado de usuarios a partir del tipo de consulta y el filtro de estado */
  public static function listaClienteResumen($tipoConsulta,$estado,$busqueda){
     
    if(strlen(trim($busqueda))==0){ $busqueda=null;  }

    $arrayCliente = clienteDao::listadoCliente($tipoConsulta,$estado,$busqueda);

    if($arrayCliente != false){
      echo "<div class='table-responsive'>
      <table class='table table-sm table-hover mb-0'>
              
          <thead>
              <tr>
                  
                  <th style='width: 50%;'>Nombre</th>
                  
                  <th style='width: 35%;'>Sucursal</th>
                 
                  <th style='width: 5%;'>Estado</th>
                  <th style='width: 10%;'>Acciones</th>
              </tr>
          </thead>
          <tbody>
              <tr>";
             foreach ($arrayCliente as $key => $value) {
                  
              $photo = FOTO_PATH.$arrayCliente[$key]->getidUsuario().".jpg";
             echo"
                  <td style='width: 50%;'>".$arrayCliente[$key]->getNombreApellidoUsuario()."</td>
                  
                  <td style='width: 35%;'>".$arrayCliente[$key]->getIdSucursal()."</td>
                  ";

                  if($arrayCliente[$key]->getIdSesionUsuario() == 1){
                      echo "<td style='width: 5%;'><span class='badge badge-primary'>A</span></td>";

                  }elseif($arrayCliente[$key]->getIdSesionUsuario() == 2){
                    echo "<td style='width: 5%;'><span class='badge badge-danger'>I</span></td>";
                  }elseif($arrayCliente[$key]->getIdSesionUsuario() == 3){
                    echo "<td style='width: 5%;'><span class='badge badge-success'>C</span></td>";
                  }
                  echo "
                  <td style='width: 10%;'>
                      <button type='button' value='1' class='btn btn-icon btn-icon-circle btn-gradient-success btn-icon-style-2 ' title='Ver ficha' >
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
        <p>No hay usuarios que correspondan a la consulta actual.</p>
        <hr class='hr-soft-success'>
        <p>Puedes utilizar los filtros y el boton Buscar para hacer una busqueda personalizada o puedes crear un nuevo usuario en la plataforma.</p>
    </div>";
    }

 }

 public static function verFicha($id){
    $url =PLATFORM_SERVER."modules/clientes/verFicha.php?id=".$id;
     /* Redirect browser */
    echo  "<script>window.location.replace('".$url."');</script> ";
 }

 public static function objCliente($id){
    return clienteDao::clienteId($id);}

 public static function registrarCliente($modelCredito){
     return clienteDao::crearCliente($modelCredito);}

     public static function registrarAfiliado($modelCredito){
      return clienteDao::crearClienteAfiliado($modelCredito);}

}
?>