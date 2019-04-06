<?php
  /* Ruta del archivo de configuracion principal*/
  require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de persistencia */
  require_once(PERSISTENCE_PATH."categoriaDao.php");
  
class categoriaController
{
  public static function idcategoria($id){
    return categoriaDao::idcategoria($id);}

    public static function registrarCategoria($modelcategoria){
        return categoriaDao::crearCategoria($modelcategoria);}
    

  public static function listacategorias(){
    $arraycategoria = categoriaDao::listadocategorias();
    if($arraycategoria != false){
      echo "<div class='table-responsive'>
      <table class='table table-sm table-hover mb-0'>
              
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Nombre</th>
              </tr>
          </thead>
          <tbody>
              <tr>";
             foreach ($arraycategoria as $key => $value) {
             echo"
                  <td>".$arraycategoria[$key]->getId()."</td>
                  <td>".$arraycategoria[$key]->getNombreCategoria()."</td>
              </tr>";

             }  
           echo "
          </tbody>
      </table>
  </div>";

    }else{
        echo "<div class='alert alert-danger' role='alert'>
        <h4 class='lert-heading mb-10'>!OHS tenemos problemas.</h4>
        <p>No hay categorias registrados o no hay correspondencias a la consulta.</p>
    </div>";
    }  
   }

   public static function listacategoriasParametrizable($organizacion,$busqueda){
     
    if(strlen(trim($busqueda))==0){ $busqueda=null;  }
    $arraycategoria=categoriaDao::listacategoriasParametrizable($organizacion,$busqueda);
    if($arraycategoria != false){
      echo "<div class='table-responsive'>
      <table class='table table-sm table-hover mb-0'>
              
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Nombre</th>
              </tr>
          </thead>
          <tbody>
              <tr>";
              foreach ($arraycategoria as $key => $value) {
                echo"
                  <td>".$arraycategoria[$key]->getId()."</td>
                  <td>".$arraycategoria[$key]->getNombreCategoria()."</td>

              </tr>"; 
              }
           echo "
          </tbody>
      </table>
  </div>";

    }else{
        echo "<div class='alert alert-danger' role='alert'>
        <h4 class='lert-heading mb-10'>!OHS tenemos problemas.</h4>
        <p>No hay categorias registrados o no hay correspondencias a la consulta.</p>
    </div>";
    }
    

}








}
?>
