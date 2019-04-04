<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of posicion
 *
 * @author Only Dev & OP
 */
class posicion {
    
    private $idposicion;
    private $etiqueta;
    public function __construct($idposicion, $etiqueta) {
        $this->idposicion = $idposicion;
        $this->etiqueta = $etiqueta;
    }
    public function getIdposicion() {
        return $this->idposicion;
    }

    public function getEtiqueta() {
        return $this->etiqueta;
    }

    public function setIdposicion($idposicion) {
        $this->idposicion = $idposicion;
        return $this;
    }

    public function setEtiqueta($etiqueta) {
        $this->etiqueta = $etiqueta;
        return $this;
    }


    
}
