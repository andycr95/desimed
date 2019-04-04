<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
require_once(DATABASE_PATH."DataSource.php");
require_once(MODEL_PATH."cartera.php");

class carteraDao
{
    public function listadoCartera()
    {
        
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("
        select c.idcredito as credito, cred.tipoCredito as tipo,ent.nombreEntidad as pagaduria,
count(c.numeroCuota) as cuotaPendientes, min(c.fechaProgramada) as fechaInical, 
max(c.fechaProgramada) as fechaFinal, sum(c.valor) as totalDeuda,
cli.documentoCliente as identificacion, cli.nombreApellidoCliente as nombre,
cli.telefonoPersonalCliente as telefono
from Cuota as c join credito as cred on c.idcredito=cred.idcredito 
join entidad as ent on cred.idEntidad=ent.identidad
join cliente as cli on cli.idcliente=cred.idcliente
where c.fechaProgramada between '2011-02-28' and '2011-07-28' and c.estado !='PAGADO'
group by c.idcredito
order by c.idcredito"
        );

        if(count($data_table)>0){
      
            $cartera_array=array();
            foreach ($data_table as $clave => $valor){
            $objcartera = new cartera(
            $data_table[$clave]["idCredito"],
            $data_table[$clave]["modalidad"],
            $data_table[$clave]["fechaCuota"],
            $data_table[$clave]["cuota"],
            $data_table[$clave]["cuotaOtro"],
            $data_table[$clave]["nombre"],
            $data_table[$clave]["documento"],
            $data_table[$clave]["telefono"]
           );
           array_push($cartera_array,$objcartera);
          }
          return  $cartera_array;
        }else{ return false;}
    }


}
?>
