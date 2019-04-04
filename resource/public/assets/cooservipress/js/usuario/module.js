/***********************************************/
/* Funciones en susuario.                      */
/***********************************************/

function registrarUsuario() {
     
    $("#tablaDinamica").html("");
      console.log('registrar');
      sendEventFormDataApp('POST',routesAppPlatform()+'usuario/registrarUsuario.php',params = {
        "nombreFormUsuario" : document.getElementsByName("nombreFormUsuario")[0].value,
        "documentoFormUsuario" : document.getElementsByName("documentoFormUsuario")[0].value,
        "direccionFormUsuario" : document.getElementsByName("direccionFormUsuario")[0].value,
        "telefonoFormUsuario" : document.getElementsByName("telefonoFormUsuario")[0].value,
        "emailFormUsuario" : document.getElementsByName("emailFormUsuario")[0].value,
        "usuarioFormUsuario" : document.getElementsByName("usuarioFormUsuario")[0].value,
        "claveFormUsuario" : document.getElementsByName("claveFormUsuario")[0].value,
        "claveFormUsuario" : document.getElementsByName("claveFormUsuario")[0].value,
        "claveFormUsuario" : document.getElementsByName("claveFormUsuario")[0].value,
      },'#resultado');  
      return false;
 }
/* Buscar usuario. en el dashboard*/
$(document).on('click','#buscarUsuario',function(e){
    $("#tablaDinamica").html("");
   sendEventApp('POST',routesAppPlatform()+'usuario/consultaFiltro.php',
   params = {
       "busqueda" : document.getElementsByName("busqueda")[0].value,
       "consulta" : document.getElementsByName("consulta")[0].value,
       "estado" : document.getElementsByName("estado")[0].value
     },'#tablaDinamica');  
     return false;
 });
/* Buscar usuario. en el dashboard*/
 $(document).on('click','#verModal',function(e){
     //console.log('es');
    $("#showModal").html(" <a class='btn btn-primary'>Save changes</a>");
   
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

