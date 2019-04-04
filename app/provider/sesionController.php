<?php 
  require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');
  require_once(DATABASE_PATH."DataSource.php");
  require_once(MODEL_PATH."sesion.php");
  require_once(PERSISTENCE_PATH."sesionDao.php");

class sesionController{
  public static function validarSesion($usuario,$clave){
  $usuarioDao = new sesionDao();
  $objUsuario = $usuarioDao->validarSesion($usuario,$clave);
  if(is_null( $objUsuario) == true || empty($objUsuario) ==true){
    return false;   
  } else{ return $objUsuario; }
  }
  

  public static function registrarsesion($modelsesion){
     return sesionDao::crearSesion($modelsesion); }

  public static function ultimoUsuarioSesion(){
    return sesionDao::ultimoUsuarioSesion(); }

  public static function objSesionEmpleado($id){
    return sesionDao::usuarioIdSesion($id); }  
    

   

}
?>
