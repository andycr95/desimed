/***********************************************/
/*                                             */
/*       sesion                                */
/*                                             */
/*                                             */
/***********************************************/
$(document).on('click','#validarSesion',function(e){
  e.stopPropagation();
  e.preventDefault();
  console.log("validar sesion  ");

  $("#smg_login").html("");
  var mail = document.getElementsByName("email")[0];
  var clave = document.getElementsByName("clave")[0];

  var params = {
          "email" : mail.value,
          "clave" : clave.value
        };  
       $.ajax({
        data:   params,
        url:   "../../../routes/platform/sesion/validarSesionRoute.php",
        type:  'post',
        success:  function (response) {$("#smg_login").html(response);}});
    
});



/***********************************************/
/*                                             */
/*       Navegacion                            */
/*                                             */
/*                                             */
/***********************************************/


$(document).on('click','#vRouteView',function(e){
  e.stopPropagation();
  e.preventDefault();
  var params=0;
  var URL;

  $("#page-content").html("");

  var id=$(this).attr('title');

  switch (id) {

    case 'vPerfil':
      console.log("vista perfil");
      URL = "../../../public/platform/component/perfil.php";
    break;

    case 'vConfiguracion':
      console.log("vista Configuracion");
      URL = "../../../public/platform/component/configuracion.php";
      
    break;

    case 'vAyuda':
      console.log("vista ayuda");
      URL = "../../../public/platform/component/ayuda.php";
    break;

    case 'aCerrarSesion':
      console.log("accion cerrar sesion");
      URL = "../../../../routes/platform/sesion/cerrarSesion.php";
    break;

    case 'vInicio':
      console.log("vista inicio plataforma");
      URL = "../../../public/platform/module/master.php";
    break;

  }

  $.ajax({
          data:   params, 
          url:   URL,
          type:  'post',
          beforeSend: function (response) {$("#content-container").html("<div class='load6'><div class='loader'></div></div>");},
          success:  function (response) {$("#content-container").html(response);}});
       
});


$(document).on('click','#vRouteAction',function(e){
  e.stopPropagation();
  e.preventDefault();
  var params=0;
  var URL;

  

  var id=$(this).attr('title');

  

  switch (id) {

    case 'aAgregarNuevoUsuario':
      console.log("accion agregar nuevo usuario");
      URL = "../../../public/platform/module/usuarios/agregar.php";
    break;

    case 'aVerUsuario':
      console.log("accion ver usuario");
      URL = "../../../public/platform/usuarios/ver.php";
    break;

    case 'aModificarUsuario':
      console.log("accion modificar usuario");
      URL = "../../../public/platform/usuarios/modificar.php";
    break;

    case 'aEliminarUsuario':
      console.log("accion eliminarr usuario");
      URL = "../../../public/platform/usuarios/eliminar.php";
    break;

    case 'aDesactivarUsuario':
      console.log("accion desactivar usuario");
      URL = "../../../public/platform/module/usuarios/eliminar.php";
    break

    case 'aAgregarNuevoCliente':
      console.log("accion agregar nuevo cliente");
      URL = "../../../public/platform/module/clientes/agregar.php";
    break;

    default:
      break;
  }

  

  $.ajax({
          data:   params, 
          url:   URL,
          type:  'post',
          beforeSend: function (response) {$("#content-container").html("<div class='load6'><div class='loader'></div></div>");},
          success:  function (response) {$("#content-container").html(response);}});
       
});




$(document).on('click','#vRouteActionInput',function(e){
  e.stopPropagation();
  e.preventDefault();
  var params=0;
  var URL;
  var a="";
  var b="";
  var c="";

  $("#page-content").html("");


  var name=$(this).attr('tags');
  console.log("---"+name);

  switch (name) {

    

    case 'aBuscarUsuario':
      console.log("accion buscar usuario ");
      var params = {"id" : id.value };  
      URL = "../../../public/platform/usuarios/buscar.php";
    break;

    case 'aFiltrarUsuario':
      console.log("accion filtrar usuario");
      var params = {"id" : id.value};  
      URL = "../../../public/platform/usuarios/filtrar.php";
    break;

    
  
    default:
      break;
  }

  $.ajax({
          data:   params, 
          url:   URL,
          type:  'post',
          beforeSend: function (response) {$("#page-content").html("<div class='load6'><div class='loader'></div></div>");},
          success:  function (response) {$("#page-content").html(response);}});
       
});

