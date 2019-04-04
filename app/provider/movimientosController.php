<?php
  /* Ruta del archivo de configuracion principal*/
  require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  
  /* Rutas del directorio de persistencia */
  require_once(PROVIDER_PATH."productoController.php");
  require_once(PERSISTENCE_PATH."productoDao.php");
  require_once(PERSISTENCE_PATH."laboratorioDao.php");
  require_once(PERSISTENCE_PATH."posicionDao.php");
  require_once(PERSISTENCE_PATH."proveedorDao.php");
  require_once(PERSISTENCE_PATH."movimientosDao.php");
  
class movimientosController
{
  public static function ultimaIdmovimiento(){
    return movimientosDao::ultimaIdmovimiento();}

  public static function objmovimiento($id){
    return movimientosDao::objmovimiento($id);}

  public static function ultimoIdfactura(){
    return movimientosDao::ultimoIdfactura();}

  public static function ultimoIditem(){
    return movimientosDao::ultimoIditem();}

  public static function registrarMovimiento($modelmovimiento){
    return movimientosDao::crearMovimiento($modelmovimiento);}
    
  public static function registrarFactura($modelfactura){
    return movimientosDao::crearFactura($modelfactura);}  


    public static function registrarLote($modelLote){
      return movimientosDao::crearLote($modelLote);}
      
    public static function registrarItemFactura($modelitemfactura){
      return movimientosDao::crearitemFactura($modelitemfactura);} 

    public static function idlote($iditem){
      return movimientosDao::idlote($iditem);} 

      public static function listadoItemFactura($idfactura){
        $arrayitemFacturas = movimientosDao::itemsFactura($idfactura);
        if($arrayitemFacturas != false){
          echo "<div class='table-responsive'>
          <table class='table table-sm table-hover mb-0'>
                  
              <thead>
                  <tr>
                      <th>Etiqueta</th>
                      <th>Cantidad</th>
                      <th>Precio de compra</th>
                      <th>Lote</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>";
                 foreach ($arrayitemFacturas as $key => $value) {
                   $objlote= movimientosController::idlote($arrayitemFacturas[$key]->getItem_factura());
                   $objproducto=productoController::idproducto($arraymovimientos[$key]->getIdproducto());
                 echo"
                          <td>".$objproducto->getEtiqueta()."</td>
                          <td>".$arrayitemFacturas[$key]->getIdcantidad()."</td>
                          <td>".$arrayitemFacturas[$key]->getprecio_comprar()."</td>
                          <td>".$arraymovimientos[$key]->getIdfactura_movimientos()->getIdfactura()."</td>
                          <td>
                              a href='#' title='".$arrayitemFacturas[$key]->getItem_factura()."'><i class='fa fa-clipboard-list fa-2x'></i></a>
                          </td>";
    
                          
              echo "</tr>";
    
                 }  
               echo "
              </tbody>
          </table>
      </div>";
    
        }else{
            echo "<div class='alert alert-danger' role='alert'>
            <p>No hay elementos agregados .</p>
        </div>";
        }  

      }



  public static function movimientosFactura($proveedor){
     
    
	$arraymovimientos = movimientosDao::movimientosFactura($proveedor);
	//print_r($arraymovimientos);
    if($arraymovimientos != false){
      echo "<div class='table-responsive'>
      <table class='table table-sm table-hover mb-0'>
              
          <thead>
              <tr>
                  <th>Codigo movimiento</th>
                  <th>Proveedor</th>
                  <th>Consecutivo factura</th>
                  <th>tipo de factura</th>
                  <th>Fecha de registro</th>
				          <th>Valor de factura</th>
				          <th>Inspeccionar</th>
              </tr>
          </thead>
          <tbody>
              <tr>";
             foreach ($arraymovimientos as $key => $value) {
               $tipo = $arraymovimientos[$key]->getIdfactura_movimientos()->getEstado();
               
             echo"
                      <td>".$arraymovimientos[$key]->getIdmovimientos()."</td>
				              <td>".$arraymovimientos[$key]->getIdproveedor_movimientos()->getRazon_social()."</td>
                      <td>".$arraymovimientos[$key]->getIdfactura_movimientos()->getIdfactura()."</td>
                      <td>".$tipo."</td>
				              <td>".$arraymovimientos[$key]->getIdfactura_movimientos()->getFecha_registro()."</td>
                      <td>".$arraymovimientos[$key]->getIdfactura_movimientos()->getValor_neto()."</td>";
                      if(strcmp($tipo,"BORRADOR") == 0){
                        echo "<td>
                                  <a href='agregar.php?idmovimiento=".$arraymovimientos[$key]->getIdmovimientos()."'><i class='fa fa-clipboard-list fa-2x'></i></a>
                              </td>";

                      }else{
                        echo "<td>
                                  <a href='verFicha.php?idmovimiento=".$arraymovimientos[$key]->getIdmovimientos()."'><i class='fa fa-clipboard-check fa-2x'></i></a>
                              </td>";

                      }
				              
          echo "</tr>";

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


}
?>
