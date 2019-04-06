<?php 

require_once($_SERVER['DOCUMENT_ROOT'].'/desimed/conf.php');

require_once(DATABASE_PATH."DataSource.php");

require_once(MODEL_PATH."categoria.php");
class categoriaDao {

    public function crearCategoria(categoria $categoria){
        $data_source = new DataSource();
        $sql2 = "INSERT INTO category VALUES (NULL, :name )";

        $resultado2 = $data_source->ejecutarActualizacion($sql2, array(
            ':name' => $categoria->getNombreCategoria() 
        ));
        return $resultado2;
}

public static function listadocategorias(){
  
    $data_source = new DataSource();
    $data_table = $data_source->ejecutarConsulta("SELECT *  FROM category ");
    if(count($data_table)>0) {
        $categoria_array=array();
        foreach ($data_table as $clave=> $valor) {
            
            $objcategoria = new categoria(
                $data_table[$clave]["id"],
                $data_table[$clave]["name"]);
        array_push($categoria_array, $objcategoria);
        }
        return $categoria_array;
    }else {return false;}
}

public static function listacategoriasParametrizable($organizacion,$busqueda){
    $organizacion_ ="";
    $sql_=" ";

    switch ($organizacion) {

        case 'az':
        $organizacion_ = "order by name ASC";
        break;

        case 'za':
        $organizacion_ = "order by name DESC";
        break;
      
     }

    if(!is_null($busqueda)){
        $sql_ =  "WHERE name LIKE '%".$busqueda."%' "; 
    }

     $sql ="
        SELECT * FROM `category` ".$sql_." ".$organizacion_;


    $data_source = new DataSource();
    $data_table = $data_source->ejecutarConsulta($sql);

    if(count($data_table)>0) {
        
        $categoria_array=array();
        foreach ($data_table as $clave=> $valor) {
            
            $objcategoria = new categoria(
                $data_table[$clave]["id"],
                $data_table[$clave]["name"]);
        
        array_push($categoria_array, $objcategoria);
        }
        return $categoria_array;
    }else {return false;}

    $organizacion_ ="";
    $sql_=" ";
}
  

}


?>