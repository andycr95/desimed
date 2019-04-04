<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lot
 *
 * @author Only Dev & OP
 */
class movimientos {
    private $idmovimientos;
    private $idproveedor_movimientos;
    private $idfactura_movimientos;
    
    public function __construct($idmovimientos, $idproveedor_movimientos, $idfactura_movimientos) {
        $this->idmovimientos = $idmovimientos;
        $this->idproveedor_movimientos = $idproveedor_movimientos;
        $this->idfactura_movimientos = $idfactura_movimientos;
    }

    public function getIdmovimientos() {
        return $this->idmovimientos;
    }

    public function getIdproveedor_movimientos() {
        return $this->idproveedor_movimientos;
    }

    public function getIdfactura_movimientos() {
        return $this->idfactura_movimientos;
    }

    public function setIdmovimientos($idmovimientos) {
        $this->idmovimientos = $idmovimientos;
        return $this;
    }

    public function setIdproveedor_movimientos($idproveedor_movimientos) {
        $this->idproveedor_movimientos = $idproveedor_movimientos;
        return $this;
    }

    public function setIdfactura_movimientos($idfactura_movimientos) {
        $this->idfactura_movimientos = $idfactura_movimientos;
        return $this;
    }


    
}

