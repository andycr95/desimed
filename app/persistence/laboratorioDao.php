<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
require_once(DATABASE_PATH."DataSource.php");
require_once(MODEL_PATH."laboratorio.php");


class laboratorioDao
{

    public function crearlaboratorio(laboratorio $laboratorio)
    {
        $data_source = new DataSource();
        $sql2 = "INSERT INTO laboratorio VALUES (null,:etiqueta_laboratorio)";

        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':etiqueta_laboratorio' => $laboratorio->getEtiqueta()            
        ));
        return $resultado2;
    }

    



    public function borrarlaboratorio($idlaboratorio)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("DELETE FROM laboratorio
      WHERE idlaboratorio=:id ", array(':id' => $idlaboratorio));

        if (count($data_table) > 0) {
            return 1;
        } else {
            return false;
        }
    }


    /******************** *OK ******************************/

    public static function laboratorioId($idlaboratorio)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM laboratorio where idlaboratorio = :id ",
            array(':id' => $idlaboratorio)
        );
        $objlaboratorio = new laboratorio(
            $data_table[0]["idlaboratorio"],
            $data_table[0]["etiqueta_laboratorio"]
        );
        return $objlaboratorio;
    }

    public function listalaboratorios()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM laboratorio  "
        );
        if(count($data_table)>0){
      
            $laboratorios_array=array();
            foreach ($data_table as $clave => $valor){
				$objlaboratorio = new laboratorio(
					$data_table[$clave]["idlaboratorio"],
					$data_table[$clave]["etiqueta_laboratorio"]
				);
            array_push( $laboratorios_array,$objlaboratorio);
            }
        }
        return $laboratorios_array;
    }

}
?>
