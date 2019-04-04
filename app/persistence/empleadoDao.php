<?php

/* Ruta del archivo de configuracion principal*/
require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');

/* Rutas del archivo motor de DB */
require_once(DATABASE_PATH."DataSource.php");

/* Rutas del directorio de model */
require_once(MODEL_PATH."sesion.php");
require_once(MODEL_PATH."empleado.php");



class empleadoDao
{

    public static function crearEmpleado(empleado $empleado)
    {
        //print_r($empleado);
        $data_source = new DataSource();
        $sql2 = "INSERT INTO empleado VALUES (null,
        :tipo_empleado,
        :rol_empleado,
        :descripcion_empleado,
        :nombre_empleado,
        :documento,
        :direccion,
        :telefono,
        :sexo,
        :fecha_nacimiento_empleado,:mail,:idsesion_empleado,1)";

        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':tipo_empleado' => $empleado->getTipo_empleado(),
            ':rol_empleado' => $empleado->getRol_empleado(),
            ':descripcion_empleado' => $empleado->getDescripcion_empleado(),
            ':nombre_empleado' => $empleado->getNombre_empleado(),
            ':documento' => $empleado->getDocumento_empleado(),
            ':direccion' => $empleado->getDireccion_empleado(),
            ':telefono' => $empleado->getTelefono_empleado(),
            ':sexo' => $empleado->getSexo_empleado(),
            ':fecha_nacimiento_empleado' => $empleado->getFecha_nacimiento_empleado(),
            ':mail' => $empleado->getEmail_empleado(),
            ':idsesion_empleado' => $empleado->getIdsesion()
           
        ));
        return $resultado2;
    }

    public function modificarempleado(empleado $empleado)
    {
        $data_source = new DataSource();
        $sql = "UPDATE empleado SET

        tipo_empleado=:tipo_empleado,
        rol_empleado=:rol_empleado,
        descripcion_empleado=:descripcion_empleado,
        nombre_empleado=:nombre_apellido_empleado,
        documento_empleado=:documento,
        direccion_empleado=:direccion,
        telefono_empleado=:telefono,
        sexo_empleado=:sexo,
        fecha_nacimiento_empleado=:fecha_nacimiento_empleado,
        email_empleado=:mail,
        estado_empleado=:estado

      WHERE idempleado = :idempleado";

        $resultado2 = $data_source->ejecutarActualizacion($sql, array(
            ':idempleado' => $empleado->getIdempleado(),
            ':tipo_empleado' => $empleado->getTipo_empleado(),
            ':rol_empleado' => $empleado->getRol_empleado(),
            ':descripcion_empleado' => $empleado->getDescripcion_empleado(),
            ':nombre_empleado' => $empleado->getNombre_empleado(),
            ':documento' => $empleado->getDocumento_empleado(),
            ':direccion' => $empleado->getDireccion_empleado(),
            ':telefono' => $empleado->getTelefono_empleado(),
            ':sexo' => $empleado->getSexo_empleado(),
            ':fecha_nacimiento_empleado' => $empleado->getFecha_nacimiento_empleado(),
            ':mail' => $empleado->getEmail_empleado(),
            ':estado' => $empleado->getEstado_empleado()
        ));
        return $resultado2;
    }



    public function borrarempleado($id_empleado)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("DELETE FROM empleado
      WHERE idempleado=:id ", array(':id' => $id_empleado));

        if (count($data_table) > 0) {
            return 1;
        } else {
            return false;
        }
    }

    /*Retorno un listado de empleados a partir del tipo de consulta y el filtro de estado */
    public static function listadoempleados($tipoConsulta,$estado,$busqueda)
    {

        $type ="";
        $status ="";
         switch ($tipoConsulta) {

            case 'az':
            $status = "order by nombre_empleado ASC";
            break;

            case 'za':
            $status = "order by nombre_empleado DESC";
            break;
       
         }

         switch ($estado) {
             //todos
            case 'te':
            $type =" ";
            break;
            
            //conectados
            case 'as':
            $type ="where empleado.tipo_empleado = 'ASESORAS'  ";
            break;
            
            //activos
            case 'em':
            $type ="where empleado.tipo_empleado = 'ENFERMERAS'  ";
            break;
            
            //inactivos
            case 'me':
            $type ="where empleado.tipo_empleado = 'MEDICOS'  ";
            break;

            case 'fa':
            $type ="where empleado.tipo_empleado = 'FARMACIA' ";
            break;

            case 'men':
            $type ="where empleado.tipo_empleado = 'MENSAJERIA' ";
            break;

            case 'ad':
            $type ="where empleado.tipo_empleado = 'ADMINISTRACION' ";
            break;


        }
        if(is_null($busqueda)){
            $busqueda ="";
        }elseif(!is_null($busqueda) && strcmp($type," ")!==0){
            $busqueda="AND  nombre__empleado LIKE  '".$busqueda."%' ";
        }elseif(strcmp($type," ")===0){
            $busqueda="where  nombre_empleado LIKE    '".$busqueda."%' ";
        }
        $data_source = new DataSource();
        $sqlR="SELECT * FROM sesion join empleado on (sesion.idsesion=empleado.idsesion_empleado)   ".$type." ".$busqueda." ".$status;
        $data_table = $data_source->ejecutarConsulta($sqlR
        );
        //echo $sqlR;
        //print_r($data_table);     
        if(count($data_table)>0){
      
            $empleado_array=array();
            foreach ($data_table as $clave => $valor){
                $objempleado = new empleado(
                    $data_table[$clave]["idempleado"],
                    $data_table[$clave]["tipo_empleado"],
                    $data_table[$clave]["rol_empleado"],
                    $data_table[$clave]["descripcion_empleado"],
                    $data_table[$clave]["nombre_empleado"],
                    $data_table[$clave]["documento_empleado"],
                    $data_table[$clave]["direccion_empleado"],
                    $data_table[$clave]["telefono_empleado"],
                    $data_table[$clave]["sexo_empleado"],
                    $data_table[$clave]["fecha_nacimiento_empleado"],
                    $data_table[$clave]["email_empleado"],
                    $data_table[$clave]["idsesion_empleado"],
                    $data_table[$clave]["estado_empleado"]
                );
           array_push($empleado_array,$objempleado);
          }

          return  $empleado_array;
        }else{ return false;}

    }


    public static function listaAsesoras()
    {

        
        $data_source = new DataSource();
        $sqlR="SELECT * from empleado where empleado.tipo_empleado = 'ASESORAS' ";
        $data_table = $data_source->ejecutarConsulta($sqlR
        );
        //echo $sqlR;
        //print_r($data_table);     
        if(count($data_table)>0){
      
            $empleado_array=array();
            foreach ($data_table as $clave => $valor){
                $objempleado = new empleado(
                    $data_table[$clave]["idempleado"],
                    $data_table[$clave]["tipo_empleado"],
                    $data_table[$clave]["rol_empleado"],
                    $data_table[$clave]["descripcion_empleado"],
                    $data_table[$clave]["nombre_empleado"],
                    $data_table[$clave]["documento_empleado"],
                    $data_table[$clave]["direccion_empleado"],
                    $data_table[$clave]["telefono_empleado"],
                    $data_table[$clave]["sexo_empleado"],
                    $data_table[$clave]["fecha_nacimiento_empleado"],
                    $data_table[$clave]["email_empleado"],
                    $data_table[$clave]["idsesion_empleado"],
                    $data_table[$clave]["estado_empleado"]
                );
           array_push($empleado_array,$objempleado);
          }

          return  $empleado_array;
        }else{ return false;}

    }


    public static function nempleados($estado)
    {
    
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT count(*) as 'numero' FROM `empleado`  ");
 
        return $data_table[0]["numero"];
    }





    public static function empleadoId($id_empleado)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM `empleado` where idempleado = :id ",
            array(':id' => $id_empleado)
        );
        $objempleado = new empleado(
            $data_table[0]["idempleado"],
            $data_table[0]["tipo_empleado"],
            $data_table[0]["rol_empleado"],
            $data_table[0]["descripcion_empleado"],
            $data_table[0]["nombre_empleado"],
            $data_table[0]["documento_empleado"],
            $data_table[0]["direccion_empleado"],
            $data_table[0]["telefono_empleado"],
            $data_table[0]["sexo_empleado"],
            $data_table[0]["fecha_nacimiento_empleado"],
            $data_table[0]["email_empleado"],
            $data_table[0]["idsesion_empleado"],
            $data_table[0]["estado_empleado"]
        );
        return $objempleado;
    }



    public static function empleadoIdSesion($idsesion)
    {
        
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM `empleado` where idsesion_empleado = :id",array(':id' => intval($idsesion))
        );
        $objempleado = new empleado(
            $data_table[0]["idempleado"],
            $data_table[0]["tipo_empleado"],
            $data_table[0]["rol_empleado"],
            $data_table[0]["descripcion_empleado"],
            $data_table[0]["nombre_empleado"],
            $data_table[0]["documento_empleado"],
            $data_table[0]["direccion_empleado"],
            $data_table[0]["telefono_empleado"],
            $data_table[0]["sexo_empleado"],
            $data_table[0]["fecha_nacimiento_empleado"],
            $data_table[0]["email_empleado"],
            $data_table[0]["idsesion_empleado"],
            $data_table[0]["estado_empleado"]
        );
        return $objempleado;
    }




    
}
?>