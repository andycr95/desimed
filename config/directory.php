
<?php




 //configuracion en ambiente local:
 $app ="credito";
 //$dominio = "http://cooservipres.com";
 $dominio = "http://localhost/credito";
 $dominio_server = "http://portalx.net";

 /* Rutas para directorios generales  */

 /* const */
 //ruta del directorio principal:
 if (!defined('ROOT_PATH')) define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/'.$app.'/');
//define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT'].'/credito'.'/');

//con domino
if (!defined('DOMAIN_PATH')) define('DOMAIN_PATH',$dominio.'/');
//con dominio del servidor principal 
if (!defined('SERVER_PATH')) define('SERVER_PATH',$dominio_server.'/'.$app.'/');


//ruta del directorio app:
if (!defined('APP_PATH')) define('APP_PATH',ROOT_PATH.'app/');
if (!defined('MODEL_PATH')) define('MODEL_PATH',APP_PATH.'model/');
if (!defined('PROVIDER_PATH')) define('PROVIDER_PATH', APP_PATH.'provider/');
if (!defined('PERSISTENCE_PATH')) define('PERSISTENCE_PATH', APP_PATH.'persistence/');

//ruta del directorio configuracion:
if (!defined('CONFIGURATION_PATH'))define('CONFIGURATION_PATH', ROOT_PATH.'config/');

//ruta del directorio de base de datos:
if (!defined('DATABASE_PATH')) define('DATABASE_PATH',ROOT_PATH.'database/');

//ruta del directorio de recursos:
if (!defined('RESOURCE_PATH')) define('RESOURCE_PATH', ROOT_PATH.'resource/');
if (!defined('RESOURCE_SERVER')) define('RESOURCE_SERVER', DOMAIN_PATH.'resource/');
if (!defined('PUBLIC_PATH')) define('PUBLIC_PATH', RESOURCE_PATH.'public/');
if (!defined('PUBLIC_SERVER')) define('PUBLIC_SERVER', RESOURCE_SERVER.'public/');
if (!defined('PRIVATE_PATH')) define('PRIVATE_PATH', RESOURCE_PATH.'private/');
if (!defined('PLATFORM_PATH')) define('PLATFORM_PATH', PUBLIC_PATH.'platform/');
if (!defined('WEB_PATH')) define('WEB_PATH', PUBLIC_PATH.'web/');
if (!defined('ASSETS_PATH')) define('ASSETS_PATH', PUBLIC_PATH.'assets/');
if (!defined('ASSETS_SERVER')) define('ASSETS_SERVER', PUBLIC_SERVER.'assets/');

//rutas del directorio routes
if (!defined('ROUTES_PATH')) define('ROUTES_PATH', ROOT_PATH.'routes/');

//rutas del directorio testing
if (!defined('TESTING_PATH')) define('TESTING_PATH', ROOT_PATH.'testing/');

//rutas del directorio vendor
 if(!defined('MAINTENANCE_PATH')) define('MAINTENANCE_PATH',PLATFORM_PATH.'modules/sesion/mantenimiento.php/');
 if(!defined('VENDOR_PATH')) define('VENDOR_PATH', ROOT_PATH.'vendor/');
 if(!defined('VENDOR_SERVER')) define('VENDOR_SERVER', DOMAIN_PATH.'vendor/');
 if(!defined('DIST_PANGONG_SERVER')) define('DIST_PANGONG_SERVER', DOMAIN_PATH.'vendor/dist_pangong/');



//RUTAS PERSONALIZADAS:
if (!defined('INDEX_PATH')) define('INDEX_PATH', $dominio);
if(!defined('INDEX_PLATFORM_PATH')) define('INDEX_PLATFORM_PATH',PLATFORM_PATH.'modules/dashboards/index.php');
if (!defined('LOGIN_PATH')) define('LOGIN_PATH', PLATFORM_PATH.'modules/sesion/login.php/');
if (!defined('JS_PATH')) define('JS_PATH', ASSETS_PATH.'cooservipress/js/');
if (!defined('JS_SERVER')) define('JS_SERVER', ASSETS_SERVER.'cooservipress/js/');
if (!defined('EMAIL_PATH')) define('EMAIL_PATH','http://webmail.cpanel-e38.ehosts.com/logout/?locale=es_es');
//http://webmail.cpanel-e38.ehosts.com/logout/?locale=es_419


?>
