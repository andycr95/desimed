<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of laboratorio
 *
 * @author Only Dev & OP
 */
class laboratorio {
    
    private $idlaboratorio;
    private $etiqueta;
    public function __construct($idlaboratorio, $etiqueta) {
        $this->idlaboratorio = $idlaboratorio;
        $this->etiqueta = $etiqueta;
    }
    public function getIdlaboratorio() {
        return $this->idlaboratorio;
    }

    public function getEtiqueta() {
        return $this->etiqueta;
    }

    public function setIdlaboratorio($idlaboratorio) {
        $this->idlaboratorio = $idlaboratorio;
        return $this;
    }

    public function setEtiqueta($etiqueta) {
        $this->etiqueta = $etiqueta;
        return $this;
    }


    
}
