
function sendEventApp(sendType,route,params,ContentResponse){
    
  run = true;
   if(run == true){
    run = false;
        $.ajax({
          
            data:  params,
            url:   route,
            type:  sendType,
            dataType: 'html',
            beforeSend: function(){
                $(ContentResponse).html("Cargando espere por favor");
              },
            success:  function(response){
                $(ContentResponse).html(response);
              },
            error: function(){console.log('error ');},
            complete: function(){}
        
          }).fail( function( jqXHR, textStatus, errorThrown ) {
  
              if (jqXHR.status === 0) {
                  $(ContentResponse).html('Sin conexion: Verifica tu conexion.');
              } else if (jqXHR.status == 404) { 
                $(ContentResponse).html('Página solicitada no encontrada[404].');
              } else if (jqXHR.status == 500) {
                  $(ContentResponse).html  ('Error interno del servidor [500].');
              } else if (textStatus === 'parsererror') {
                  $(ContentResponse).html('Solicitud de archivo json fallida o error de parser');
              } else if (textStatus === 'timeout') {
                  $(ContentResponse).html('Error de tiempo de espera.');
              } else if (textStatus === 'abort') {$(ContentResponse).html('Petición abortada..');
              } else {$(ContentResponse).html('Error no detectado : ' + jqXHR.responseText);
              }
            });
          }
           
  }
  function sendEventFormDataApp(sendType,route,formData,ContentResponse){
    var run =true;
    if(run==true){
        run = false;
        $.ajax({
            data:   formData,
            url:    route,
            type:   sendType,
            contentType: false,
            processData: false,
            beforeSend: function(){ 
                $(ContentResponse).html('Cargando Espere por favor');},
            success:  function(response){
                
                $(ContentResponse).html(response);},
            error: function(){console.log('error ');},
            complete: function(){}
        
          }).fail( function( jqXHR, textStatus, errorThrown ) {
              if (jqXHR.status === 0) {
                  $(ContentResponse).html('Sin conexion: Verifica tu conexion.');
              } else if (jqXHR.status == 404) { 
                $(ContentResponse).html('Página solicitada no encontrada[404].');
              } else if (jqXHR.status == 500) {
                  $(ContentResponse).html  ('Error interno del servidor [500].');
              } else if (textStatus === 'parsererror') {
                  $(ContentResponse).html('Solicitud de archivo json fallida o error de parser');
              } else if (textStatus === 'timeout') {
                  $(ContentResponse).html('Error de tiempo de espera.');
              } else if (textStatus === 'abort') {$(ContentResponse).html('Petición abortada..');
              } else {$(ContentResponse).html('Error no detectado : ' + jqXHR.responseText);
              }
            });
    }
  }
  function editar_fecha(fecha, intervalo, dma, separador) {
      
    var separador = separador || "-";
    var arrayFecha = fecha.split(separador);
    var dia = arrayFecha[0];
    var mes = arrayFecha[1];
    var anio = arrayFecha[2];  
   
    var fechaInicial = new Date(anio, mes - 1, dia);
    var fechaFinal = fechaInicial;
    if(dma=="m" || dma=="M"){
      fechaFinal.setMonth(fechaInicial.getMonth()+parseInt(intervalo));
    }else if(dma=="y" || dma=="Y"){
      fechaFinal.setFullYear(fechaInicial.getFullYear()+parseInt(intervalo));
    }else if(dma=="d" || dma=="D"){
      fechaFinal.setDate(fechaInicial.getDate()+parseInt(intervalo));
    }else{
        return fecha;
    }
    dia = fechaFinal.getDate();
    mes = fechaFinal.getMonth() + 1;
    anio = fechaFinal.getFullYear();
  
    dia = (dia.toString().length == 1) ? "0" + dia.toString() : dia;
    mes = (mes.toString().length == 1) ? "0" + mes.toString() : mes;
  
    return anio + "/" + mes + "/" + dia;
  }
   function replaceAll( text){
     //text=text.replace(/\./g,"");
     //text=text.replace(/\$/g,"");
     text=text.replace(/[^a-zA-Z0-9]/g, ''); 
     return text;
   }
  
