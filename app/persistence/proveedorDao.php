<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
require_once(DATABASE_PATH."DataSource.php");
require_once(MODEL_PATH."proveedor.php");


class proveedorDao
{

    public function crearlaboratorio(proveedor $proveedor)
    {
        $data_source = new DataSource();
        $sql2 = "INSERT INTO proveedor VALUES (null,:etiqueta_laboratorio)";

        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':etiqueta_laboratorio' => $proveedor->getEtiqueta()            
        ));
        return $resultado2;
    }

    
    public static function crearProveedor(proveedor $proveedor)
    {
        $data_source = new DataSource();
        $sql2 = "INSERT INTO proveedor VALUES (
        null,
        :razon_social,
        :etiqueta_contacto,
        :nombre_contacto,
        :telefono_contacto,
        :direccion_contacto,
        :ciudad_contacto
        
        )";

       
        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':razon_social' => $proveedor->getRazon_social(),
            ':etiqueta_contacto' => $proveedor->getEtiqueta_contacto(),
            ':nombre_contacto' => $proveedor->getNombre_contacto(),
            ':telefono_contacto' => $proveedor->getTelefono_contacto(),
            ':direccion_contacto' => $proveedor->getDireccion_contacto(),
            ':ciudad_contacto' => $proveedor->getCiudad_contacto()
            
        ));
        return $resultado2;
    }



    public function borrarlaboratorio($idlaboratorio)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("DELETE FROM proveedor
      WHERE idlaboratorio=:id ", array(':id' => $idlaboratorio));

        if (count($data_table) > 0) {
            return 1;
        } else {
            return false;
        }
    }


    /******************** *OK ******************************/

    public static function proveedorId($idproveedor)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM proveedor where idproveedor = :id ",
            array(':id' => $idproveedor)
        );
        $objproveedor = new proveedor(
            $data_table[0]["idproveedor"],
			$data_table[0]["razon_social"],
			$data_table[0]["etiqueta_contacto"],
			$data_table[0]["nombre_contacto"],
			$data_table[0]["telefono_contacto"],
			$data_table[0]["direccion_contacto"],
			$data_table[0]["ciudad_contacto"]
        );
        return $objproveedor;
    }

    public function listaproveedores()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM proveedor  "
        );
        if(count($data_table)>0){
      
            $proveedor_array=array();
            foreach ($data_table as $clave => $valor){
				$objproveedor = new proveedor(
                    $data_table[$clave]["idproveedor"],
                    $data_table[$clave]["razon_social"],
                    $data_table[$clave]["etiqueta_contacto"],
                    $data_table[$clave]["nombre_contacto"],
                    $data_table[$clave]["telefono_contacto"],
                    $data_table[$clave]["direccion_contacto"],
                    $data_table[$clave]["ciudad_contacto"]
				);
           array_push( $proveedor_array,$objproveedor);
        }
    }
        return $proveedor_array;
    }


    public static function listaproductosParametrizable($organizacion,$stock,$tipo_venta,$busqueda){

        $organizacion_ ="";
        $stock_ = "";
        $tipo_venta_="";
        $sql_=" ";
    
        switch ($organizacion) {
    
            case 'az':
            $organizacion_ = "order by etiqueta_producto ASC";
            break;
    
            case 'za':
            $organizacion_ = "order by etiqueta_producto DESC";
            break;
          
         }
    
         
    
         switch ($tipo_venta) {
    
            case 'vn':
            $tipo_venta_ = "  producto.tipo_producto ='VENTA NORMAL' ";
            $sql_ = "where ".$tipo_venta_;
            break;
    
            case 'va':
            $tipo_venta_ = "  producto.tipo_producto ='VENTA AFILIADO' ";
            $sql_ = "where ".$tipo_venta_;
            break;
    
            case 'vt':
            $sql_ = $sql_." ";
            break;
    
            
          
         }
    
    
         switch ($stock) {
    
            case 'tmax':
            $stock_ = "  producto.stock_normal > producto.stock_minimo ";
            $sql_ =  $sql_." and  ".$stock_." ";
            break;
    
            case 'tmin':
            $stock_ = "  producto.stock_normal <= producto.stock_minimo ";
            $sql_ =  $sql_." and  ".$stock_." ";
            break;
    
    
            case 'tzero':
            $stock_ = "  producto.stock_normal = 0  ";
            $sql_ =  $sql_." and  ".$stock_." ";
            break;
    
            case 'tp':
            $stock_ = "    ";
            $sql_ =  $sql_." ";
            break;
          
         }
    
        if(!is_null($busqueda)){
            $sql_ =  $sql_." and  etiqueta_producto LIKE '%".$busqueda."%' "; 
        }
    
    
        //echo " sqlx -> ".$sql_;
         $sql ="
            SELECT * FROM `producto` 
                   join laboratorio on(producto.idlaboratorio_producto=laboratorio.idlaboratorio) 
                   join posicion on(producto.idposicion_producto=posicion.idposicion) 
                   join proveedor on(producto.idproveedor_producto=proveedor.idproveedor)
                   ".$sql_." ".$organizacion_;
        //echo $sql;           
    
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta($sql);
    
        if(count($data_table)>0) {
            
            $producto_array=array();
            foreach ($data_table as $clave=> $valor) {
                
                $objproducto = new producto(
                    $data_table[$clave]["idproducto"],
                    $data_table[$clave]["idproveedor_producto"],
                    $data_table[$clave]["idlaboratorio_producto"],
                    $data_table[$clave]["idposicion_producto"],
                    $data_table[$clave]["presentacion"],
                    $data_table[$clave]["codigo_barras"],
                    $data_table[$clave]["etiqueta_producto"],
                    $data_table[$clave]["descripcion_producto"],
                    $data_table[$clave]["valor"],
                    $data_table[$clave]["descuento"],
                    $data_table[$clave]["iva"],
                    $data_table[$clave]["estado_producto"],
                    $data_table[$clave]["tipo_producto"],
                    $data_table[$clave]["stock_minimo"],
                    $data_table[$clave]["stock_normal"],
                    $data_table[$clave]["naturaleza"],
                    $data_table[$clave]["porcentaje_ganancia"]);
            
            array_push($producto_array, $objproducto);
            }
            return $producto_array;
        }else {return false;}
    
        $organizacion_ ="";
        $stock_ = "";
        $tipo_venta_="";
        $sql_=" ";
    }
}
?>
