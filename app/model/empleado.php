<?php

class empleado {
    

    private $idempleado;
    private $tipo_empleado;
    private $rol_empleado;
    private $descripcion_empleado;
    private $nombre_empleado;
    private $documento_empleado;
    private $direccion_empleado;
    private $telefono_empleado;
    private $sexo_empleado;
    private $fecha_nacimiento_empleado;
    private $email_empleado;
    private $idsesion;
    private $estado_empleado;
    
    public function __construct($idempleado, $tipo_empleado, $rol_empleado, $descripcion_empleado, $nombre_empleado, $documento_empleado, $direccion_empleado, $telefono_empleado, $sexo_empleado, $fecha_nacimiento_empleado, $email_empleado, $idsesion, $estado_empleado) {
        $this->idempleado = $idempleado;
        $this->tipo_empleado = $tipo_empleado;
        $this->rol_empleado = $rol_empleado;
        $this->descripcion_empleado = $descripcion_empleado;
        $this->nombre_empleado = $nombre_empleado;
        $this->documento_empleado = $documento_empleado;
        $this->direccion_empleado = $direccion_empleado;
        $this->telefono_empleado = $telefono_empleado;
        $this->sexo_empleado = $sexo_empleado;
        $this->fecha_nacimiento_empleado = $fecha_nacimiento_empleado;
        $this->email_empleado = $email_empleado;
        $this->idsesion = $idsesion;
        $this->estado_empleado = $estado_empleado;
    }

    public function getIdempleado() {
        return $this->idempleado;
    }

    public function getTipo_empleado() {
        return $this->tipo_empleado;
    }

    public function getRol_empleado() {
        return $this->rol_empleado;
    }

    public function getDescripcion_empleado() {
        return $this->descripcion_empleado;
    }

    public function getNombre_empleado() {
        return $this->nombre_empleado;
    }

    public function getDocumento_empleado() {
        return $this->documento_empleado;
    }

    public function getDireccion_empleado() {
        return $this->direccion_empleado;
    }

    public function getTelefono_empleado() {
        return $this->telefono_empleado;
    }

    public function getSexo_empleado() {
        return $this->sexo_empleado;
    }

    public function getFecha_nacimiento_empleado() {
        return $this->fecha_nacimiento_empleado;
    }

    public function getEmail_empleado() {
        return $this->email_empleado;
    }

    public function getIdsesion() {
        return $this->idsesion;
    }

    public function getEstado_empleado() {
        return $this->estado_empleado;
    }

    public function setIdempleado($idempleado) {
        $this->idempleado = $idempleado;
        return $this;
    }

    public function setTipo_empleado($tipo_empleado) {
        $this->tipo_empleado = $tipo_empleado;
        return $this;
    }

    public function setRol_empleado($rol_empleado) {
        $this->rol_empleado = $rol_empleado;
        return $this;
    }

    public function setDescripcion_empleado($descripcion_empleado) {
        $this->descripcion_empleado = $descripcion_empleado;
        return $this;
    }

    public function setNombre_empleado($nombre_empleado) {
        $this->nombre_empleado = $nombre_empleado;
        return $this;
    }

    public function setDocumento_empleado($documento_empleado) {
        $this->documento_empleado = $documento_empleado;
        return $this;
    }

    public function setDireccion_empleado($direccion_empleado) {
        $this->direccion_empleado = $direccion_empleado;
        return $this;
    }

    public function setTelefono_empleado($telefono_empleado) {
        $this->telefono_empleado = $telefono_empleado;
        return $this;
    }

    public function setSexo_empleado($sexo_empleado) {
        $this->sexo_empleado = $sexo_empleado;
        return $this;
    }

    public function setFecha_nacimiento_empleado($fecha_nacimiento_empleado) {
        $this->fecha_nacimiento_empleado = $fecha_nacimiento_empleado;
        return $this;
    }

    public function setEmail_empleado($email_empleado) {
        $this->email_empleado = $email_empleado;
        return $this;
    }

    public function setIdsesion($idsesion) {
        $this->idsesion = $idsesion;
        return $this;
    }

    public function setEstado_empleado($estado_empleado) {
        $this->estado_empleado = $estado_empleado;
        return $this;
    }





}
