/***********************************************/
/* Funciones en susuario.                      */
/***********************************************/
/* Buscar usuario. en el dashboard*/
$(document).on('click','#buscarCliente',function(e){
    $("#tablaDinamica").html("");
   sendEventApp('POST',routesAppPlatform()+'cliente/consultaFiltro.php',
   params = {
       "busqueda" : document.getElementsByName("busqueda")[0].value,
       "consulta" : document.getElementsByName("consulta")[0].value,
       "estado" : document.getElementsByName("estado")[0].value
     },'#tablaDinamica');  
console.log('bien');
     return false;
 });
 /* ver ficha de cliente*/
$(document).on('click','#verFicha',function(e){
    $("#tablaDinamica").html("");
  console.log('bien');
   sendEventApp('POST',routesAppPlatform()+'cliente/verFicha.php',
   params = {
       "id" : this.value
     },'#tablaDinamica'); 
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
function registrarCliente(){
    $("#tablaDinamica").html("");
    const nombre_apellido = document.getElementsByName("nombre_apellido")[0].value;
    const documento = document.getElementsByName("documento")[0].value;
    const fecha_nacimiento = document.getElementsByName("fecha_nacimiento")[0].value;
    const sexo = document.getElementsByName("sexo")[0].value;
    const direccion  = document.getElementsByName("direccion")[0].value;
    const telefono = document.getElementsByName("telefono")[0].value;
    const celular = document.getElementsByName("celular")[0].value;
    const email = document.getElementsByName("email")[0].value;
   sendEventApp('POST',routesAppPlatform()+'cliente/registrarCliente.php',
   params = {
    "nombre_apellido" : nombre_apellido,
    "documento" : documento,
    "fecha_nacimiento" : fecha_nacimiento,
    "sexo" : sexo,
    "direccion" : direccion,
    "telefono" : telefono,
    "celular" : celular,
    "email" : email,
 },'#resultado');
     return false;
    
}

function registrarAfiliado(){
  debugger
  $("#tablaDinamica").html("");
  const idempleado = document.getElementsByName("idempleado")[0].value;
  const nombre_apellido = document.getElementsByName("nombre_apellido")[0].value;
  const extracto = document.getElementsByName("extracto")[0].value;
  const documento = document.getElementsByName("documento")[0].value;
  const fecha_nacimiento = document.getElementsByName("fecha_nacimiento")[0].value;
  const sexo = document.getElementsByName("sexo")[0].value;
  const discapacidad = document.getElementsByName("discapacidad")[0].value;
  const direccion  = document.getElementsByName("direccion")[0].value;
  const telefono = document.getElementsByName("telefono")[0].value;
  const celular = document.getElementsByName("celular")[0].value;
  const email = document.getElementsByName("email")[0].value;
  const nombre_beneficiario = document.getElementsByName("nombre_beneficiario")[0].value;
  const sexo_beneficiario = document.getElementsByName("sexo_beneficiario")[0].value;
  const documento_beneficiario = document.getElementsByName("documento_beneficiario")[0].value;
  const parentesco_beneficiario = document.getElementsByName("parentesco_beneficiario")[0].value;
  const discapacidad_beneficiario = document.getElementsByName("discapacidad_beneficiario")[0].value;
  const discapacidad_desc_beneficiario = document.getElementsByName("discapacidad_desc_beneficiario")[0].value;
  const nombre_beneficiario2 = document.getElementsByName("nombre_beneficiario2")[0].value;
  const sexo_beneficiario2 = document.getElementsByName("sexo_beneficiario2")[0].value;
  const documento_beneficiario2 = document.getElementsByName("documento_beneficiario2")[0].value;
  const parentesco_beneficiario2 = document.getElementsByName("parentesco_beneficiario2")[0].value;
  const discapacidad_beneficiario2 = document.getElementsByName("discapacidad_beneficiario2")[0].value;
  const discapacidad_desc_beneficiario2 = document.getElementsByName("discapacidad_desc_beneficiario2")[0].value;
  const nombre_beneficiario3 = document.getElementsByName("nombre_beneficiario3")[0].value;
  const sexo_beneficiario3 = document.getElementsByName("sexo_beneficiario3")[0].value;
  const documento_beneficiario3 = document.getElementsByName("documento_beneficiario3")[0].value;
  const parentesco_beneficiario3 = document.getElementsByName("parentesco_beneficiario3")[0].value;
  const discapacidad_beneficiario3 = document.getElementsByName("discapacidad_beneficiario3")[0].value;
  const discapacidad_desc_beneficiario3 = document.getElementsByName("discapacidad_desc_beneficiario3")[0].value;
  const nombre_beneficiario4 = document.getElementsByName("nombre_beneficiario4")[0].value;
  const sexo_beneficiario4 = document.getElementsByName("sexo_beneficiario4")[0].value;
  const documento_beneficiario4 = document.getElementsByName("documento_beneficiario4")[0].value;
  const parentesco_beneficiario4 = document.getElementsByName("parentesco_beneficiario4")[0].value;
  const discapacidad_beneficiario4 = document.getElementsByName("discapacidad_beneficiario4")[0].value;
  const discapacidad_desc_beneficiario4 = document.getElementsByName("discapacidad_desc_beneficiario4")[0].value;
  const nombre_afiliacion = document.getElementsByName("nombre_afiliacion")[0].value;
  const sexo_afiliacion = document.getElementsByName("sexo_afiliacion")[0].value;
  const documento_afiliacion = document.getElementsByName("documento_afiliacion")[0].value;
  const parentesco_afiliacion = document.getElementsByName("parentesco_afiliacion")[0].value;
  const discapacidad_afiliacion = document.getElementsByName("discapacidad_afiliacion")[0].value;
  const discapacidad_desc_afiliacion = document.getElementsByName("discapacidad_desc_afiliacion")[0].value;
  const nombre_afiliacion2 = document.getElementsByName("nombre_afiliacion2")[0].value;
  const sexo_afiliacion2 = document.getElementsByName("sexo_afiliacion2")[0].value;
  const documento_afiliacion2 = document.getElementsByName("documento_afiliacion2")[0].value;
  const parentesco_afiliacion2 = document.getElementsByName("parentesco_afiliacion2")[0].value;
  const discapacidad_afiliacion2 = document.getElementsByName("discapacidad_afiliacion2")[0].value;
  const discapacidad_desc_afiliacion2 = document.getElementsByName("discapacidad_desc_afiliacion2")[0].value;
  const diabetes = document.getElementsByName("diabetes")[0].value;
  const hipertension = document.getElementsByName("hipertension")[0].value;
  const enf_cardiacas = document.getElementsByName("enf_cardiacas")[0].value;
  const estres = document.getElementsByName("estres")[0].value;
  const osteoporosis = document.getElementsByName("osteoporosis")[0].value;
  const artitis = document.getElementsByName("artitis")[0].value;
  const cancer = document.getElementsByName("cancer")[0].value;
  const alergias = document.getElementsByName("alergias")[0].value;
  const migrana = document.getElementsByName("migrana")[0].value;
  const ets = document.getElementsByName("ets")[0].value;
  const anemia = document.getElementsByName("anemia")[0].value;
  const pulmonia = document.getElementsByName("pulmonia")[0].value;
  const otras_cual = document.getElementsByName("otras_cual")[0].value;
  const params = {
    "idempleado" : idempleado,
    "nombre_apellido" : nombre_apellido,
    "documento" : documento,
    "extracto" : extracto,
    "fecha_nacimiento" : fecha_nacimiento,
    "sexo" : sexo,
    "discapacidad" : discapacidad,
    "direccion" : direccion,
    "telefono" : telefono,
    "celular" : celular,
    "email" : email,
    "nombre_beneficiario" : nombre_beneficiario,
    "sexo_beneficiario" : sexo_beneficiario,
    "documento_beneficiario" : documento_beneficiario,
    "parentesco_beneficiario" : parentesco_beneficiario,
    "discapacidad_beneficiario" : discapacidad_beneficiario,
    "discapacidad_desc_beneficiario" : discapacidad_desc_beneficiario,
    "nombre_beneficiario2" : nombre_beneficiario2,
    "sexo_beneficiario2" : sexo_beneficiario2,
    "documento_beneficiario2" : documento_beneficiario2,
    "parentesco_beneficiario2" : parentesco_beneficiario2,
    "discapacidad_beneficiario2" : discapacidad_beneficiario2,
    "discapacidad_desc_beneficiario2" : discapacidad_desc_beneficiario2,
    "nombre_beneficiario3" : nombre_beneficiario3,
    "sexo_beneficiario3" : sexo_beneficiario3,
    "documento_beneficiario3" : documento_beneficiario3,
    "parentesco_beneficiario3" : parentesco_beneficiario3,
    "discapacidad_beneficiario3" : discapacidad_beneficiario3,
    "discapacidad_desc_beneficiario3" : discapacidad_desc_beneficiario3,
    "nombre_beneficiario4" : nombre_beneficiario4,
    "sexo_beneficiario4" : sexo_beneficiario4,
    "documento_beneficiario4" : documento_beneficiario4,
    "parentesco_beneficiario4" : parentesco_beneficiario4,
    "discapacidad_beneficiario4" : discapacidad_beneficiario4,
    "discapacidad_desc_beneficiario4" : discapacidad_desc_beneficiario4,
    "nombre_afiliacion" : nombre_afiliacion,
    "sexo_afiliacion" : sexo_afiliacion,
    "documento_afiliacion" : documento_afiliacion,
    "parentesco_afiliacion" : parentesco_afiliacion,
    "discapacidad_afiliacion" : discapacidad_afiliacion,
    "discapacidad_desc_afiliacion" : discapacidad_desc_afiliacion,
    "nombre_afiliacion2" : nombre_afiliacion2,
    "sexo_afiliacion2" : sexo_afiliacion2,
    "documento_afiliacion2" : documento_afiliacion2,
    "parentesco_afiliacion2" : parentesco_afiliacion2,
    "discapacidad_afiliacion2" : discapacidad_afiliacion2,
    "discapacidad_desc_afiliacion2" : discapacidad_desc_afiliacion2,
    "diabetes" : diabetes,	
	  "hipertension" : hipertension,	
	  "enf_cardiacas"	: enf_cardiacas,
    "estres" : estres,
    "osteoporosis" : osteoporosis,
	  "artitis"	: artitis,
	  "cancer"	: cancer,
  	"alergias" : alergias,
	  "migrana"	: migrana,
	  "ets" : ets,	
	  "anemia"	: anemia,
  	"pulmonia"	: pulmonia,
	  "otras_cual" : otras_cual
 };
 sendEventApp('POST',routesAppPlatform()+'cliente/registrarAfiliado.php',
 params,'#resultado');
     return false;
    
}

