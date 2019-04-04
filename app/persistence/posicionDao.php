<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
require_once(DATABASE_PATH."DataSource.php");
require_once(MODEL_PATH."posicion.php");


class posicionDao
{

    public function crearposicion(posicion $posicion)
    {
        $data_source = new DataSource();
        $sql2 = "INSERT INTO posicion VALUES (null,:etiqueta_posicion)";

        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':etiqueta_posicion' => $posicion->getEtiqueta()            
        ));
        return $resultado2;
    }

    



    public function borrarposicion($idposicion)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("DELETE FROM posicion
      WHERE idposicion=:id ", array(':id' => $idposicion));

        if (count($data_table) > 0) {
            return 1;
        } else {
            return false;
        }
    }


    /******************** *OK ******************************/

    public static function posicionId($idposicion)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM posicion where idposicion = :id ",
            array(':id' => $idposicion)
        );
        $objposicion = new posicion(
            $data_table[0]["idposicion"],
            $data_table[0]["etiqueta_posicion"]
        );
        return $objposicion;
    }

    public static function listaposiciones()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM posicion  ");
        
        $posiciones_array=array();    
        if(count($data_table)>0){
            
            foreach ($data_table as $clave => $valor){
				$objposicion = new posicion(
					$data_table[$clave]["idposicion"],
					$data_table[$clave]["etiqueta_posicion"]
				);
                 array_push( $posiciones_array,$objposicion);
            }
        }
        return $posiciones_array;
    }

}
?>
