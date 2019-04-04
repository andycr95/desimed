$(document).on('click','#buscarMedicamento',function(e){
   $("#tablaDinamica").html("");
   sendEventApp('POST',routesAppPlatform()+'medicamentos/consultarMedicamento.php',
   params = {
     "busqueda" : document.getElementsByName("busqueda")[0].value,
	   "organizacion" : document.getElementsByName("organizacion")[0].value,
	   "venta" : document.getElementsByName("venta")[0].value,
     "stock" : document.getElementsByName("stock")[0].value
     },'#tablaDinamica');  
     return false;
 });

 $(document).on('click','#buscarMedicamento2',function(e){
  $("#tablaDinamica").html("");
  sendEventApp('POST',routesAppPlatform()+'medicamentos/consultarMedicamento2.php',
  params = {
    "busqueda" : document.getElementsByName("busqueda")[0].value,
    "organizacion" : document.getElementsByName("organizacion")[0].value,
    "venta" : document.getElementsByName("venta")[0].value,
    "stock" : document.getElementsByName("stock")[0].value
    },'#tablaDinamica');  
    return false;
});

$(document).on('click','#buscarMedicamento3',function(e){
  $("#tablaDinamica").html("");
  sendEventApp('POST',routesAppPlatform()+'medicamentos/consultarMedicamento2.php',
  params = {
    "busqueda" : document.getElementsByName("busqueda")[0].value,
    "organizacion" : 'az',
    "venta" : 'tv',
    "stock" : 'tp'
    },'#tablaDinamica');  
    return false;
});

$(document).on('click','#agregarElemento',function(e){
  // $("#tablaDinamica").html("");
  //var href = $(this).attr('value');
  //console.log("xx"+$(this).attr('title'));
  //var str =href.replace("#","");
  


  sendEventApp('POST',routesAppPlatform()+'medicamentos/agregarElemento.php',
  params = {
    "cantidad" : document.getElementsByName("cantidad")[0].value,
    "fecha" : document.getElementsByName("fecha_utilidad")[0].value,
    "lote" : document.getElementsByName("lote")[0].value,
    "idproducto" : $(this).attr('title'),
    "idfactura" : document.getElementsByName("idfactura")[0].value,
    "venta" : document.getElementsByName("venta")[0].value

    },'#smgMedicamento');  
    return false;
});

$(document).on('click','#quitarElemento',function(e){
  $("#tablaDinamica").html("");


  sendEventApp('POST',routesAppPlatform()+'medicamentos/quitarElemento.php',
  params = {
    "idproducto" : $(this).attr('title'),
    "idfactura" : document.getElementsByName("idfactura")[0].value,

    },'#smgMedicamento');  
    return false;
});

$(document).on('click','#crearFactura',function(e){
  $("#tablaDinamica").html("");
  sendEventApp('POST',routesAppPlatform()+'medicamentos/crearFactura.php',
  params = {
    "fecha_utilidad" : document.getElementsByName("fecha_utilidad")[0].value,
    "tipo_factura" : document.getElementsByName("tipo_factura")[0].value,
    "proveedor" : document.getElementsByName("proveedor")[0].value,
    "idusuario" : document.getElementsByName("idusuario")[0].value
    },'#resultado');  
    return false;
});


 $(document).on('click','#registrar_medicamento',function(e){
  $("#tablaDinamica").html("");


  sendEventApp('POST',routesAppPlatform()+'medicamentos/registrarMedicamento.php',
  params = {
    "etiqueta_comercial" : document.getElementsByName("etiqueta_comercial")[0].value,
    "tipo_presentacion" : document.getElementsByName("tipo_presentacion")[0].value,
    "categorizacion" : document.getElementsByName("categorizacion")[0].value,
    "laboratorio" : document.getElementsByName("laboratorio")[0].value,
    "descripcion" : document.getElementsByName("descripcion")[0].value,
    "tipo_venta" : document.getElementsByName("tipo_venta")[0].value,
    "valor" : document.getElementsByName("valor")[0].value,
    "stock_minimo" : document.getElementsByName("stock_minimo")[0].value,
    "stock_Actual" : document.getElementsByName("stock_Actual")[0].value,
    "descuento" : document.getElementsByName("descuento")[0].value,
    "iva" : document.getElementsByName("iva")[0].value,
    "proveedor" : document.getElementsByName("proveedor")[0].value,
    "codigo_barras" : document.getElementsByName("codigo_barras")[0].value,
    "naturaleza" : document.getElementsByName("naturaleza")[0].value,
    "ganancia" : document.getElementsByName("ganancia")[0].value
    
    },'#smgMedicamento');  
    return false;
});