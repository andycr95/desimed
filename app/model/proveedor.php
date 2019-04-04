<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of proveedor
 *
 * @author Only Dev & OP
 */
class proveedor {
    private $idproveedor;
    private $razon_social;
    private $etiqueta_contacto;
    private $nombre_contacto;
    private $telefono_contacto;
    private $direccion_contacto;
    private $ciudad_contacto;
    
    public function __construct($idproveedor, $razon_social, $etiqueta_contacto, $nombre_contacto, $telefono_contacto, $direccion_contacto, $ciudad_contacto) {
        $this->idproveedor = $idproveedor;
        $this->razon_social = $razon_social;
        $this->etiqueta_contacto = $etiqueta_contacto;
        $this->nombre_contacto = $nombre_contacto;
        $this->telefono_contacto = $telefono_contacto;
        $this->direccion_contacto = $direccion_contacto;
        $this->ciudad_contacto = $ciudad_contacto;
    }

    public function getIdproveedor() {
        return $this->idproveedor;
    }

    public function getRazon_social() {
        return $this->razon_social;
    }

    public function getEtiqueta_contacto() {
        return $this->etiqueta_contacto;
    }

    public function getNombre_contacto() {
        return $this->nombre_contacto;
    }

    public function getTelefono_contacto() {
        return $this->telefono_contacto;
    }

    public function getDireccion_contacto() {
        return $this->direccion_contacto;
    }

    public function getCiudad_contacto() {
        return $this->ciudad_contacto;
    }

    public function setIdproveedor($idproveedor) {
        $this->idproveedor = $idproveedor;
        return $this;
    }

    public function setRazon_social($razon_social) {
        $this->razon_social = $razon_social;
        return $this;
    }

    public function setEtiqueta_contacto($etiqueta_contacto) {
        $this->etiqueta_contacto = $etiqueta_contacto;
        return $this;
    }

    public function setNombre_contacto($nombre_contacto) {
        $this->nombre_contacto = $nombre_contacto;
        return $this;
    }

    public function setTelefono_contacto($telefono_contacto) {
        $this->telefono_contacto = $telefono_contacto;
        return $this;
    }

    public function setDireccion_contacto($direccion_contacto) {
        $this->direccion_contacto = $direccion_contacto;
        return $this;
    }

    public function setCiudad_contacto($ciudad_contacto) {
        $this->ciudad_contacto = $ciudad_contacto;
        return $this;
    }


    
}
