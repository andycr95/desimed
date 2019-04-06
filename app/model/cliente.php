<?php


class cliente {
   private $idcliente;
   private $tipo_cliente;
   private $idempleado;
   private $registro;
   private $fecha_registro;
   private $nombre_apellido;
   private $documento;       
   private $sexo;
   private $fecha_nacimiento;
   private $direccion;
   private $telefono;
   private $celular;
   private $email;
   private $dispacidad;
   private $extracto;
   private $nombre_beneficiario;
   private $sexo_beneficiario;
   private $documento_beneficiario;
   private $parentesco_beneficiario;
   private $discapacidad_beneficiario;
   private $discapaciadad_desc_afiliacion;
   private $nombre_beneficiario2;
   private $sexo_beneficiario2;
   private $documento_beneficiario2;
   private $parentesco_beneficiario2;
   private $discapacidad_beneficiario2;
   private $discapacidad_desc_beneficiario2;
   private $nombre_beneficiario3;
   private $sexo_beneficiario3;
   private $documento_beneficiario3;
   private $parentesco_beneficiario3;
   private $discapacidad_beneficiario3;
   private $discapacidad_desc_beneficiario3;
   private $nombre_beneficiario4;
   private $sexo_beneficiario4;
   private $documento_beneficiario4;
   private $parentesco_beneficiario4;
   private $discapacidad_beneficiario4;
   private $discapacidad_desc_beneficiario4;
   private $nombre_afiliacion;
   private $sexo_afiliacion;
   private $documento_afiliacion;
   private $parentesco_afiliacion;
   private $discapacidad_afiliacion;
   private $discapacidad_desc_afiliacion;
   private $nombre_afiliacion2;
   private $sexo_afiliacion2;
   private $documento_afiliacion2;
   private $parentesco_afiliacion2;
   private $discapacidad_afiliacion2;
   private $discapaciadad_desc_afiliacion2;
   private $diabetes;
   private $hipertension;
   private $enf_cardiacas;
   private $estres;
   private $osteoporosis;
   private $artitis;
   private $cancer;
   private $alergias;
   private $migrana;
   private $ets;
   private $anemia;
   private $pulmonia;
   private $otras_cual;
   private $estado;
   
   
   public function __construct(
   $idcliente,
   $tipo_cliente,
   $idempleado,
   $registro,
   $fecha_registro,
   $nombre_apellido,
   $documento,
   $sexo,
   $fecha_nacimiento,
   $direccion,
   $telefono,
   $celular,
   $email,
   $dispacidad,
   $extracto,
   $nombre_beneficiario,
   $sexo_beneficiario,
   $documento_beneficiario,
   $parentesco_beneficiario,
   $discapacidad_beneficiario,
   $discapacidad_desc_beneficiario,
   $nombre_beneficiario2,
   $sexo_beneficiario2,
   $documento_beneficiario2,
   $parentesco_beneficiario2,
   $discapacidad_beneficiario2,
   $discapacidad_desc_beneficiario2,
   $nombre_beneficiario3,
   $sexo_beneficiario3,
   $documento_beneficiario3,
   $parentesco_beneficiario3,
   $discapacidad_beneficiario3,
   $discapaciadad_desc_beneficiario3,
   $nombre_beneficiario4,
   $sexo_beneficiario4,
   $documento_beneficiario4,
   $parentesco_beneficiario4,
   $discapacidad_beneficiario4,
   $discapaciadad_desc_beneficiario4,
   $nombre_afiliacion,
   $sexo_afiliacion,
   $documento_afiliacion,
   $parentesco_afiliacion,
   $discapacidad_afiliacion,
   $discapaciadad_desc_afiliacion,
   $nombre_afiliacion2,
   $sexo_afiliacion2,
   $documento_afiliacion2,
   $parentesco_afiliacion2,
   $discapacidad_afiliacion2,
   $discapaciadad_desc_afiliacion2,
   $diabetes,
   $hipertension,
   $enf_cardiacas,
   $estres,
   $osteoporosis,
   $artitis,
   $cancer,
   $alergias,
   $migrana,
   $ets,
   $anemia,
   $pulmonia,
   $otras_cual,
   $estado) {
       $this->idcliente = $idcliente;
       $this->tipo_cliente = $tipo_cliente;
       $this->idempleado = $idempleado;
       $this->registro = $registro;
       $this->migrana = $migrana;
       $this->fecha_registro = $fecha_registro;
       $this->nombre_apellido = $nombre_apellido;
       $this->documento = $documento;
       $this->sexo = $sexo;
       $this->fecha_nacimiento = $fecha_nacimiento;
       $this->direccion = $direccion;
       $this->telefono = $telefono;
       $this->celular = $celular;
       $this->email = $email;
       $this->dispacidad = $dispacidad;
       $this->extracto = $extracto;
       $this->nombre_beneficiario = $nombre_beneficiario;
       $this->sexo_beneficiario = $sexo_beneficiario;
       $this->documento_beneficiario = $documento_beneficiario;
       $this->parentesco_beneficiario = $parentesco_beneficiario;
       $this->discapacidad_beneficiario = $discapacidad_beneficiario;
       $this->discapacidad_desc_beneficiario = $discapacidad_desc_beneficiario;
       $this->nombre_beneficiario2 = $nombre_beneficiario2;
       $this->sexo_beneficiario2 = $sexo_beneficiario2;
       $this->documento_beneficiario2 = $documento_beneficiario2;
       $this->parentesco_beneficiario2 = $parentesco_beneficiario2;
       $this->discapacidad_beneficiario2 = $discapacidad_beneficiario2;
       $this->discapacidad_desc_beneficiario2 = $discapacidad_desc_beneficiario2;
       $this->nombre_beneficiario3 = $nombre_beneficiario3;
       $this->sexo_beneficiario3 = $sexo_beneficiario3;
       $this->documento_beneficiario3 = $documento_beneficiario3;
       $this->parentesco_beneficiario3 = $parentesco_beneficiario3;
       $this->discapacidad_beneficiario3 = $discapacidad_beneficiario3;
       $this->discapaciadad_desc_beneficiario3 = $discapaciadad_desc_beneficiario3;
       $this->nombre_beneficiario4 = $nombre_beneficiario4;
       $this->sexo_beneficiario4 = $sexo_beneficiario4;
       $this->documento_beneficiario4 = $documento_beneficiario4;
       $this->parentesco_beneficiario4 = $parentesco_beneficiario4;
       $this->discapacidad_beneficiario4 = $discapacidad_beneficiario4;
       $this->discapaciadad_desc_beneficiario4 = $discapaciadad_desc_beneficiario4;
       $this->nombre_afiliacion = $nombre_afiliacion;
       $this->sexo_afiliacion = $sexo_afiliacion;
       $this->documento_afiliacion = $documento_afiliacion;
       $this->parentesco_afiliacion = $parentesco_afiliacion;
       $this->discapacidad_afiliacion = $discapacidad_afiliacion;
       $this->discapaciadad_desc_afiliacion = $discapaciadad_desc_afiliacion;
       $this->nombre_afiliacion2 = $nombre_afiliacion2;
       $this->sexo_afiliacion2 = $sexo_afiliacion2;
       $this->documento_afiliacion2 = $documento_afiliacion2;
       $this->parentesco_afiliacion2 = $parentesco_afiliacion2;
       $this->discapacidad_afiliacion2 = $discapacidad_afiliacion2;
       $this->discapaciadad_desc_afiliacion2 = $discapaciadad_desc_afiliacion2;
       $this->diabetes = $diabetes;
       $this->hipertension = $hipertension;
       $this->enf_cardiacas = $enf_cardiacas;
       $this->estres = $estres;
       $this->osteoporosis = $osteoporosis;
       $this->artitis = $artitis;
       $this->cancer = $cancer;
       $this->alergias = $alergias;
       $this->ets = $ets;
       $this->anemia = $anemia;
       $this->pulmonia = $pulmonia;
       $this->otras_cual = $otras_cual;
       $this->estado = $estado;
   }

