/***********************************************/
/* Funciones en susuario.                      */
/***********************************************/
/* Buscar usuario. en el dashboard*/
$(document).on('click','#buscarEmpleado',function(e){
    $("#tablaDinamica").html("");
   sendEventApp('POST',routesAppPlatform()+'empleado/consultaFiltro.php',
   params = {
       "busqueda" : document.getElementsByName("busqueda")[0].value,
       "consulta" : document.getElementsByName("consulta")[0].value,
       "estado" : document.getElementsByName("estado")[0].value
     },'#tablaDinamica');  
console.log('bien');
     return false;
 });

 $(document).on('click','#verFicha',function(e){
    $("#tablaDinamica").html("");
  console.log('bien');
   sendEventApp('POST',routesAppPlatform()+'empleado/verFicha.php',
   params = {
       "id" : this.value
     },'#tablaDinamica'); 
     return false;
 });

 $(document).on('click','#validarSesion',function(e){

    if(document.getElementsByName("clave")[0].value == document.getElementsByName("mailc")[0].value ){
        sendEventApp('POST',routesAppPlatform()+'empleado/validarAutentificacion.php',
        params = {
            "email" : document.getElementsByName("usuario")[0].value,
            "clave" : document.getElementsByName("clave")[0].value
        },'#smgValidacion');  
        return false;

    }else{
        document.getElementById("smgValidacion").innerHTML = "Las claves no coinciden";
    }
   
  
 });
 function registrarEmpleado(){
  
    
    $("#tablaDinamica").html("");
   sendEventApp('POST',routesAppPlatform()+'empleado/registrarEmpleado.php',
   params = {
       "tipo" : document.getElementsByName("tipo")[0].value,
       "rol_empleado" : document.getElementsByName("rol_empleado")[0].value,
       "descripcion" : document.getElementsByName("descripcion")[0].value,
       "nombre_empleado" : document.getElementsByName("nombre_empleado")[0].value,
       "documento_empleado" : document.getElementsByName("documento_empleado")[0].value,
       "direccion" : document.getElementsByName("direccion")[0].value,
       "celular" : document.getElementsByName("celular")[0].value,
       "genero" : document.getElementsByName("genero")[0].value,
       "fecha" : document.getElementsByName("fecha")[0].value,
       "mail" : document.getElementsByName("mail")[0].value,
       "usuario" : document.getElementsByName("usuario")[0].value,
       "clave" : document.getElementsByName("clave")[0].value,
    },'#resultado');  
     return false;
    
}