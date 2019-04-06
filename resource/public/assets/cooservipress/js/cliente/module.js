/***********************************************/
/* Funciones en susuario.                      */
/***********************************************/
/* Buscar usuario. en el dashboard*/
$(document).on('click','#buscarCliente',function(e){
    $("#tablaDinamica").html("");
   sendEventApp('POST',routesAppPlatform()+'cliente/consultaFiltro.php',
   params = {
       "busqueda" : document.getElementsByName("busqueda")[0].value,
       "consulta" : document.getElementsByName("consulta")[0].value,
       "estado" : document.getElementsByName("estado")[0].value
     },'#tablaDinamica');  
console.log('bien');
     return false;
 });
 /* ver ficha de cliente*/
$(document).on('click','#verFicha',function(e){
    $("#tablaDinamica").html("");
  console.log('bien');
   sendEventApp('POST',routesAppPlatform()+'cliente/verFicha.php',
   params = {
       "id" : this.value
     },'#tablaDinamica'); 
     return false;
 });
/* Buscar usuario. en el dashboard*/
 $(document).on('click','#refreshUsuario',function(e){
     console.log('hola');
    $("#tablaDinamica").html("");
   sendEventApp('POST',routesAppPlatform()+'usuario/refreshTablaUsuario.php',
   params = {},'#tablaDinamica');  
     return false;
 });
function registrarCliente(){
    //alert(document.getElementsByName("idsesion")[0].value);
    $("#tablaDinamica").html("");
   sendEventApp('POST',routesAppPlatform()+'cliente/registrarCliente.php',
   params = {
       "nombre_apellido_cliente" : document.getElementsByName("nombre_apellido_cliente")[0].value,
       "documento_cliente" : document.getElementsByName("documento_cliente")[0].value,
       "fecha" : document.getElementsByName("fecha")[0].value,
       "genero" : document.getElementsByName("genero")[0].value,
       "direccion" : document.getElementsByName("direccion")[0].value,
       "telefono_fijo_cliente" : document.getElementsByName("telefono")[0].value,
       "telefono_personal_cliente" : document.getElementsByName("celular")[0].value,
       "mail" : document.getElementsByName("mail")[0].value,
    },'#resultado');  
     return false;
    
}

