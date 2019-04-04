//importante ROOT_PATH debe contener siempre al final el nombre del directorio principal donde

//esta almacenado el proyecto



 //configuracion en ambiente local:

 var app ="credito";

 //var dominio = "http://drogasdsimed.com/";

 var dominio = "http://localhost/desimed/";

 //var dominio_server = "http://drogasdsimed.com/";
 var dominio_server = "http://localhost/desimed/";


 //rutas adjuntas :

var routeAppMobile = '/routes/mobile/';

var routeAppPlatform = dominio+'/routes/platform/';

var routeAppWebsite = '/routes/website/';





 //export

 function routesAppPlatform() {

    return routeAppPlatform;

}





 function routesAppMobile() {

    return routeAppMobile;

}



function routesAppWebsite() {

    return routeAppWebsite;

}





