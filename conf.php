<?php

/*Archivo de configuracion del proyecto */
/* Variables globales*/
// cooservipres archivo de configuracion
//
// Do not edit this file without changing its name.
// This file is an example of empty config file for cooservipres than can be used to create "conf.php".
//
// Warning: Be sure to not add line feed or spaces after closing php tag.

//###################
// Main parameters
//###################
// ROOT_PATH' /  DOMAIN_PATH  /  SERVER_PATH
// This parameter defines the root URL of your cooservipres index.php page without ending "/".
// It must link to the directory htdocs.
// In most cases, this is autodetected but it's still required 
// * to show full url bookmarks for some services (ie: agenda rss export url, ...)
// * or when using Apache dir aliases (autodetect fails)
// * or when using nginx (autodetect fails)

 //configuracion en ambiente local:
 $app ="dsimed";

$dominio = "localhost/desimed/";
$dominio_server = "localhost/desimed/";
/* Variables Base de datos*/
//Instancia Servidor - desarrollo
 $basename="desimed";
 $host="localhost";
 $userDatabase="root";
 $passDatabase="";
 
if (!defined('BASENAME')) define('BASENAME',$basename);
if (!defined('HOST')) define('HOST',$host);
if (!defined('USERDATABASE')) define('USERDATABASE',$userDatabase);
if (!defined('PASSDATABASE')) define('PASSDATABASE',$passDatabase);

 /* Rutas para directorios generales  */

 
/***NOTA***/
/*Todas las rutas definidas que terminan en _PATH son para importar o incluir de manera local archivos .php /que no soportan rutas absolutas como lo require ,aunque tengas activado allow_include,con ruta absoluta no permite utilizar alguna clase escrita dentro del archivo .php aunque haya sido incluida.*/
//Todas las rutas definidas que terminan en _SERVER son para importar o incluir archivos de manera extar ,es decir que soporta rutas absolutas.como ejemplo archivos .js , .css , .jpg .ico .png etc.
 /* const */
 //ruta del directorio principal:
 if (!defined('ROOT_PATH')) define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/desimed/');
//con domino
if (!defined('DOMAIN_PATH')) define('DOMAIN_PATH',$dominio);
//con dominio del servidor principal 
if (!defined('SERVER_PATH')) define('SERVER_PATH',$dominio_server);

//ruta del directorio app:
if (!defined('APP_PATH')) define('APP_PATH',ROOT_PATH.'app/');
if (!defined('MODEL_PATH')) define('MODEL_PATH',APP_PATH.'model/');
if (!defined('PROVIDER_PATH')) define('PROVIDER_PATH', APP_PATH.'provider/');
if (!defined('PERSISTENCE_PATH')) define('PERSISTENCE_PATH', APP_PATH.'persistence/');
if (!defined('TOOLS_PATH')) define('TOOLS_PATH', APP_PATH.'tools/');
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
if (!defined('PLATFORM_SERVER')) define('PLATFORM_SERVER', PUBLIC_SERVER.'platform/');
if (!defined('WEB_PATH')) define('WEB_PATH', PUBLIC_PATH.'web/');
if (!defined('WEB_SERVER')) define('WEB_SERVER', PUBLIC_SERVER.'web/');
if (!defined('ASSETS_PATH')) define('ASSETS_PATH', PUBLIC_PATH.'assets/');
if (!defined('ASSETS_SERVER')) define('ASSETS_SERVER', PUBLIC_SERVER.'assets/');
//rutas del directorio routes
if (!defined('ROUTES_PATH')) define('ROUTES_PATH', ROOT_PATH.'routes/');
if (!defined('ROUTES_PATH')) define('ROUTES_PATH', DOMAIN_PATH.'routes/');
//rutas del directorio testing
if (!defined('TESTING_PATH')) define('TESTING_PATH', ROOT_PATH.'testing/');
//rutas del directorio vendor
 if(!defined('MAINTENANCE_PATH')) define('MAINTENANCE_PATH',PLATFORM_PATH.'modules/sesion/mantenimiento.php/');
 if(!defined('VENDOR_PATH')) define('VENDOR_PATH', ROOT_PATH.'vendor/');
 if(!defined('VENDOR_SERVER')) define('VENDOR_SERVER', DOMAIN_PATH.'vendor/');
 if(!defined('DIST_PANGONG_SERVER')) define('DIST_PANGONG_SERVER', DOMAIN_PATH.'vendor/dist_pangong/');
//RUTAS PERSONALIZADAS:
if (!defined('ICON_PATH')) define('ICON_PATH', ASSETS_SERVER.'cooservipress/img/favicon.ico');
if (!defined('INDEX_PATH')) define('INDEX_PATH', $dominio);
if(!defined('INDEX_PLATFORM_PATH')) define('INDEX_PLATFORM_PATH',PLATFORM_SERVER.'modules/dashboards/master.php');
if (!defined('LOGIN_PATH')) define('LOGIN_PATH', PLATFORM_SERVER.'modules/sesion/login.php/');
if (!defined('JS_PATH')) define('JS_PATH', ASSETS_PATH.'cooservipress/js/');
if (!defined('JS_SERVER')) define('JS_SERVER', ASSETS_SERVER.'cooservipress/js/');
if (!defined('EMAIL_PATH')) define('EMAIL_PATH','http://webmail.cpanel-e38.ehosts.com/logout/?locale=es_es');
//http://webmail.cpanel-e38.ehosts.com/logout/?locale=es_419

//Ruta de carpeta para documentos
if (!defined('DOCUMENT_PATH')) define('DOCUMENT_PATH', ROOT_PATH.'external/');

/*
dsimed@portalx.net dsimed

dsimed_administracion@portalx.net dsimed_administracion

dsimed_soporte@portalx.net  dsimed_soporte

dsimed_asesoras@portalx.net dsimed_asesoras


*/

?>