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
class lote {
    private $idlote;
    private $codigo_lote;
    private $idproducto;
    private $cantidad;
    private $fecha_vencimiento;
    private $estado_lote;
    private $idtem_factura_lote;
    
    public function __construct($idlote,$codigo_lote, $idproducto, $cantidad, $fecha_vencimiento,$estado_lote,$idtem_factura_lote) {
        $this->idlote = $idlote;
        $this->codigo_lote = $codigo_lote;
        $this->idproducto = $idproducto;
        $this->cantidad = $cantidad;
        $this->fecha_vencimiento = $fecha_vencimiento;
        $this->estado_lote = $estado_lote;
        $this->idtem_factura_lote = $idtem_factura_lote;
    }

    public function getestado_lote() {
        return $this->estado_lote;
    }

    public function getidtem_factura_lote() {
        return $this->idtem_factura_lote;
    }


    public function getIdlote() {
        return $this->idlote;
    }

    public function getCodigo_lote() {
        return $this->codigo_lote;
    }

    public function getIdproducto() {
        return $this->idproducto;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getFecha_vencimiento() {
        return $this->fecha_vencimiento;
    }

    public function setIdlote($idlote) {
        $this->idlote = $idlote;
        return $this;
    }
    public function setCodigo_lote($codigo_lote) {
        $this->codigo_lote = $codigo_lote;
        return $this;
    }

    public function setIdproducto($idproducto) {
        $this->idproducto = $idproducto;
        return $this;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
        return $this;
    }

    public function setFecha_vencimiento($fecha_vencimiento) {
        $this->fecha_vencimiento = $fecha_vencimiento;
        return $this;
    }

    public function setestado_lote($estado_lote) {
        $this->estado_lote = $estado_lote;
        return $this;
    }


    public function setidtem_factura_lote($idtem_factura_lote) {
        $this->idtem_factura_lote = $idtem_factura_lote;
        return $this;
    }


    
    
}
