<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sesion
 *
 * @author Only Dev & OP
 */
class sesion {
    private $idsesion;
    private $usuario;
    private $clave;
    private $estado;
    
    public function __construct($idsesion, $usuario, $clave, $estado) {
        $this->idsesion = $idsesion;
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->estado = $estado;
    }

    public function getIdsesion() {
        return $this->idsesion;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setIdsesion($idsesion) {
        $this->idsesion = $idsesion;
        return $this;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
        return $this;
    }

    public function setClave($clave) {
        $this->clave = $clave;
        return $this;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
        return $this;
    }



    
}