   public function getIdcliente() {
       return $this->idcliente;
   }

   public function getTipo_cliente() {
       return $this->tipo_cliente;
   }

   public function getIdempleado() {
       return $this->idempleado;
   }

   public function getRegistro() {
       return $this->registro;
   }

   public function getFecha_registro() {
       return $this->fecha_registro;
   }

   public function getNombre_apellido() {
       return $this->nombre_apellido;
   }

   public function getDocumento() {
       return $this->documento;
   }

   public function getSexo() {
       return $this->sexo;
   }

   public function getFecha_nacimiento() {
       return $this->fecha_nacimiento;
   }

   public function getDireccion() {
       return $this->direccion;
   }

   public function getTelefono() {
       return $this->telefono;
   }

   public function getCelular() {
       return $this->celular;
   }

   public function getEmail() {
       return $this->email;
   }

   public function getDiscapacidad() {
       return $this->dispacidad;
   }

   public function getExtracto() {
       return $this->extracto;
   }

   public function getNombre_beneficiario() {
       return $this->nombre_beneficiario;
   }

   public function getSexo_beneficiario() {
       return $this->sexo_beneficiario;
   }

   public function getDocumento_beneficiario() {
       return $this->documento_beneficiario;
   }

   public function getParentesco_beneficiario() {
       return $this->parentesco_beneficiario;
   }

