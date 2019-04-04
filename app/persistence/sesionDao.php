<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  require_once(DATABASE_PATH."DataSource.php");
  require_once(MODEL_PATH."sesion.php");
class sesionDao
{
    public static function crearSesion(sesion $sesion)
    {
        $data_source = new DataSource();
        $sql2 = "INSERT INTO sesion VALUES (null,:usuario,:clave,1)";
        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':usuario' => $sesion->getUsuario(),
            ':clave' => $sesion->getClave()
        ));
        return $resultado2;
    }
    public function validarSesion($usuario,$clave)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM `sesion` where usuario = :usuario and clave = :clave ",
            array(':usuario' => $usuario,':clave' => $clave)
        );
        
        if(count($data_table)>0){
          
        $objsesion = new sesion(
            $data_table[0]["idsesion"],
            $data_table[0]["usuario"],
            $data_table[0]["clave"],
            $data_table[0]["estado_sesion"]
        );
        return $objsesion;
       }else{return false;}
    }
    public function modificarSesion(sesion $sesion)
    {
        $data_source = new DataSource();
        $sql = "UPDATE sesion SET
        usuario=:usuario,
        clave=:clave,
        estado_sesion=:estado
      WHERE idsesion = :idsesion";
        $resultado2 = $data_source->ejecutarActualizacion($sql, array(
            ':idsesion' => $sesion->getIdsesion(),
            ':usuario' => $sesion->getNombreApellidosesion(),
            ':clave' => $sesion->getclave(),
            ':estado' => $sesion->getestado()
        ));
        return $resultado2;
    }
    public function borrarsesion($id_sesion)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("DELETE FROM sesion
      WHERE idsesion=:id ", array(':id' => $id_sesion));
        if (count($data_table) > 0) {
            return 1;
        } else {
            return false;
        }
    }
    /******************** *OK ******************************/
    public function sesionId($id_sesion)
    {
        
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM `sesion` where idsesion = :id",
            array(':id' => $id_sesion)
        );
        if(count($data_table)==1){
        
        $objsesion = new sesion(
            $data_table[0]["idsesion"],
            $data_table[0]["usuario"],
            $data_table[0]["clave"],
            $data_table[0]["idrol_categoria"],
            $data_table[0]["estado_sesion"]
        );
        return $objsesion;
    }else{
            
            return false;
        }
    }

    public static function usuarioIdSesion($idsesion)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM `sesion` where idsesion = :id ",
            array(':id' => $idsesion)
        );
        $objsesion = new sesion(
            $data_table[0]["idsesion"],
            $data_table[0]["usuario"],
            $data_table[0]["clave"],
            $data_table[0]["estado_sesion"]
        );
        return $objsesion;
    }

    public static function ultimoUsuarioSesion()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "
            SELECT * FROM `sesion`  ORDER BY `sesion`.`idsesion`  DESC limit 1 "
        );
        return $data_table[0]["idsesion"];
    }

}
?>
