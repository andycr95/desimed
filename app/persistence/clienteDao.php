<?php
/* Ruta del archivo de configuracion principal*/
require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');

/* Rutas del archivo motor de DB */
require_once(DATABASE_PATH."DataSource.php");

/* Rutas del directorio de model */
require_once(MODEL_PATH."sesion.php");
require_once(MODEL_PATH."cliente.php");

class clienteDao
{
    public static function crearCliente(cliente $cliente)
    {
        $data_source = new DataSource();
        $sql2 = "INSERT INTO cliente VALUES (
        null,
        :tipo_cliente,
        :idempleado,
        :registro,
        :fecha_registro(),
        :nombre_apellido,
        :documento,
        :sexo,
        :fecha_nacimiento,
        :direccion,
        :telefono,
        :celular,
        :email,
        :discapacidad,
        :extracto,
        :nombre_beneficiario,
        :sexo_beneficiario,
        :documento_beneficiario,
        :parentesco_beneficiario,
        :discapacidad_beneficiario,
        :discapacidad_desc_beneficiario,
        :nombre_beneficiario2,
        :sexo_beneficiario2,
        :documento_beneficiario2,
        :parentesco_beneficiario2,
        :discapacidad_beneficiario2,
        :discapacidad_desc_beneficiario2,
        :nombre_beneficiario3,
        :sexo_beneficiario3,
        :documento_beneficiario3,
        :parentesco_beneficiario3,
        :discapacidad_beneficiario3,
        :discapacidad_desc_beneficiario3,
        :nombre_beneficiario4,
        :sexo_beneficiario4,
        :documento_beneficiario4,
        :parentesco_beneficiario4,
        :discapacidad_beneficiario4,
        :discapacidad_desc_beneficiario4,
        :nombre_afiliacion,
        :sexo_afiliacion,
        :,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        1
        )";

       
        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':tipo_cliente' => $cliente->getTipo_cliente(),
            ':nombre_apellido' => $cliente->getNombre_apellido(),
            ':documento' => $cliente->getDocumento(),
            ':sexo' => $cliente->getSexo(),
            ':fecha_nacimiento' => $cliente->getFecha_nacimiento(),
            ':direccion' => $cliente->getDireccion(),
            ':telefono' => $cliente->getTelefono(),
            ':celular' => $cliente->getCelular(),
            ':email' => $cliente->getEmail()
            
        ));
        return $resultado2;
    }

    public static function crearClienteAfiliado(cliente $cliente)
    {
        $data_source = new DataSource();
        $sql2 = "INSERT INTO cliente VALUES (
        null,
        :tipo_cliente,
        :idasesor_cliente,
        :registro_cliente,
        :fecha_registro,
        :nombre_apellido,
        :documento,
        :sexo,
        :fecha_nacimiento,
        :direccion,
        :telefono,
        :celular,
        :email,
        :dispacidad,
        :extracto,
        :nombre_beneficiario,
        :sexo_beneficiario,
        :documento_beneficiario,
        :parentesco_beneficiario,
        :discapacidad_beneficiario,
        :discapacidad_desc_beneficiario,
        :nombre_beneficiario2,
        :sexo_beneficiario2,
        :documento_beneficiario2,
        :parentesco_beneficiario2,
        :discapacidad_beneficiario2,
        :discapacidad_desc_beneficiari2,
        :nombre_afiliacion,
        :sexo_afiliacion,
        :documento_afiliacion,
        :parentesco_afiliacion,
        :discapacidad_afiliacion,
        :discapaciadad_desc_afiliacion,
        :nombre_afiliacion2,
        :sexo_afiliacion2,
        :documento_afiliacion2,
        :parentesco_afiliacion2,
        :discapacidad_afiliacion2,
        :discapaciadad_desc_afiliacion2,
        :diabetes,
        :hipertension,
        :enf_cardiacas,
        :estres,
        :osteoporosis,
        :artitis,
        :cancer,
        :alergias,
        :migrana,
        :ets,
        :anemia,
        :pulmonia,
        :otras_cual,
        1
        )";

       
        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':tipo_cliente' => $cliente->getTipo_cliente(),
            ':idasesor_cliente' => $cliente->getIdasesor(),
            ':registro_cliente' => $cliente->getRegistro(),
            ':fecha_registro' => $cliente->getFecha_registro(),
            ':nombre_apellido' => $cliente->getNombre_apellido(),
            ':documento' => $cliente->getDocumento(),
            ':sexo' => $cliente->getSexo(),
            ':fecha_nacimiento' => $cliente->getFecha_nacimiento(),
            ':direccion' => $cliente->getDireccion(),
            ':telefono' => $cliente->getTelefono(),
            ':celular' => $cliente->getCelular(),
            ':email' => $cliente->getEmail(),
            ':dispacidad' => $cliente->getDiscapacidad(),
            ':extracto' => $cliente->getExtracto(),
            ':nombre_beneficiario' => $cliente->getNombre_beneficiario(),
            ':sexo_beneficiario' => $cliente->getSexo_beneficiario(),
            ':documento_beneficiario' => $cliente->getDocumento_beneficiario(),
            ':parentesco_beneficiario' => $cliente->getParentesco_beneficiario(),
            ':discapacidad_beneficiario' => $cliente->getDiscapacidad_beneficiario(),
            ':discapacidad_desc_beneficiario' => $cliente->getDiscapacidad_desc_beneficiario(),
            ':nombre_beneficiario2' => $cliente->getNombre_beneficiario2,
            ':sexo_beneficiario2' => $cliente->getSexo_beneficiario2() ,
            ':documento_beneficiario2' => $cliente->getDocumento_beneficiario2(),
            ':parentesco_beneficiario2' => $cliente->getParentesco_beneficiario2(),
            ':discapacidad_beneficiario2' => $cliente->getDiscapacidad_beneficiario2(),
            ':discapacidad_desc_beneficiario2' => $cliente->getDiscapacidad_desc_beneficiario2(),
            ':nombre_afiliacion' => $cliente->getNombre_afiliacion(),
            ':sexo_afiliacion' => $cliente->getSexo_afiliacion(),
            ':documento_afiliacion' => $cliente->getDocumento_afiliacion(),
            ':parentesco_afiliacion' => $cliente->getParentesco_afiliacion(),
            ':discapacidad_afiliacion' => $cliente->getDiscapacidad_afiliacion(),
            ':discapacidad_desc_afiliacion' => $cliente->getDiscapacidad_desc_afiliacion(),
            ':nombre_afiliacion2' => $cliente->getNombre_afiliacion2(),
            ':sexo_afiliacion2' => $cliente->getSexo_afiliacion2(),
            ':documento_afiliacion2' => $cliente->getDocumento_afiliacion2(),
            ':parentesco_afiliacion2' => $cliente->getParentesco_afiliacion2(),
            ':discapacidad_afiliacion2' => $cliente->getDiscapacidad_afiliacion2(),
            ':discapacidad_desc_afiliacion2' => $cliente->getDiscapacidad_desc_afiliacion2(),
            ':diabetes' => $cliente->getDiabetes() ,
            ':hipertension' => $cliente->getHipertension(),
            ':enf_cardiacas' => $cliente->getEnf_cardiacas(),
            ':estres' => $cliente->getEstres(),
            ':osteoporosis' => $cliente->getOsteoporosis(),
            ':artitis' => $cliente->getArtitris(),
            ':cancer' => $cliente->getCancer(),
            ':alergias' => $cliente->getAlergias(),
            ':migrana' => $cliente->getMigrana(),
            ':ets' => $cliente->getEts(),
            ':anemia' => $cliente->getAnemia() ,
            ':pulmonia' => $cliente->getPulmonia(),
            ':otras_cual' => $cliente->getOtras_cual()
        ));
        return $resultado2;
    }



    public function borrarCliente($id_cliente)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("DELETE FROM cliente
      WHERE idcliente=:id ", array(':id' => $id_cliente));

        if (count($data_table) > 0) {
            return 1;
        } else {
            return false;
        }
    }


    /******************** *OK ******************************/

    public function listadoCliente($id_cliente)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM cliente");

        if(count($data_table)>0){
      
        $usuario_array=array();
        foreach ($data_table as $clave => $valor){
        $objCliente = new cliente(
            $data_table[$clave]["idcliente"],
            $data_table[$clave]["tipo_cliente"],
            $data_table[$clave]["idasesor_cliente"],
            $data_table[$clave]["registro_cliente"],
            $data_table[$clave]["fecha_registro"],
            $data_table[$clave]["nombre_apellido"],
            $data_table[$clave]["documento"],
            $data_table[$clave]["sexo"],
            $data_table[$clave]["fecha_nacimiento"],
            $data_table[$clave]["direccion"],
            $data_table[$clave]["telefono"],
            $data_table[$clave]["celular"],
            $data_table[$clave]["email"],
            $data_table[$clave]["dispacidad"],
            $data_table[$clave]["extracto"],
            $data_table[$clave]["nombre_beneficiario"],
            $data_table[$clave]["sexo_beneficiario"],
            $data_table[$clave]["documento_beneficiario"],
            $data_table[$clave]["parentesco_beneficiario"],
            $data_table[$clave]["discapacidad_beneficiario"],
            $data_table[$clave]["discapacidad_desc_beneficiario"],
            $data_table[$clave]["nombre_beneficiario2"],
            $data_table[$clave]["sexo_beneficiario2"],
            $data_table[$clave]["documento_beneficiario2"],
            $data_table[$clave]["parentesco_beneficiario2"],
            $data_table[$clave]["discapacidad_beneficiario2"],
            $data_table[$clave]["discapacidad_desc_beneficiari2"],
            $data_table[$clave]["nombre_afiliacion"],
            $data_table[$clave]["sexo_afiliacion"],
            $data_table[$clave]["documento_afiliacion"],
            $data_table[$clave]["parentesco_afiliacion"],
            $data_table[$clave]["discapacidad_afiliacion"],
            $data_table[$clave]["discapaciadad_desc_afiliacion"],
            $data_table[$clave]["nombre_afiliacion2"],
            $data_table[$clave]["sexo_afiliacion2"],
            $data_table[$clave]["documento_afiliacion2"],
            $data_table[$clave]["parentesco_afiliacion2"],
            $data_table[$clave]["discapacidad_afiliacion2"],
            $data_table[$clave]["discapaciadad_desc_afiliacion2"],
            $data_table[$clave]["diabetes"],
            $data_table[$clave]["hipertension"],
            $data_table[$clave]["enf_cardiacas"],
            $data_table[$clave]["estres"],
            $data_table[$clave]["osteoporosis"],
            $data_table[$clave]["artitis"],
            $data_table[$clave]["cancer"],
            $data_table[$clave]["alergias"],
            $data_table[$clave]["migrana"],
            $data_table[$clave]["ets"],
            $data_table[$clave]["anemia"],
            $data_table[$clave]["pulmonia"],
            $data_table[$clave]["otras_cual"],
            $data_table[$clave]["estado_cliente"]
        );
        array_push($usuario_array,$objCliente);
    }
          return  $usuario_array;
        }else{ return false;}
    }


    /*Retorno un listado de usuarios a partir del tipo de consulta y el filtro de estado */
    public static function listaClientes($tipoConsulta,$estado,$busqueda)
    {

        $type ="";
        $status ="";
         switch ($tipoConsulta) {
            case 'fr':
            $type = "order by fecha_registro_cliente DESC";
            break;

            case 'az':
            $type = "order by nombre_apellido_cliente ASC";
            break;

            case 'za':
            $type = "order by nombre_apellido_cliente DESC";
            break;

            // case 'ci':
            // $status = "order by etiqueta_municipio ASC";
            // break;          
         }

         switch ($estado) {
             //todos
            case 'tc':
            $status =" ";
            break;
                  
            //activos
            case 'ca':
            $status ="where cliente.estado_cliente = 1  ";
            break;
            
            //inactivos
            case 'ci':
            $status ="where cliente.estado_cliente = 0  ";
            break;

            case 'cm':
            $status ="where cliente.estado_cliente = 2 ";
            break;

            case 'cp':
            $status ="where cliente.estado_cliente = 3 ";
            break;


        }
        if(is_null($busqueda)){
            $busqueda ="";
        }elseif(!is_null($busqueda) && strcmp($type," ")!==0){
            $busqueda="AND  nombre_apellido_cliente LIKE  '%".$busqueda."%' ";
        }elseif(strcmp($type," ")===0){
            $busqueda="where  nombre_apellido_cliente LIKE    '%".$busqueda."%' ";
        }
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("
        SELECT * FROM `cliente`  ".$type." ".$busqueda." ".$status);

        if(count($data_table)>0){
      
            $cliente_array=array();
            foreach ($data_table as $clave => $valor){
            $objCliente = new cliente(
                $$data_table[$clave]["idcliente"],
                $data_table[$clave]["tipo_cliente"],
                $data_table[$clave]["idasesor_cliente"],
                $data_table[$clave]["registro_cliente"],
                $data_table[$clave]["fecha_registro"],
                $data_table[$clave]["nombre_apellido"],
                $data_table[$clave]["documento"],
                $data_table[$clave]["sexo"],
                $data_table[$clave]["fecha_nacimiento"],
                $data_table[$clave]["direccion"],
                $data_table[$clave]["telefono"],
                $data_table[$clave]["celular"],
                $data_table[$clave]["email"],
                $data_table[$clave]["dispacidad"],
                $data_table[$clave]["extracto"],
                $data_table[$clave]["nombre_beneficiario"],
                $data_table[$clave]["sexo_beneficiario"],
                $data_table[$clave]["documento_beneficiario"],
                $data_table[$clave]["parentesco_beneficiario"],
                $data_table[$clave]["discapacidad_beneficiario"],
                $data_table[$clave]["discapacidad_desc_beneficiario"],
                $data_table[$clave]["nombre_beneficiario2"],
                $data_table[$clave]["sexo_beneficiario2"],
                $data_table[$clave]["documento_beneficiario2"],
                $data_table[$clave]["parentesco_beneficiario2"],
                $data_table[$clave]["discapacidad_beneficiario2"],
                $data_table[$clave]["discapacidad_desc_beneficiari2"],
                $data_table[$clave]["nombre_afiliacion"],
                $data_table[$clave]["sexo_afiliacion"],
                $data_table[$clave]["documento_afiliacion"],
                $data_table[$clave]["parentesco_afiliacion"],
                $data_table[$clave]["discapacidad_afiliacion"],
                $data_table[$clave]["discapaciadad_desc_afiliacion"],
                $data_table[$clave]["nombre_afiliacion2"],
                $data_table[$clave]["sexo_afiliacion2"],
                $data_table[$clave]["documento_afiliacion2"],
                $data_table[$clave]["parentesco_afiliacion2"],
                $data_table[$clave]["discapacidad_afiliacion2"],
                $data_table[$clave]["discapaciadad_desc_afiliacion2"],
                $data_table[$clave]["diabetes"],
                $data_table[$clave]["hipertension"],
                $data_table[$clave]["enf_cardiacas"],
                $data_table[$clave]["estres"],
                $data_table[$clave]["osteoporosis"],
                $data_table[$clave]["artitis"],
                $data_table[$clave]["cancer"],
                $data_table[$clave]["alergias"],
                $data_table[$clave]["migrana"],
                $data_table[$clave]["ets"],
                $data_table[$clave]["anemia"],
                $data_table[$clave]["pulmonia"],
                $data_table[$clave]["otras_cual"],
            $data_table[$clave]["estado_cliente"]
            );
            array_push($cliente_array,$objCliente);
        }
              return  $cliente_array;
            }else{ return false;}

    }


    public static function nClientes($estado)
    {
        $consulta ="";

        if($estado != 4){
            $consulta ="where estado_cliente =  ".$estado;
        }else{
            $consulta = " ";

        }

        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT count(*) as 'numero' FROM cliente ".$consulta);
 
        return $data_table[0]["numero"];
    }


    public static function clienteId($id_cliente)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM `cliente` where idcliente =".$id_cliente);
        $objCliente = new cliente(
            $data_table[0]["idcliente"],
            $data_table[0]["tipo_cliente"],
            $data_table[0]["idasesor_cliente"],
            $data_table[0]["registro_cliente"],
            $data_table[0]["fecha_registro"],
            $data_table[0]["nombre_apellido"],
            $data_table[0]["documento"],
            $data_table[0]["sexo"],
            $data_table[0]["fecha_nacimiento"],
            $data_table[0]["direccion"],
            $data_table[0]["telefono"],
            $data_table[0]["celular"],
            $data_table[0]["email"],
            $data_table[0]["dispacidad"],
            $data_table[0]["extracto"],
            $data_table[0]["nombre_beneficiario"],
            $data_table[0]["sexo_beneficiario"],
            $data_table[0]["documento_beneficiario"],
            $data_table[0]["parentesco_beneficiario"],
            $data_table[0]["discapacidad_beneficiario"],
            $data_table[0]["discapacidad_desc_beneficiario"],
            $data_table[0]["nombre_beneficiario2"],
            $data_table[0]["sexo_beneficiario2"],
            $data_table[0]["documento_beneficiario2"],
            $data_table[0]["parentesco_beneficiario2"],
            $data_table[0]["discapacidad_beneficiario2"],
            $data_table[0]["discapacidad_desc_beneficiari2"],
            $data_table[0]["nombre_afiliacion"],
            $data_table[0]["sexo_afiliacion"],
            $data_table[0]["documento_afiliacion"],
            $data_table[0]["parentesco_afiliacion"],
            $data_table[0]["discapacidad_afiliacion"],
            $data_table[0]["discapaciadad_desc_afiliacion"],
            $data_table[0]["nombre_afiliacion2"],
            $data_table[0]["sexo_afiliacion2"],
            $data_table[0]["documento_afiliacion2"],
            $data_table[0]["parentesco_afiliacion2"],
            $data_table[0]["discapacidad_afiliacion2"],
            $data_table[0]["discapaciadad_desc_afiliacion2"],
            $data_table[0]["diabetes"],
            $data_table[0]["hipertension"],
            $data_table[0]["enf_cardiacas"],
            $data_table[0][" estres"],
            $data_table[0]["osteoporosis"],
            $data_table[0]["artitis"],
            $data_table[0]["cancer"],
            $data_table[0]["alergias"],
            $data_table[0]["migrana"],
            $data_table[0]["ets"],
            $data_table[0]["anemia"],
            $data_table[0]["pulmonia"],
            $data_table[0]["otras_cual"],
        $data_table[0]["estado_cliente"]
        );
        return $objCliente;
    }

}
?>