function registrarAfiliado(){
    var formData = new FormData();
      formData.append("referencia_cliente" ,document.getElementsByName("referencia_cliente")[0].value);
      formData.append("selectAsesoras" , document.getElementsByName("selectAsesoras")[0].value);
      formData.append("nombre_apellido_cliente" , document.getElementsByName("nombre_apellido_cliente")[0].value);
      formData.append("documento_cliente" , document.getElementsByName("documento_cliente")[0].value);
      formData.append("selectAsesoras" , document.getElementsByName("selectAsesoras")[0].value);
      formData.append("genero" , document.getElementsByName("genero")[0].value);
      formData.append("fecha" , document.getElementsByName("fecha")[0].value);
      formData.append("direccion" , document.getElementsByName("direccion")[0].value);
      formData.append("extracto" , document.getElementsByName("extracto")[0].value);
      formData.append("telefono" , document.getElementsByName("telefono")[0].value);
      formData.append("celular" , document.getElementsByName("celular")[0].value);
      formData.append("mail" , document.getElementsByName("mail")[0].value);
      formData.append("descripcion" , document.getElementsByName("descripcion")[0].value);
      
      formData.append("extracto" , document.getElementsByName("extracto")[0].value);
      formData.append("extracto" , document.getElementsByName("extracto")[0].value);
      formData.append("extracto" , document.getElementsByName("extracto")[0].value);
      formData.append("extracto" , document.getElementsByName("extracto")[0].value);






   sendEventApp('POST',routesAppPlatform()+'cliente/registrarCliente.php',
   formData,'#resultado');  
     return false;
    
}
// $(document).on('click', '#desbloquear', function (e) {
//     $("#editarCliente").prop('disabled', false);
//     $("#nombreCliente").prop('readonly', false);
//     $("#tipo_documento").prop('readonly', false);
//     $("#documento").prop('readonly', false);
//     $("#fecha_expedicion").prop('readonly', false);
//     $("#lugar_expedicion").prop('readonly', false);
//     $("#nacionalidad").prop('readonly', false);
//     $("#fecha_nacimiento").prop('readonly', false);
//     $("#lugar_nacimiento").prop('readonly', false);
//     $("#genero").prop('readonly', false);
//     $("#nivel_educativo").prop('readonly', false);
//     $("#profesion").prop('readonly', false);
//     $("#cargo").prop('readonly', false);
//     $("#total_ingresos").prop('readonly', false);
//     $("#activo_vehiculo").prop('readonly', false);
//     $("#activo_otros").prop('readonly', false);
//     $("#total_pasivo").prop('readonly', false);
//     $("#otros_ingresos").prop('readonly', false);
//     $("#total_egresos").prop('readonly', false);
//     $("#estado_civil").prop('readonly', false);
//     $("#email").prop('readonly', false);
//     $("#telefono_fijo").prop('readonly', false);
//     $("#telefono_personal").prop('readonly', false);
//     $("#direccion_residencia").prop('readonly', false);
//     $("#ciudad").prop('readonly', false);
//     $("#estrato").prop('readonly', false);
//     $("#posee_vehiculo").prop('readonly', false);
//     $("#pignorado").prop('readonly', false);
//     $("#placa").prop('readonly', false);
//     $("#nombre_conyuge").prop('readonly', false);
//     $("#tipo_documento_conyuge").prop('readonly', false);
//     $("#documento_conyuge").prop('readonly', false);
//     $("#actividad_economica").prop('readonly', false);
//     $("#ciudad_residencia").prop('readonly', false);
//     $("#email_conyuge").prop('readonly', false);
//     $("#telefono_fijo_conyuge").prop('readonly', false);
//     $("#fecha_terminacion").prop('readonly', false);
//     $("#tipo_contracto").prop('readonly', false);
//     $("#actividad_economica_cliente").prop('readonly', false);
//     $("#nombre_referencia1").prop('readonly', false);
//     $("#direccion_referencia1").prop('readonly', false);
//     $("#ciudad_referencia1").prop('readonly', false);
//     $("#telefono_domicilio1").prop('readonly', false);
//     $("#celular1").prop('readonly', false);
//     $("#parentesco1").prop('readonly', false);
//     $("#nombre_referencia2").prop('readonly', false);
//     $("#direccion_referencia2").prop('readonly', false);
//     $("#ciudad_referencia2").prop('readonly', false);
//     $("#telefono_domicilio2").prop('readonly', false);
//     $("#celular2").prop('readonly', false);
//     $("#parentesco2").prop('readonly', false);
// });
// $(document).on('click', '#editarCliente', function (e) {
//     $("#editarCliente").prop('disabled', true);
//     $("#nombreCliente").prop('readonly', true);
//     $("#tipo_documento").prop('readonly', true);
//     $("#documento").prop('readonly', true);
//     $("#fecha_expedicion").prop('readonly', true);
//     $("#lugar_expedicion").prop('readonly', true);
//     $("#nacionalidad").prop('readonly', true);
//     $("#fecha_nacimiento").prop('readonly', true);
//     $("#lugar_nacimiento").prop('readonly', true);
//     $("#genero").prop('readonly', true);
//     $("#nivel_educativo").prop('readonly', true);
//     $("#profesion").prop('readonly', true);
//     $("#cargo").prop('readonly', true);
//     $("#total_ingresos").prop('readonly', true);
//     $("#activo_vehiculo").prop('readonly', true);
//     $("#activo_otros").prop('readonly', true);
//     $("#total_pasivo").prop('readonly', true);
//     $("#otros_ingresos").prop('readonly', true);
//     $("#total_egresos").prop('readonly', true);
//     $("#estado_civil").prop('readonly', true);
//     $("#email").prop('readonly', true);
//     $("#telefono_fijo").prop('readonly', true);
//     $("#telefono_personal").prop('readonly', true);
//     $("#direccion_residencia").prop('readonly', true);
//     $("#ciudad").prop('readonly', true);
//     $("#estrato").prop('readonly', true);
//     $("#posee_vehiculo").prop('readonly', true);
//     $("#pignorado").prop('readonly', true);
//     $("#placa").prop('readonly', true);
//     $("#nombre_conyuge").prop('readonly', true);
//     $("#tipo_documento_conyuge").prop('readonly', true);
//     $("#documento_conyuge").prop('readonly', true);
//     $("#actividad_economica").prop('readonly', true);
//     $("#ciudad_residencia").prop('readonly', true);
//     $("#email_conyuge").prop('readonly', true);
//     $("#telefono_fijo_conyuge").prop('readonly', true);
//     $("#actividad_economica_cliente").prop('readonly', true);
//     $("#fecha_terminacion").prop('readonly', true);
//     $("#tipo_contracto").prop('readonly', true);
//     $("#actividad_economica_cliente").prop('readonly', true);
//     $("#nombre_referencia1").prop('readonly', true);
//     $("#direccion_referencia1").prop('readonly', true);
//     $("#ciudad_referencia1").prop('readonly', true);
//     $("#telefono_domicilio1").prop('readonly', true);
//     $("#celular1").prop('readonly', true);
//     $("#parentesco1").prop('readonly', true);
//     $("#nombre_referencia2").prop('readonly', true);
//     $("#direccion_referencia2").prop('readonly', true);
//     $("#ciudad_referencia2").prop('readonly', true);
//     $("#telefono_domicilio2").prop('readonly', true);
//     $("#celular2").prop('readonly', true);
//     $("#parentesco2").prop('readonly', true);
    
// });
