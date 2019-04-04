/***********************************************/
/* Funciones en susuario.                      */
/***********************************************/
/* */
$(document).on('click','#selectMunicipios',function(e){
    $("#tablaDinamica").html("");
   sendEventApp('POST',routesAppPlatform()+'localidad/selectMunicipio.php',
   params = {
       "id" : document.getElementsByName("selectMunicipios")[0].value
     },'#selectDinamico');  
     return false;
 });
 /*  */
 $(document).on('click','#crearObservacion',function(e){});
 
 /* */
 $(document).on('click','#verFicha',function(e){
    $("#tablaDinamica").html("");
  console.log('bien '+this.value);
   sendEventApp('POST',routesAppPlatform()+'credito/verFicha.php',
   params = {
       "id" : this.value
     },'#tablaDinamica'); 
     return false;
 });
 $(document).on('click','#verFichaCredito',function(e){
    $("#tablaDinamica").html("");
  console.log('bien '+this.value);
   sendEventApp('POST',routesAppPlatform()+'credito/verFichaIncorporacion.php',
   params = {
       "id" : this.value
     },'#tablaDinamica'); 
     return false;
 });
 
 $(document).on('click','#registrarObservacion',function(e){
    $("#tablaDinamica").html("");
   sendEventApp('POST',routesAppPlatform()+'credito/registrarObservacion.php',
   params = {
       "descripcion" : document.getElementsByName("textArea")[0].value,
       "credito" : document.getElementsByName("credito")[0].value,
       "sesion" : document.getElementsByName("sesion")[0].value
     },'#smg');  
     refrescarTabla(e,document.getElementsByName("credito")[0].value);
     return false;
 });
 
  /*  */
  $(document).on('click','#aplicarEstado',function(e){
    
    
    var n = document.getElementsByName("transicion")[0].value;
    if(n == 3){
        var f = new Date();
        //alert("ab"+f.getFullYear() + '/' + parseInt(f.getMonth()+1)  + '/' + f.getDate());
        document.getElementsByName("fechaActual")[0].value = f.getFullYear()+'/'+(parseInt(f.getMonth()+1))+'/'+f.getDate();
        $("#modalVentana2").modal("show");
    }else {
        sendEventApp('POST',routesAppPlatform()+'credito/registrarAprobado.php',
        params = {
            "idsesion" : document.getElementsByName("sesion")[0].value,
            "idcredito" : document.getElementsByName("credito")[0].value
          },'#smg');  
    } 
   
    //return false;
});
$(document).on('click','#aplicarDesembolso',function(e){
    
        console.log(document.getElementsByName("sesion")[0].value+" "+document.getElementsByName("credito")[0].value+" "+document.getElementsByName("fechaActual")[0].value+" "+document.getElementsByName("meses1")[0].value+" "+document.getElementsByName("meses")[0].value);
        sendEventApp('POST',routesAppPlatform()+'credito/registrarDesembolso.php',
        params = {
            "idsesion" : document.getElementsByName("sesion")[0].value,
            "idcredito" : document.getElementsByName("credito")[0].value,
            "fechaActual" : document.getElementsByName("fechaActual")[0].value,
            "meses1" : document.getElementsByName("meses1")[0].value,
            "meses" : document.getElementsByName("meses")[0].value
          },'#smg');  
    
          
    return false;
});
   
    
    
 
/*  */
 function refrescarTabla(e,idcredito) {
     console.log('refresh');
  sendEventApp('POST',routesAppPlatform()+'credito/refreshTablaCredito.php',
  params = {
      'idcredito' : idcredito
  },'#tablaDinamica');  
  $('#modalVentana').modal('toggle'); 
    return false;
 }
 /*  */
 function registrarCredito() {
     
    $("#tablaDinamica").html("");
      console.log('registrar');
      var formData = new FormData();
      formData.append("idcliente" ,document.getElementsByName("idcliente")[0].value);
      formData.append("codigo_doc_credito" , document.getElementsByName("codigo_doc_credito")[0].value);
      formData.append("tipoCredito", document.getElementsByName("tipoCredito")[0].value);
      formData.append("monto" , replaceAll(document.getElementsByName("montoFinal")[0].value));
      formData.append("idtarifa" , document.getElementsByName("idtarifa")[0].value);
      formData.append("plazo" , document.getElementsByName("plazo")[0].value);
      formData.append("cuota" , replaceAll(document.getElementsByName("cuotaFinal")[0].value));
      formData.append("aval_credito" , document.getElementsByName("aval_credito")[0].value);
      formData.append("seguro_credito" , replaceAll(document.getElementsByName("seguro_credito")[0].value));
      formData.append("administracion_credito" , replaceAll(document.getElementsByName("administracion_credito")[0].value));
      formData.append("sucursalForm" , document.getElementsByName("sucursalForm")[0].value);
      formData.append( "entidadForm" , document.getElementsByName("entidadForm")[0].value);
      formData.append( "idsesion" ,document.getElementsByName("idsesion")[0].value);
      formData.append("modalidad" , document.getElementsByName("modalidad")[0].value);
      formData.append("tipo_cuenta" , document.getElementsByName("tipo_cuenta")[0].value);
      formData.append("entidad" , document.getElementsByName("entidad")[0].value);
      formData.append( "n_cuenta" , document.getElementsByName("n_cuenta")[0].value);
      formData.append("documento1" , $('#documento1')[0].files[0]);
      formData.append("documento2" , $('#documento2')[0].files[0]);
      formData.append("documento3" , $('#documento3')[0].files[0]);
      formData.append("documento4" , $('#documento4')[0].files[0]);
      formData.append("documento5" , $('#documento5')[0].files[0]);
      formData.append("tasa_ofrecidad" ,document.getElementsByName("tasa_ofrecidadFinal")[0].value);
      formData.append("entidad1" ,document.getElementsByName("entidad1")[0].value);
      formData.append("nit1" ,document.getElementsByName("nit1")[0].value);
      formData.append("tipo_cuenta1" ,document.getElementsByName("tipo_cuenta1")[0].value);
      formData.append("cuenta1" ,document.getElementsByName("cuenta1")[0].value);
      formData.append("monto1" ,replaceAll(document.getElementsByName("monto1")[0].value));
      formData.append("cuota1" ,replaceAll(document.getElementsByName("cuota1")[0].value));
      formData.append("entidad2" ,document.getElementsByName("entidad2")[0].value);
      formData.append("nit2" ,document.getElementsByName("nit2")[0].value);
      formData.append("tipo_cuenta2" ,document.getElementsByName("tipo_cuenta2")[0].value);
      formData.append("cuenta2" ,document.getElementsByName("cuenta2")[0].value);
      formData.append("monto2" ,replaceAll(document.getElementsByName("monto2")[0].value));
      formData.append("cuota2" ,replaceAll(document.getElementsByName("cuota2")[0].value));
      formData.append("entidad3" ,document.getElementsByName("entidad3")[0].value);
      formData.append("nit3" ,document.getElementsByName("nit3")[0].value);
      formData.append("tipo_cuenta3" ,document.getElementsByName("tipo_cuenta3")[0].value);
      formData.append("cuenta3" ,document.getElementsByName("cuenta3")[0].value);
      formData.append("monto3" ,replaceAll(document.getElementsByName("monto3")[0].value));
      formData.append("cuota3" ,replaceAll(document.getElementsByName("cuota3")[0].value));
      
      sendEventFormDataApp('POST',routesAppPlatform()+'credito/registrarCredito.php',formData,'#resultado');  
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
 $(document).on('click','#buscarCredito',function(e){
    $("#tablaDinamica").html("");
   sendEventApp('POST',routesAppPlatform()+'credito/consultaCredito.php',
   params = {
       "busqueda" : document.getElementsByName("busqueda")[0].value,
       "consulta" : document.getElementsByName("consulta")[0].value,
       "estado" : document.getElementsByName("estado")[0].value
     },'#tablaDinamica');  
     return false;
 });
 /* */
$(document).on('click','#consultaCartera',function(e){
    $("#tablaDinamica").html("");
   sendEventApp('POST',routesAppPlatform()+'credito/consultaCartera.php',
   params = {
       "entidad" : document.getElementsByName("entidadForm")[0].value,
       "estado" : document.getElementsByName("estado")[0].value
     },'#tablaDinamica');  
     //alert(document.getElementsByName("entidadForm")[0].value+" "+document.getElementsByName("estado")[0].value);
     return false;
 });
 /*  */
$(document).on('click','#efectuarPago',function(e){
    
    var pago =  document.getElementsByName("pago")[0].value;
    console.log(pago);
    var productos = new Array();
    for(var f=1;f<=parseInt(pago);f++)
    {
        var ob=document.getElementById(f);
        if ($(ob).is(':checked') ) {
        console.log("id : "+f+" ----");
        productos.push(f);
        }
    
    
    }
    var misproductos = productos.join();
    
    sendEventApp('POST',routesAppPlatform()+'credito/efectuarPago.php',
    params = {
       "id" : document.getElementsByName("idcredito")[0].value,
       "listaProductos" : misproductos 
     },'#smg'); 
     return false;
 });
 $(document).on('click','#seleccionarTarifa',function(e){
    //$("#tablaDinamica").html("");
    var href = $(this).attr('value');
  
   sendEventApp('POST',routesAppPlatform()+'tarifa/seleccionarTarifa.php',
   params = {
       "id" : href
     },'#smg'); 
     return false;
 });
 
