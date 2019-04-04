<?php 

require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');

require_once(DATABASE_PATH."DataSource.php");
require_once(MODEL_PATH."movimientos.php");
require_once(MODEL_PATH."proveedor.php");
require_once(MODEL_PATH."factura.php");
require_once(MODEL_PATH."item_factura.php");
require_once(MODEL_PATH."lote.php");

class movimientosDao {


    public function crearMovimiento(movimientos $movimientos)
    {
        $data_source = new DataSource();
        $sql2 = "INSERT INTO movimientos VALUES (NULL, :idproveedor, :idfactura )";

        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':idproveedor' => $movimientos->getIdproveedor_movimientos(),
            ':idfactura' => $movimientos->getIdfactura_movimientos()
        ));
        return $resultado2;
    }


    public function crearitemFactura(item_factura $item)
    {
        $data_source = new DataSource();
        $sql2 = "INSERT INTO item_factura VALUES (NULL, :idfactura, :idproducto , :cantidad,:precio)";

        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':idfactura' => $item->getIdfactura(),
            ':idproducto' => $item->getIdproducto(),
            ':cantidad' => $item->getIdcantidad(),
            ':precio' => $item->getprecio_comprar()
        ));
        return $resultado2;
    }


    public function crearLote(lote $lote)
    {
        $data_source = new DataSource();
        $sql2 = "INSERT INTO lote VALUES (NULL, :codigo_lote, :idproducto, :cantidad, :fecha,1 )";

        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':codigo_lote' => $lote->getCodigo_lote(),
            ':idproducto' => $lote->getIdproducto(),
            ':cantidad' => $lote->getCantidad(),
            ':fecha' => $lote->getFecha_vencimiento()
        ));
        return $resultado2;
    }

public function crearFactura(factura $factura){
        $data_source = new DataSource();
        $sql2 = "INSERT INTO factura VALUES (NULL, :idcliente, :idusuario, :fecha_registro, :valor_neto,:tipo_factura, :estado )";

        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':idcliente' => $factura->getIdcliente(),
            ':idusuario' => $factura->getIdusuario(),
            ':fecha_registro' => $factura->getFecha_registro(),
            ':valor_neto' => $factura->getValor_neto(),
            ':tipo_factura' => $factura->getTipo_factura(),
            ':estado' => $factura->getEstado()
            
        ));
        return $resultado2;
}

public function objmovimiento($id){
  
    $sql="";
	$data_source = new DataSource();
	
		$sql = "
		SELECT * FROM `movimientos` 
				  JOIN factura on(factura.idfactura=movimientos.idfactura_movimiento)
				  join proveedor on(proveedor.idproveedor=movimientos.idproveedor_movimiento)
		where idmovimientos =".$id;

	$data_table = $data_source->ejecutarConsulta($sql);
	
    if(count($data_table)>0) {
        

		$objproveedor  = new proveedor(
				$data_table[0]["idproveedor"],
				$data_table[0]["razon_social"],
				$data_table[0]["etiqueta_contacto"],
				$data_table[0]["nombre_contacto"],
				$data_table[0]["telefono_contacto"],
				$data_table[0]["direccion_contacto"],
				$data_table[0]["ciudad_contacto"]
		);

		$objfactura = new factura(
				$data_table[0]["idfactura"],
				$data_table[0]["idcliente"],
				$data_table[0]["idusuario"],
				$data_table[0]["fecha_registro"],
                $data_table[0]["valor_neto"],
                $data_table[0]["tipo_factura"],
				$data_table[0]["estado_factura"]
		);	  	
			
			
        $objmovimiento  = new movimientos(
            $data_table[0]["idmovimientos"],
            $objproveedor,
            $objfactura
          );
        
		
        return $objmovimiento;
    }else {return false;}
    
    }   


  public static function movimientosFactura($proveedor){
	
	$sql="";
	$data_source = new DataSource();
	if(is_null($proveedor)){
		$sql = "
		SELECT * FROM `movimientos` 
				  JOIN factura on(factura.idfactura=movimientos.idfactura_movimiento)
				  join proveedor on(proveedor.idproveedor=movimientos.idproveedor_movimiento)
		where factura.idcliente is null";


	}else{
		$sql = "
		SELECT * FROM `movimientos` 
				  JOIN factura on(factura.idfactura=movimientos.idfactura_movimiento)
				  join proveedor on(proveedor.idproveedor=movimientos.idproveedor_movimiento)
		where factura.idcliente is null and proveedor.idproveedor =".$proveedor;

	}

	$data_table = $data_source->ejecutarConsulta($sql);
	
    if(count($data_table)>0) {
        $multiple_array=array();
        foreach ($data_table as $clave=> $valor) {

		$objproveedor  = new proveedor(
				$data_table[$clave]["idproveedor"],
				$data_table[$clave]["razon_social"],
				$data_table[$clave]["etiqueta_contacto"],
				$data_table[$clave]["nombre_contacto"],
				$data_table[$clave]["telefono_contacto"],
				$data_table[$clave]["direccion_contacto"],
				$data_table[$clave]["ciudad_contacto"]
		);

		$objfactura = new factura(
				$data_table[$clave]["idfactura"],
				$data_table[$clave]["idcliente"],
				$data_table[$clave]["idusuario"],
				$data_table[$clave]["fecha_registro"],
                $data_table[$clave]["valor_neto"],
                $data_table[$clave]["tipo_factura"],
				$data_table[$clave]["estado_factura"]
		);	  	
			
			
        $objmovimiento  = new movimientos(
            $data_table[$clave]["idmovimientos"],
            $objproveedor,
            $objfactura
          );
        
		array_push($multiple_array, $objmovimiento);
		
        }
        return $multiple_array;
    }else {return false;}
}

