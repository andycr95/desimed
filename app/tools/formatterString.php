<?php

class formatterString{

   public static function invertirPosicionFechaMysql($fecha){
    $arrayFecha=array();
    $arrayFecha=explode( '-', $fecha);
    return $arrayFecha[2]."/".$arrayFecha[1]."/".$arrayFecha[0];

    
   }

   public static function posicionFechaMysql($fecha){
      $arrayFecha=array();
      $arrayFecha=explode( '/', $fecha);
      return $arrayFecha[2]."-".$arrayFecha[1]."-".$arrayFecha[0];
  
     }

}





?>