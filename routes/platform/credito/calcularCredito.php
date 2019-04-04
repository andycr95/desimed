<?php 
/* Ruta del archivo de configuracion principal*/
require_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');
require_once (TOOLS_PATH."IRRHelper.php");
/* Var POST*/
//echo "calcula credito simulador";
$ah=72;
$am=65;
$generoX =$_POST['genero'];
$tasa = $_POST['tasa'];
//  = $_POST['fecha'];
$monto =$_POST['monto'];
//echo "monto".$monto;
$cuotas = $_POST['plazo'];
$ingresos = $_POST['ingresos'];
$descuentos = $_POST['descuentos_ley'];
$nomina = $_POST['descuentos_nomina']; 
$aval = $_POST['aval'];
$seguro = $_POST['seguro']; 
$administracion = $_POST['administracion'];
$edad = $_POST['edad'];
$cartera = $_POST['cartera'];
$montoAval = ((floatval($aval)/100)+1) * floatval($monto);
//echo "<br> cartera ".$cartera." . t".$tasa." -  edad".$edad."  - m".$monto." - c".$cuotas."  - i".$ingresos." - d".$descuentos." - n".$nomina ;
$a = ( (floatval($tasa)/100) * floatval($montoAval) );
$b = (1 -pow(1 + (floatval($tasa)/100),- intval($cuotas))   );
$cuota =floatval($a) / floatval($b);
$capacidad = (floatval($ingresos)-((floatval($descuentos)+floatval($nomina)))) *0.5;
$montoSugerido= (floatval($capacidad) *(1 -pow(1 + (floatval($tasa)/100),- intval($cuotas))   )  )  / (floatval($tasa)/100);
$capitalVivo=$montoAval;
$capitalAmortizado =0;
$tasa = floatval($tasa)/100;
$cuota = floatval($cuota) + (  floatval($seguro) +  floatval($administracion) );
$arrayN = array();
$arrayN[0]=floatVal($montoAval)*-1 ;
for ($i=1 ; $i <= $cuotas ; $i++ ) { 
    $arrayN[$i] = $cuota;
}
$tasaOfrecida=IRRHelper::IRR($arrayN);
$tasa = $tasaOfrecida;
$res_jub = "";
$res_car = "";
if(strcmp($generoX, "h") == 0){ $genero = $ah; }else{$genero = $am;}

if( ( (intval($edad)*12) + intval($cuotas) ) > (intval($genero)*12)  ){
    $res_jub ="No es aceptado por restriccion de jubilacion";
}else{
    $res_jub =" Aceptado por restriccion de jubilacion";
}

if( (intval($monto)>intval($cartera) ) and (intval($capacidad)>intval($cuota)) ){
    $res_car = "Aceptado por restriccion de cartera";

}else{
    $res_car = "No es aceptado por restriccion de cartera";

}
//<!--<input type='hidden' value='".(floatval($tasa)*100)."' name='tasa_ofrecidad_f' />--> 
//echo "valor tasa ofrecidad ".$tasa;
echo 
"
<div class='row'>
<div class='col-md-6'>
<table class='table table-bordered'>
    <tr>
        <th class='color-dark-table'>
            Capacidad de endeudamiento
        </th>
        <td class='color-bg-2'>
        <input type='text' value='".number_format(round($capacidad,0),0)."' id='capacidad_f' name='capacidad_f' />                                                     
        </td>
    </tr>
    <tr>
        <th class='color-dark-table'>
            Monto .
        </th>
        <td class='color-bg-2'>
        <input type='text' value='".number_format(round($montoAval,2),0)."' id='monto_aval' name='monto_aval' />                                                   
        </td>
    </tr>
    <tr>
        <th class='color-dark-table'>
            Cuota.
        </th>
        <td class='color-bg-2'>
        <input type='text' value='".number_format($cuota ,0)."' id='cuotaX' name='cuotaX' />                                                   
        </td>
    </tr>
    <tr>
        <th class='color-dark-table'>
            Tasa ofrecida.
        </th>
        <td class='color-bg-2'>
           
        <input type='text' value='".round((floatval($tasa)*100),2)."%' name='tasa_ofrecidad_f' />
                                                       
        </td>
    </tr>
    <tr>
        <th class='color-dark-table'>
        Edad del cliente.
        </th>
        <td class='color-bg-2'>
         ".$edad."'                                                    
        </td>
    </tr>
    <tr>
        <th class='color-dark-table'>
        Restriccion por jubilacion.
        </th>
        <td class='color-bg-2'>
         ".$res_jub."'                                                    
        </td>
    </tr>
    <tr>
        <th class='color-dark-table'>
        Restriccion por cartera.
        </th>
        <td class='color-bg-2'>
         ".$res_car."'                                                    
        </td>
    </tr>
    

</table>
</div>
</div>	
<table class='table table-bordered'>
    <thead>
        <tr>
            <th class='color-dark-table'>Periodo</th>
            <th class='color-bg-1'>Cuota</th>
            <th class='color-bg-2'>Interes</th>
            <th class='color-dark-table'>Amortizacion</th>
            <th class='color-bg-3'>Capital vivo</th>
            <th class='color-bg-4'>Capital amortizado</th>
        </tr>
    </thead>
    <tbody>";
        for ($i=1; $i < $cuotas+1; $i++) { 
            $interes =floatval($tasa)*floatval($capitalVivo);
            $amortizacion=floatval($cuota)-floatval($interes);
            $capitalVivo=floatval($capitalVivo) - floatval($amortizacion);
            $capitalAmortizado = floatval($capitalAmortizado) +floatval($amortizacion);
            echo    
        "<tr>
            <td class='color-bg-2'>".$i."</td>
            <td class='color-bg-2'>".number_format(round($cuota,2),0)."</td>
            <td class='color-bg-2'>".number_format(round($interes,2),0)."</td>
            <td class='color-bg-2'>".number_format(round($amortizacion,2),0)."</td>
            <td class='color-bg-2'>".number_format(round($capitalVivo,2),0)."</td>
            <td class='color-bg-2'>".number_format(round($capitalAmortizado,2),0)."</td>
        </tr>";
        }
    echo 
   "</tbody>
</table> ";
?>
    
    
