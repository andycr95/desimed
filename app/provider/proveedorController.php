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

  // public static function nproductos(){
  //   return productoDao::nproductos();}


  //   public static function stockproducto($id){
  //     return productoDao::stockproducto($id);}

  // public static function listaproductos(){
     
  //   if(strlen(trim($busqueda))==0){ $busqueda=null;  }
  //   $arrayproducto = productoDao::listadoproductos();
  //   if($arrayproducto != false){
  //     echo "<div class='table-responsive'>
  //     <table class='table table-sm table-hover mb-0'>
              
  //         <thead>
  //             <tr>
  //                 <th>Etiqueta</th>
  //                 <th>Presentacion</th>
  //                 <th>Laboratorio</th>
  //                 <th>Posicion</th>
  //                 <th>Valor</th>
  //                 <th>Tipo</th>
  //                 <th>Membresía</th>
  //                 <th>Stock actual</th>
  //                 <th>Stock (Min)</th>
  //             </tr>
  //         </thead>
  //         <tbody>
  //             <tr>";
  //            foreach ($arrayproducto as $key => $value) {
  //              $valor = $arrayproducto[$key]->getValor();
  //              $descuento = $arrayproducto[$key]->getDescuento();
  //              $valorMebresia = 0;

  //                 if(strcmp($arrayproducto[$key]->gettipo_producto(),"VENTA AFILIADO")==0){
  //                   $valorMebresia = $valor - (floatval($valor)*floatval($descuento))/100;
  //                   $valorMebresia ="DESC ".$arrayproducto[$key]->getDescuento()."% ".$valorMebresia;
  //                 }
  //            echo"
  //                 <td>".$arrayproducto[$key]->getEtiqueta()."</td>
  //                 <td>".$arrayproducto[$key]->getpresentacion()."</td>
  //                 <td>".laboratorioDao::laboratorioId($arrayproducto[$key]->getIdlaboratorio())->getEtiqueta()."</td>
  //                 <td>".posicionDao::posicionId($arrayproducto[$key]->getidposicion())->getEtiqueta()."</td>
  //                 <td>".number_format($arrayproducto[$key]->getValor())."</td>
  //                 <td>".$arrayproducto[$key]->gettipo_producto()."</td>
  //                 <td>".$valorMebresia."</td>
  //                 <td>".$arrayproducto[$key]->getstock_normal()."</td>
  //                 <td>".$arrayproducto[$key]->getstock_minimo()."</td>
  //             </tr>";

  //            }  
  //          echo "
  //         </tbody>
  //     </table>
  // </div>";

  //   }else{
  //       echo "<div class='alert alert-danger' role='alert'>
  //       <h4 class='lert-heading mb-10'>!OHS tenemos problemas.</h4>
  //       <p>No hay productos registrados o no hay correspondencias a la consulta.</p>
  //   </div>";
  //   }  
  //  }


  //  public static function listaproductosParametrizable($organizacion,$stock,$tipo_venta,$busqueda){
     
  //   if(strlen(trim($busqueda))==0){ $busqueda=null;  }
  //   $arrayproducto=productoDao::listaproductosParametrizable($organizacion,$stock,$tipo_venta,$busqueda);
  //   if($arrayproducto != false){
  //     echo "<div class='table-responsive'>
  //     <table class='table table-sm table-hover mb-0'>
              
  //         <thead>
  //             <tr>
  //                 <th>Etiqueta</th>
  //                 <th>Presentacion</th>
  //                 <th>Laboratorio</th>
  //                 <th>Proveedor</th>
  //                 <th>Posicion</th>
  //                 <th>Valor</th>
  //                 <th>Tipo</th>
  //                 <th>Membresía</th>
  //                 <th>Stock actual</th>
  //                 <th>Stock (Min)</th>
  //             </tr>
  //         </thead>
  //         <tbody>
  //             <tr>";
  //            foreach ($arrayproducto as $key => $value) {
  //              $valor = $arrayproducto[$key]->getValor();
  //              $descuento = $arrayproducto[$key]->getDescuento();
  //              $valorMebresia = 0;

  //                 if(strcmp($arrayproducto[$key]->gettipo_producto(),"VENTA AFILIADO")==0){
  //                   $valorMebresia = $valor - (floatval($valor)*floatval($descuento))/100;
  //                   $valorMebresia ="DESC ".$arrayproducto[$key]->getDescuento()."% ".$valorMebresia;
  //                 }
  //            echo"
  //                 <td>".$arrayproducto[$key]->getEtiqueta()."</td>
  //                 <td>".$arrayproducto[$key]->getpresentacion()."</td>
  //                 <td>".laboratorioDao::laboratorioId($arrayproducto[$key]->getIdlaboratorio())->getEtiqueta()."</td>
  //                 <td>".proveedorDao::proveedorId($arrayproducto[$key]->getIdproveedor())->getRazon_social()."</td>
  //                 <td>".posicionDao::posicionId($arrayproducto[$key]->getidposicion())->getEtiqueta()."</td>
  //                 <td>".number_format($arrayproducto[$key]->getValor())."</td>
  //                 <td>".$arrayproducto[$key]->gettipo_producto()."</td>
  //                 <td>".$valorMebresia."</td>
  //                 <td>".$arrayproducto[$key]->getstock_normal()."</td>
  //                 <td>".$arrayproducto[$key]->getstock_minimo()."</td>
  //             </tr>";

  //            }  
  //          echo "
  //         </tbody>
  //     </table>
  // </div>";

  //   }else{
  //       echo "<div class='alert alert-danger' role='alert'>
  //       <h4 class='lert-heading mb-10'>!OHS tenemos problemas.</h4>
  //       <p>No hay productos registrados o no hay correspondencias a la consulta.</p>
  //   </div>";
  //   }  
  //  }


  //  public static function selectorListadoPosicion(){
  //   $arrayPosicion = posicionDao::listaposiciones();
  //   // print_r($arrayPosicion);
  //   echo "  <label for=''>Categorizacion</label>";
  //   echo"
  //           <select class='form-control custom-select d-block w-100'
  //             name='categorizacion' id='categorizacion'>";
  //             foreach ($arrayPosicion as $key => $value) {
  //                echo "<option value='".$arrayPosicion[$key]->getIdposicion()."'>".$arrayPosicion[$key]->getEtiqueta()."</option>";
  //             }

  //   echo"   </select>";

  //  }

   public static function selectorListadoProveedores(){
    $arrayProveedor = proveedorDao::listaproveedores();
    // print_r($arrayPosicion);
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
