<?php 

require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');

require_once(DATABASE_PATH."DataSource.php");

require_once(MODEL_PATH."producto.php");
class productoDao {


    public function crearProducto(producto $producto)
    {
        $data_source = new DataSource();
        $sql2 = "INSERT INTO producto VALUES (NULL, :proveedor, :laboratorio, :posicion, :presentacion,:codigo_barras, :etiqueta, :descripcion, :valor, :descuento, :iva, 1, :tipo_producto, :stock_minimo, :stock_normal, :naturaleza,:porcentaje_ganancia)";

        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':proveedor' => $producto->getIdproveedor(),
            ':laboratorio' => $producto->getIdlaboratorio(),
            ':posicion' => $producto->getIdposicion(),
            ':presentacion' => $producto->getPresentacion(),
            ':codigo_barras' => $producto->getCodigo_barras(),
            ':etiqueta' => $producto->getEtiqueta(),
            ':descripcion' => $producto->getDescripcion(),
            ':valor' => $producto->getValor() ,
            ':descuento' => $producto->getDescuento(),
            ':iva' => $producto->getIva(),
            ':tipo_producto' => $producto->getTipo_producto(),
            ':stock_minimo' => $producto->getStock_minimo(),
            ':stock_normal' => $producto->getStock_normal(),
            ':naturaleza' => $producto->getNaturaleza(),
            ':porcentaje_ganancia' => $producto->getPorcentaje_ganancia()
            
        ));
        return $resultado2;
    }

    public function modificarProducto(producto $producto)
    {
        $data_source = new DataSource();
        $sql2 = "INSERT INTO producto VALUES (VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '')";

        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':nombre_asesor' => $asesor->getNombre_asesor(),
            ':documento_asesor' => $asesor->getDocumento_asesor(),
            ':direccion_asesor' => $asesor->getDireccion_asesor(),
            ':telefono_asesor' => $asesor-getTelefono_asesor(),
            ':sexo_asesor' => $asesor->getSexo_asesor(),
            ':fecha_nacimiento_asesor' => $asesor->getFecha_nacimiento_asesor(),
            ':email_asesor' => $asesor->getEmail_asesor()
        ));
        return $resultado2;
    }



    public static function nproductos()
    {
    
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT count(*) as 'numero' FROM `producto`  ");
 
        return $data_table[0]["numero"];
    }

    public function idproducto($idproducto){
  
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "
            SELECT *  FROM producto where idproducto=  :idproducto ",
            array(':idproducto' => $idproducto)
        );
        $objproducto = new producto(
            $data_table[0]["idproducto"],
            $data_table[0]["idproveedor_producto"],
            $data_table[0]["idlaboratorio_producto"],
            $data_table[0]["idposicion_producto"],
            $data_table[0]["presentacion"],
            $data_table[0]["codigo_barras"],
            $data_table[0]["etiqueta_producto"],
            $data_table[0]["descripcion_producto"],
            $data_table[0]["valor"],
            $data_table[0]["descuento"],
            $data_table[0]["iva"],
            $data_table[0]["estado_producto"],
            $data_table[0]["tipo_producto"],
            $data_table[0]["stock_minimo"],
            $data_table[0]["stock_normal"],
            $data_table[0]["naturaleza"],
            $data_table[0]["porcentaje_ganancia"]

        );
        return $objproducto;
    
    }



    public function productoId($idproducto, $numeroproducto){
  
      $data_source = new DataSource();
      $data_table = $data_source->ejecutarConsulta(
          "SELECT *  FROM producto where idproducto_producto =  :idproducto
          and numero_producto = :numeroproducto ",
          array(':idproducto' => $idproducto,
              ':numeroproducto' => $numeroproducto)
      );
      $objproducto = new producto(
        $data_table[0]["idproducto"],
        $data_table[0]["idproveedor_producto"],
        $data_table[0]["idlaboratorio_producto"],
        $data_table[0]["idposicion_producto"],
        $data_table[0]["presentacion"],
        $data_table[0]["codigo_barras"],
        $data_table[0]["etiqueta_producto"],
        $data_table[0]["descripcion_producto"],
        $data_table[0]["valor"],
        $data_table[0]["descuento"],
        $data_table[0]["iva"],
        $data_table[0]["estado_producto"],
        $data_table[0]["tipo_producto"],
        $data_table[0]["stock_minimo"],
        $data_table[0]["stock_normal"],
        $data_table[0]["naturaleza"],
        $data_table[0]["porcentaje_ganancia"]
      );
      return $objproducto;
  
  }


  public static function listaproductos($idproducto){
    echo "bien";
    $data_source = new DataSource();
    $data_table = $data_source->ejecutarConsulta(
        "SELECT *  FROM producto where idproducto_producto = ".$idproducto);
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
            $data_table[$clave]["porcentaje_ganancia"]
          );
        
        array_push($producto_array, $objproducto);
        }
        return $producto_array;
    }else {return false;}
}
public static function listaproductosNoPagadas($idproducto){
  
    $data_source = new DataSource();
    $data_table = $data_source->ejecutarConsulta(
        "SELECT *  FROM producto where idproducto_producto = ".$idproducto." and estado_producto != 'PAGADO' ");
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
}

public static function listadoproductos(){
  
    $data_source = new DataSource();
    $data_table = $data_source->ejecutarConsulta(
        "SELECT *  FROM producto ");
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
}

public static function listaproductosParametrizable($organizacion,$stock,$tipo_venta,$busqueda){

    //stock_actual = productoController::stockNProductos($idproducto);
    //echo $organizacion." ".$stock." ".$tipo_venta." ".$busqueda;
    //var para filtros
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
  
  
  public static function productoMaxNumeroproducto($idproducto){
  
      $data_source=new DataSource();
      $data_table=$data_source->ejecutarConsulta(
          " SELECT sum(lote.cantidad) as 'stock' FROM producto join lote on(producto.idproducto=lote.idproducto) where producto.idproducto=:id ", array(':id' => $idproducto));
          return $data_table[0]["stock"];
   }

   public static function stockNProductos($idproducto){
    
    $data_source = new DataSource();
    $data_table = $data_source->ejecutarConsulta(
        "SELECT sum(lote.cantidad) as 'stock'  FROM lote  where idproducto = ".$idproducto." limit 1");
    if(count($data_table)>0) {
        
        return $data_table['stock'];
    }else {return 0;}
   }


   public static function ultimoIdmedicamento(){
  
    $data_source=new DataSource();
    $data_table=$data_source->ejecutarConsulta(
        " 
        SELECT * FROM `producto`  ORDER BY `producto`.`idproducto`  DESC limit 1 ");
        return $data_table[0]["idproducto"];
 }




  }
?>