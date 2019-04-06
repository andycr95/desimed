<?php
  /* Ruta del archivo de configuracion principal*/
  require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de persistencia */
  require_once(PERSISTENCE_PATH."productoDao.php");
  require_once(PERSISTENCE_PATH."laboratorioDao.php");
  require_once(PERSISTENCE_PATH."posicionDao.php");
  require_once(PERSISTENCE_PATH."proveedorDao.php");
  
class proveedorController
{

  public static function registrarProveedor($modelProveedor){
    return proveedorDao::crearProveedor($modelProveedor);}


    public static function listaproveedores(){   
    $arrayproveedores = proveedorDao::listaproveedores();
    if($arrayproveedores != false){
      echo "<div class='table-responsive'>
      <table class='table table-sm table-hover mb-0'>
              
          <thead>
              <tr>
                  <th>Razon social</th>
                  <th>Etiqueta de ontacto</th>
                  <th>Nombre de contacto</th>
                  <th>Telefono de contacto</th>
                  <th>Dirección</th>
                  <th>Ciudad</th>
              </tr>
          </thead>
          <tbody>
              <tr>";
             foreach ($arrayproveedores as $key => $value) {
             echo"
                  <td>".$arrayproveedores[$key]->getRazon_social()."</td>
                  <td>".$arrayproveedores[$key]->getEtiqueta_contacto()."</td>
                  <td>".$arrayproveedores[$key]->getNombre_contacto()."</td>
                  <td>".$arrayproveedores[$key]->getTelefono_contacto()."</td>
                  <td>".$arrayproveedores[$key]->getDireccion_contacto()."</td>
                  <td>".$arrayproveedores[$key]->getCiudad_contacto()."</td>
                </tr>";

             }  
           echo "
          </tbody>
      </table>
  </div>";

    }else{
        echo "<div class='alert alert-danger' role='alert'>
        <h4 class='lert-heading mb-10'>!OHS tenemos problemas.</h4>
        <p>No hay productos registrados o no hay correspondencias a la consulta.</p>
    </div>";
    }  
   }

   public static function listaproveedoresParametrizable($organizacion,$stock,$tipo_venta,$busqueda){
     
    if(strlen(trim($busqueda))==0){ $busqueda=null;  }
    $arrayproveedores=proveedorDao::listaproveedoresParametrizable($organizacion,$stock,$tipo_venta,$busqueda);
    if($arrayproveedores != false){
      echo "<div class='table-responsive'>
      <table class='table table-sm table-hover mb-0'>
              
          <thead>
              <tr>
                <th>Razon social</th>
                <th>Etiqueta de ontacto</th>
                <th>Nombre de contacto</th>
                <th>Telefono de contacto</th>
                <th>Dirección</th>
                <th>Ciudad</th>
              </tr>
          </thead>
          <tbody>
              <tr>";
             foreach ($arrayproveedores as $key => $value) {
             echo"
                <td>".$arrayproveedores[$key]->getRazon_social()."</td>
                <td>".$arrayproveedores[$key]->getEtiqueta_contacto()."</td>
                <td>".$arrayproveedores[$key]->getNombre_contacto()."</td>
                <td>".$arrayproveedores[$key]->getTelefono_contacto()."</td>
                <td>".$arrayproveedores[$key]->getDireccion_contacto()."</td>
                <td>".$arrayproveedores[$key]->getCiudad_contacto()."</td>
              </tr>";
              

             }  
           echo "
          </tbody>
      </table>
  </div>";

    }else{
        echo "<div class='alert alert-danger' role='alert'>
        <h4 class='lert-heading mb-10'>!OHS tenemos problemas.</h4>
        <p>No hay proveedores registrados o no hay correspondencias a la consulta.</p>
    </div>";
    }  
   }


   public static function selectorListadoProveedores(){
    $arrayProveedor = proveedorDao::listaproveedores();
    //print_r($arrayPosicion);
    echo "  <label for=''>Proveedores</label>";
    echo"
            <select class='form-control custom-select d-block w-100'
              name='proveedor' id='proveedor'>";
              foreach ($arrayProveedor as $key => $value) {
                 echo "<option value='".$arrayProveedor[$key]->getIdproveedor()."'>".$arrayProveedor[$key]->getRazon_social()."</option>";
              }

    echo"   </select>";

  }








}
?>
