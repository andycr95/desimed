<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
require_once(DATABASE_PATH."DataSource.php");
require_once(MODEL_PATH."asesor.php");


class asesorDao
{

    public function crearAsesor(asesor $asesor)
    {
        $data_source = new DataSource();
        $sql2 = "INSERT INTO asesor VALUES (null,:nombre_asesor,:documento_asesor,:direccion_asesor,:telefono_asesor,:sexo_asesor,:fecha_nacimiento_asesor,:email_asesor,1)";

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

    public function modificarActividades(actividades $actividades)
    {
        $data_source = new DataSource();
        $sql = "UPDATE asesor SET

        nombre_asesor=:nombre_asesor,
        documento_asesor=:documento_asesor,
        direccion_asesor=:direccion_asesor,
        telefono_asesor=:telefono_asesor
        sexo_asesor=:sexo_asesor,
        fecha_nacimiento_asesor=:fecha_nacimiento_asesor,
        email_asesor=:email_asesor,
        estado_asesor=:estado_asesor

      WHERE idasesor = :idasesor ";

    $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
    ':nombre_asesor' => $asesor->getNombre_asesor(),
    ':documento_asesor' => $asesor->getDocumento_asesor(),
    ':direccion_asesor' => $asesor->getDireccion_asesor(),
    ':telefono_asesor' => $asesor-getTelefono_asesor(),
    ':sexo_asesor' => $asesor->getSexo_asesor(),
    ':fecha_nacimiento_asesor' => $asesor->getFecha_nacimiento_asesor(),
    ':email_asesor' => $asesor->getEmail_asesor(),
    ':estado_asesor' => $asesor->getEstado_asesor()

    ));
        return $resultado2;
    }



    public function borrarAsesor($idAsesor)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("DELETE FROM asesor
      WHERE idasesor=:id ", array(':id' => $idAsesor));

        if (count($data_table) > 0) {
            return 1;
        } else {
            return false;
        }
    }


    /******************** *OK ******************************/

    public function asesorId($idAsesor)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM asesor where idasesor = :id ",
            array(':id' => $idAsesor)
        );
        $objactividades = new actividades(
            $data_table[0]["idasesor"],
            $data_table[0]["nombre_asesor"],
            $data_table[0]["documento_asesor"],
            $data_table[0]["direccion_asesor"],
            $data_table[0]["telefono_asesor"],
            $data_table[0]["sexo_asesor"],
            $data_table[0]["fecha_nacimiento_asesor"],
            $data_table[0]["email_asesor"],
            $data_table[0]["estado_asesor"]
        );
        return $objactividades;
    }

    public function listaAsesores()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM asesor  "
        );
        if(count($data_table)>0){
      
            $asesores_array=array();
            foreach ($data_table as $clave => $valor){
               $objasesores = new asesores(
               $data_table[$clave]["idasesor"],
               $data_table[$clave]["nombre_asesor"],
               $data_table[$clave]["documento_asesor"],
               $data_table[$clave]["direccion_asesor"],
               $data_table[$clave]["telefono_asesor"],
               $data_table[$clave]["sexo_asesor"],
               $data_table[$clave]["fecha_nacimiento_asesor"],
               $data_table[$clave]["email_asesor"],
               $data_table[$clave]["estado_asesor"]
            );
           array_push( $asesores_array,$objasesores );
        }
    }
        return $objactividades;
    }

}
?>
