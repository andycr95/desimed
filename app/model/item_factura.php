<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of item_factura
 *
 * @author Only Dev & OP
 */
class item_factura {
    private $item_factura;
    private $idfactura;
    private $idproducto;
    private $idcantidad;
    private $precio_comprar;
    
    public function __construct($item_factura, $idfactura, $idproducto, $idcantidad,$precio_comprar) {
        $this->item_factura = $item_factura;
        $this->idfactura = $idfactura;
        $this->idproducto = $idproducto;
        $this->idcantidad = $idcantidad;
        $this->precio_comprar = $precio_comprar;
    }

    public function getprecio_comprar() {
        return $this->precio_comprar;
    }

    public function getItem_factura() {
        return $this->item_factura;
    }

    public function getIdfactura() {
        return $this->idfactura;
    }

    public function getIdproducto() {
        return $this->idproducto;
    }

    public function getIdcantidad() {
        return $this->idcantidad;
    }

    public function setItem_factura($item_factura) {
        $this->item_factura = $item_factura;
        return $this;
    }

    public function setIdfactura($idfactura) {
        $this->idfactura = $idfactura;
        return $this;
    }

    public function setIdproducto($idproducto) {
        $this->idproducto = $idproducto;
        return $this;
    }

    public function setIdcantidad($idcantidad) {
        $this->idcantidad = $idcantidad;
        return $this;
    }

    public function setprecio_comprar($precio_comprar) {
        $this->precio_comprar = $precio_comprar;
        return $this;
    }


}
