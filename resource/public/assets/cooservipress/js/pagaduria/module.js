$(document).on('click','#registrarPagaduria',function(e){

    $("#tablaDinamica").html("");

   sendEventApp('POST',routesAppPlatform()+'pagaduria/registrarPagaduria.php',

   params = {

       "codigo" : document.getElementsByName("codigo")[0].value,

       "nombre" : document.getElementsByName("nombre")[0].value,

       "textArea" : document.getElementsByName("textArea")[0].value

     },'#smg');  

    

     return false;

 });



