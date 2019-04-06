$(document).on('click','#registrar_categoria',function(e){
  $("#tablaDinamica").html("");

  const name = document.getElementsByName('nombreCat')[0].value;
  
  sendEventApp('POST',routesAppPlatform()+'categorias/registrarCategoria.php',
  params = {
    "name" : name   
    },'#resultado');
    document.getElementsByName('nombreCat')[0].value = ""
    return false;
});

$(document).on('click','#buscarCategoria',function(e){
  $("#tablaDinamica").html("");
  sendEventApp('POST',routesAppPlatform()+'categorias/consultaCategoria.php',
  params = {
    "busqueda" : document.getElementsByName("busqueda")[0].value,
    "organizacion" : 'az',
    },'#tablaDinamica');  
    return false;
});