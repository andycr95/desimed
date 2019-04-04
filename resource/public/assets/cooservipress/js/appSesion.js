/***********************************************/
/* Funciones en sesion.                        */
/***********************************************/
$(document).on('click','#validarSesion',function(e){
    
     $("#smg_login").html("");
     
    
    sendEventApp('POST',routesAppPlatform()+'sesion/validarSesionRoute.php',
    params = {
        "email" : document.getElementsByName("email")[0].value,
        "clave" : document.getElementsByName("clave")[0].value

      },'#smg_login');  
      return false;
   
  });
$(document).on('click','#recuperarClave',function(e){
    $("#smg_login").html("");
    sendEventApp('POST',
    routesAppPlatform()+'sesion/recuperarClaveRoute.php',
    params = {
        "email" : document.getElementsByName("email")[0].value

      },'#smg_login');     
  });
  
  $(document).on('click','#cerrarSesion',function(e){
    $("#smg_login").html("");
    sendEventApp('POST',
    routesAppPlatform()+'sesion/cerrarSesion.php',
    params = {},'#smg_login');     
  });  
  //import {routesAppPlatform } from 'directory.js';  