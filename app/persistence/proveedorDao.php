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


    public static function listaproveedoresParametrizable($organizacion,$busqueda){

        $organizacion_ ="";
        $sql_=" ";
    
        switch ($organizacion) {
    
            case 'az':
            $organizacion_ = "order by razon_social ASC";
            break;
    
            case 'za':
            $organizacion_ = "order by razon_social DESC";
            break;

            case 'fr':
            $organizacion_ = "order by razon_social DESC";
            break;

            case 'ci':
            $organizacion_ = "order by ciudad_contacto ASC";
            break;
          
         }
    
    
        if(!is_null($busqueda)){
            $sql_ =  " Where razon_social LIKE '%".$busqueda."%' "; 
        }
    
    
         $sql ="SELECT * FROM `proveedor` ".$sql_." ".$organizacion_;
    
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta($sql);
    
        if(count($data_table)>0) {
            
            $proveedor_array=array();
            foreach ($data_table as $clave=> $valor) {
                
                $objproveedor = new proveedor(
                    $data_table[$clave]["idproveedor"],
                    $data_table[$clave]["razon_social"],
                    $data_table[$clave]["etiqueta_contacto"],
                    $data_table[$clave]["nombre_contacto"],
                    $data_table[$clave]["telefono_contacto"],
                    $data_table[$clave]["direccion_contacto"],
                    $data_table[$clave]["ciudad_contacto"]);
            
            array_push($proveedor_array, $objproveedor);
            }
            return $proveedor_array;
        }else {return false;}
    
        $organizacion_ ="";
        $sql_=" ";
    }
}
?>