   public function getDiscapacidad_beneficiario() {
       return $this->discapacidad_beneficiario;
   }

   public function getDiscapacidad_desc_beneficiario() {
       return $this->discapacidad_desc_beneficiario;
   }

   public function getNombre_beneficiario2() {
       return $this->nombre_beneficiario2;
   }

   public function getSexo_beneficiario2() {
       return $this->sexo_beneficiario2;
   }

   public function getDocumento_beneficiario2() {
       return $this->documento_beneficiario2;
   }

   public function getParentesco_beneficiario2() {
       return $this->parentesco_beneficiario2;
   }

   public function getDiscapacidad_beneficiario2() {
       return $this->discapacidad_beneficiario2;
   }

   public function getDiscapacidad_desc_beneficiario2() {
       return $this->discapacidad_desc_beneficiario2;
   }

   public function getNombre_beneficiario3() {
       return $this->nombre_beneficiario3;
   }

   public function getSexo_beneficiario3() {
       return $this->sexo_beneficiario3;
   }

   public function getDocumento_beneficiario3() {
       return $this->documento_beneficiario3;
   }

   public function getParentesco_beneficiario3() {
       return $this->parentesco_beneficiario3;
   }

   public function getDiscapacidad_beneficiario3() {
       return $this->discapacidad_beneficiario3;
   }

   public function getDiscapacidad_desc_beneficiario3() {
       return $this->discapacidad_desc_beneficiario3;
   }

   public function getNombre_beneficiario4() {
       return $this->nombre_beneficiario4;
   }

   public function getSexo_beneficiario4() {
       return $this->sexo_beneficiario4;
   }

   public function getDocumento_beneficiario4() {
       return $this->documento_beneficiario4;
   }

   public function getParentesco_beneficiario4() {
       return $this->parentesco_beneficiario4;
   }

   public function getDiscapacidad_beneficiario4() {
       return $this->discapacidad_beneficiario4;
   }

   public function getDiscapacidad_desc_beneficiario4() {
       return $this->discapacidad_desc_beneficiario4;
   }

   public function getNombre_afiliacion() {
       return $this->nombre_afiliacion;
   }

   public function getSexo_afiliacion() {
       return $this->sexo_afiliacion;
   }

   public function getDocumento_afiliacion() {
       return $this->documento_afiliacion;
   }

   public function getParentesco_afiliacion() {
       return $this->parentesco_afiliacion;
   }

   public function getDiscapacidad_afiliacion() {
       return $this->discapacidad_afiliacion;
   }

   public function getDiscapacidad_desc_afiliacion() {
       return $this->discapacidad_desc_afiliacion;
   }

   public function getNombre_afiliacion2() {
       return $this->nombre_afiliacion2;
   }

   public function getSexo_afiliacion2() {
       return $this->sexo_afiliacion2;
   }

   public function getDocumento_afiliacion2() {
       return $this->documento_afiliacion2;
   }

   public function getParentesco_afiliacion2() {
       return $this->parentesco_afiliacion2;
   }

   public function getDiscapacidad_afiliacion2() {
       return $this->discapacidad_afiliacion2;
   }

   public function getDiscapacidad_desc_afiliacion2() {
       return $this->discapaciadad_desc_afiliacion2;
   }

   public function getDiabetes() {
       return $this->diabetes;
   }

   public function getHipertension() {
       return $this->hipertension;
   }

   public function getEnf_cardiacas() {
       return $this->enf_cardiacas;
   }

   public function getEstres() {
       return $this->estres;
   }

   public function getOsteoporosis() {
       return $this->osteoporosis;
   }

   public function getArtitris() {
       return $this->artitis;
   }

   public function getCancer() {
       return $this->cancer;
   }

   public function getAlergias() {
       return $this->alergias;
   }

   public function getMigrana() {
    return $this->migrana;
}

   public function getEts() {
       return $this->ets;
   }

   public function getAnemia() {
       return $this->anemia;
   }

   public function getPulmonia() {
       return $this->pulmonia;
   }

   public function getOtras_cual() {
       return $this->otras_cual;
   }

   public function getEstado() {
       return $this->estado;
   }

   public function setIdcliente($idcliente) {
       $this->idcliente = $idcliente;
       return $this;
   }

   public function setTipo_cliente($tipo_cliente) {
       $this->tipo_cliente = $tipo_cliente;
       return $this;
   }

