<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of factura
 *
 * @author Only Dev & OP
 */
class factura {
    private $idfactura;
    private $idcliente;
    private $idusuario;
    private $fecha_registro;
    private $valor_neto;
    private $tipo_factura;
    private $estado;
    
    public function __construct($idfactura, $idcliente, $idusuario, $fecha_registro, $valor_neto, $tipo_factura, $estado) {
        $this->idfactura = $idfactura;
        $this->idcliente = $idcliente;
        $this->idusuario = $idusuario;
        $this->fecha_registro = $fecha_registro;
        $this->valor_neto = $valor_neto;
        $this->tipo_factura = $tipo_factura;
        $this->estado = $estado;
    }
    
    public function getIdfactura() {
        return $this->idfactura;
    }

    public function getIdcliente() {
        return $this->idcliente;
    }

    public function getIdusuario() {
        return $this->idusuario;
    }

    public function getFecha_registro() {
        return $this->fecha_registro;
    }

    public function getValor_neto() {
        return $this->valor_neto;
    }

    public function getTipo_factura() {
        return $this->tipo_factura;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setIdfactura($idfactura) {
        $this->idfactura = $idfactura;
        return $this;
    }

    public function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
        return $this;
    }

    public function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
        return $this;
    }

    public function setFecha_registro($fecha_registro) {
        $this->fecha_registro = $fecha_registro;
        return $this;
    }

    public function setValor_neto($valor_neto) {
        $this->valor_neto = $valor_neto;
        return $this;
    }

    public function setTipo_factura($tipo_factura) {
        $this->tipo_factura = $tipo_factura;
        return $this;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
        return $this;
    }



    
}
