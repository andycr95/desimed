$(document).on('click','#registrarSucursal',function(e){
    $("#tablaDinamica").html("");
   sendEventApp('POST',routesAppPlatform()+'sucursal/registrarSucursal.php',
   params = {
       "etiqueta" : document.getElementsByName("etiqueta")[0].value,
       "idciudad" : document.getElementsByName("idciudad")[0].value,
       "contacto" : document.getElementsByName("contacto")[0].value,
       "telefono" : document.getElementsByName("telefono")[0].value,
       "direccion" : document.getElementsByName("direccion")[0].value,
       "email" : document.getElementsByName("email")[0].value
     },'#smg');  
    
     return false;
 });
 