   public function setIdempleado($idempleado) {
       $this->$idempleado = $idempleado;
       return $this;
   }

   public function setRegistro($registro) {
       $this->registro = $registro;
       return $this;
   }

   public function setFecha_registro($fecha_registro) {
       $this->fecha_registro = $fecha_registro;
       return $this;
   }

   public function setNombre_apellido($nombre_apellido) {
       $this->nombre_apellido = $nombre_apellido;
       return $this;
   }

   public function setDocumento($documento) {
       $this->documento = $documento;
       return $this;
   }

   public function setSexo($sexo) {
       $this->sexo = $sexo;
       return $this;
   }

   public function setFecha_nacimiento($fecha_nacimiento) {
       $this->fecha_nacimiento = $fecha_nacimiento;
       return $this;
   }

   public function setDireccion($direccion) {
       $this->direccion = $direccion;
       return $this;
   }

   public function setTelefono($telefono) {
       $this->telefono = $telefono;
       return $this;
   }

   public function setCelular($celular) {
       $this->celular = $celular;
       return $this;
   }

   public function setEmail($email) {
       $this->email = $email;
       return $this;
   }

   public function setDiscapacidad($dispacidad) {
       $this->dispacidad = $dispacidad;
       return $this;
   }

   public function setExtracto($extracto) {
       $this->extracto = $extracto;
       return $this;
   }

   public function setNombre_beneficiario($nombre_beneficiario) {
       $this->nombre_beneficiario = $nombre_beneficiario;
       return $this;
   }

   public function setSexo_beneficiario($sexo_beneficiario) {
       $this->sexo_beneficiario = $sexo_beneficiario;
       return $this;
   }

   public function setDocumento_beneficiario($documento_beneficiario) {
       $this->documento_beneficiario = $documento_beneficiario;
       return $this;
   }

   public function setParentesco_beneficiario($parentesco_beneficiario) {
       $this->parentesco_beneficiario = $parentesco_beneficiario;
       return $this;
   }

   public function setDiscapacidad_beneficiario($discapacidad_beneficiario) {
       $this->discapacidad_beneficiario = $discapacidad_beneficiario;
       return $this;
   }

   public function setDiscapacidad_desc_beneficiario($discapacidad_desc_beneficiario) {
       $this->discapacidad_desc_beneficiario = $discapacidad_desc_beneficiario;
       return $this;
   }

   public function setNombre_beneficiario2($nombre_beneficiario2) {
       $this->nombre_beneficiario2 = $nombre_beneficiario2;
       return $this;
   }

   public function setSexo_beneficiario2($sexo_beneficiario2) {
       $this->sexo_beneficiario2 = $sexo_beneficiario2;
       return $this;
   }

   public function setDocumento_beneficiario2($documento_beneficiario2) {
       $this->documento_beneficiario2 = $documento_beneficiario2;
       return $this;
   }

   public function setParentesco_beneficiario2($parentesco_beneficiario2) {
       $this->parentesco_beneficiario2 = $parentesco_beneficiario2;
       return $this;
   }

   public function setDiscapacidad_beneficiario2($discapacidad_beneficiario2) {
       $this->discapacidad_beneficiario2 = $discapacidad_beneficiario2;
       return $this;
   }

   public function setDiscapacidad_desc_beneficiario2($discapacidad_desc_beneficiario2) {
       $this->discapacidad_desc_beneficiario2 = $discapacidad_desc_beneficiario2;
       return $this;
   }

   public function setNombre_beneficiario3($nombre_beneficiario3) {
       $this->nombre_beneficiario3 = $nombre_beneficiario3;
       return $this;
   }

   public function setSexo_beneficiario3($sexo_beneficiario3) {
       $this->sexo_beneficiario3 = $sexo_beneficiario3;
       return $this;
   }

   public function setDocumento_beneficiario3($documento_beneficiario3) {
       $this->documento_beneficiario3 = $documento_beneficiario3;
       return $this;
   }

   public function setParentesco_beneficiario3($parentesco_beneficiario3) {
       $this->parentesco_beneficiario3 = $parentesco_beneficiario3;
       return $this;
   }

   public function setDiscapacidad_beneficiario3($discapacidad_beneficiario3) {
       $this->discapacidad_beneficiario3 = $discapacidad_beneficiario3;
       return $this;
   }

   public function setDiscapacidad_desc_beneficiario3($discapacidad_desc_beneficiario3) {
       $this->discapacidad_desc_beneficiario3 = $discapacidad_desc_beneficiario3;
       return $this;
   }