public static function itemsFactura($idfactura){
	
	$sql="";
	$data_source = new DataSource();
	
    $sql ="
    select * from factura join  item_factura (item_factura.idfactura=factura.idfactura) where item_factura.idfactura =".$idfactura;
	$data_table = $data_source->ejecutarConsulta($sql);
	
    if(count($data_table)>0) {
        $multiple_array=array();
        foreach ($data_table as $clave=> $valor) {

		$objItem  = new item_factura(
				$data_table[$clave]["iditem"],
				$data_table[$clave]["idfactura"],
				$data_table[$clave]["idproducto"],
				$data_table[$clave]["cantidad"],
				$data_table[$clave]["fecha_vencimiento"],
				$data_table[$clave]["precio_compra"]
		);
		 
		array_push($multiple_array, $objItem);
		
        }
        return $multiple_array;
    }else {return false;}
}

public static function idlote($idlote){
	
	$sql="";
	$data_source = new DataSource();
	
    $sql ="
    select * from factura join  item_factura (item_factura.idfactura=factura.idfactura) where item_factura.idfactura =".$idfactura;
	$data_table = $data_source->ejecutarConsulta($sql);
	
    if(count($data_table)>0) {
        $multiple_array=array();
        foreach ($data_table as $clave=> $valor) {

		$objItem  = new item_factura(
				$data_table[$clave]["iditem"],
				$data_table[$clave]["idfactura"],
				$data_table[$clave]["idproducto"],
				$data_table[$clave]["cantidad"],
				$data_table[$clave]["fecha_vencimiento"],
				$data_table[$clave]["precio_compra"]
		);
		 
		array_push($multiple_array, $objItem);
		
        }
        return $multiple_array;
    }else {return false;}
}

public static function ultimaIdmovimiento(){
  
        $data_source=new DataSource();
        $data_table=$data_source->ejecutarConsulta(
            " 
            SELECT * FROM `movimientos` ORDER BY `movimientos`.`idmovimientos` DESC limit 1");
            return $data_table[0]["idmovimientos"];
}

public static function ultimoIdfactura(){
  
            $data_source=new DataSource();
            $data_table=$data_source->ejecutarConsulta(
                " 
                SELECT * FROM `factura` ORDER BY `factura`.`idfactura` DESC limit 1");
                return $data_table[0]["idfactura"];
}
    
public static function ultimoIditem(){
    $data_source=new DataSource();
    $data_table=$data_source->ejecutarConsulta("SELECT * FROM `lote` ORDER BY `lote`.`idinterno` DESC LIMIT 1");
    return $data_table[0]["idinterno"];
}   




  }
?>