   public function setNombre_beneficiario4($nombre_beneficiario4) {
       $this->nombre_beneficiario4 = $nombre_beneficiario4;
       return $this;
   }

   public function setSexo_beneficiario4($sexo_beneficiario4) {
       $this->sexo_beneficiario4 = $sexo_beneficiario4;
       return $this;
   }

   public function setDocumento_beneficiario4($documento_beneficiario4) {
       $this->documento_beneficiario4 = $documento_beneficiario4;
       return $this;
   }

   public function setParentesco_beneficiario4($parentesco_beneficiario4) {
       $this->parentesco_beneficiario4 = $parentesco_beneficiario4;
       return $this;
   }

   public function setDiscapacidad_beneficiario4($discapacidad_beneficiario4) {
       $this->discapacidad_beneficiario4 = $discapacidad_beneficiario4;
       return $this;
   }

   public function setDiscapacidad_desc_beneficiario4($discapacidad_desc_beneficiario4) {
       $this->discapacidad_desc_beneficiario4 = $discapacidad_desc_beneficiario4;
       return $this;
   }

   public function setNombre_afiliacion($nombre_afiliacion) {
       $this->nombre_afiliacion = $nombre_afiliacion;
       return $this;
   }

   public function setSexo_afiliacion($sexo_afiliacion) {
       $this->sexo_afiliacion = $sexo_afiliacion;
       return $this;
   }

   public function setDocumento_afiliacion($documento_afiliacion) {
       $this->documento_afiliacion = $documento_afiliacion;
       return $this;
   }

   public function setParentesco_afiliacion($parentesco_afiliacion) {
       $this->parentesco_afiliacion = $parentesco_afiliacion;
       return $this;
   }

   public function setDiscapacidad_afiliacion($discapacidad_afiliacion) {
       $this->discapacidad_afiliacion = $discapacidad_afiliacion;
       return $this;
   }

   public function setDiscapacidad_desc_afiliacion($discapacidad_desc_afiliacion) {
       $this->discapacidad_desc_afiliacion = $discapacidad_desc_afiliacion;
       return $this;
   }

   public function setNombre_afiliacion2($nombre_afiliacion2) {
       $this->nombre_afiliacion2 = $nombre_afiliacion2;
       return $this;
   }

   public function setSexo_afiliacion2($sexo_afiliacion2) {
       $this->sexo_afiliacion2 = $sexo_afiliacion2;
       return $this;
   }

   public function setDocumento_afiliacion2($documento_afiliacion2) {
       $this->documento_afiliacion2 = $documento_afiliacion2;
       return $this;
   }

   public function setParentesco_afiliacion2($parentesco_afiliacion2) {
       $this->parentesco_afiliacion2 = $parentesco_afiliacion2;
       return $this;
   }

   public function setDiscapacidad_afiliacion2($discapacidad_afiliacion2) {
       $this->discapacidad_afiliacion2 = $discapacidad_afiliacion2;
       return $this;
   }

   public function setDiscapacidad_desc_afiliacion2($discapacidad_desc_afiliacion2) {
       $this->discapacidad_desc_afiliacion2 = $discapacidad_desc_afiliacion2;
       return $this;
   }

   public function setDiabetes($diabetes) {
       $this->diabetes = $diabetes;
       return $this;
   }

   public function setHipertension($hipertension) {
       $this->hipertension = $hipertension;
       return $this;
   }

   public function setEnf_cardiacas($enf_cardiacas) {
       $this->enf_cardiacas = $enf_cardiacas;
       return $this;
   }

   public function setEstres($estres) {
       $this->estres = $estres;
       return $this;
   }

   public function setOsteoporosis($osteoporosis) {
       $this->osteoporosis = $osteoporosis;
       return $this;
   }

   public function setArtitris($artitris) {
       $this->artitris = $artitris;
       return $this;
   }

   public function setCancer($cancer) {
       $this->cancer = $cancer;
       return $this;
   }

   public function setAlergias($alergias) {
       $this->alergias = $alergias;
       return $this;
   }

   public function setMigrana($migrana) {
    $this->migrana = $migrana;
    return $this;
}

   public function setEts($ets) {
       $this->ets = $ets;
       return $this;
   }

   public function setAnemia($anemia) {
       $this->anemia = $anemia;
       return $this;
   }

   public function setPulmonia($pulmonia) {
       $this->pulmonia = $pulmonia;
       return $this;
   }

   public function setOtras_cual($otras_cual) {
       $this->otras_cual = $otras_cual;
       return $this;
   }

   public function setEstado($estado) {
       $this->estado = $estado;
       return $this;
   }


   

}
