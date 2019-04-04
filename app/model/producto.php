<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of producto
 *
 * @author Only Dev & OP
 */
class producto {
    private $idproducto;
    private $idproveedor;
    private $idlaboratorio;
    private $idposicion;
    private $presentacion;
    private $codigo_barras;
    private $etiqueta;
    private $descripcion;
    private $valor;
    private $descuento;
    private $iva;
    private $estado;
    private $tipo_producto;
    private $stock_minimo;
    private $stock_normal;
    private $naturaleza;
    private $porcentaje_ganancia;
    public function __construct($idproducto, $idproveedor, $idlaboratorio, $idposicion, $presentacion, $codigo_barras, $etiqueta, $descripcion, $valor, $descuento, $iva, $estado, $tipo_producto, $stock_minimo, $stock_normal, $naturaleza, $porcentaje_ganancia) {
        $this->idproducto = $idproducto;
        $this->idproveedor = $idproveedor;
        $this->idlaboratorio = $idlaboratorio;
        $this->idposicion = $idposicion;
        $this->presentacion = $presentacion;
        $this->codigo_barras = $codigo_barras;
        $this->etiqueta = $etiqueta;
        $this->descripcion = $descripcion;
        $this->valor = $valor;
        $this->descuento = $descuento;
        $this->iva = $iva;
        $this->estado = $estado;
        $this->tipo_producto = $tipo_producto;
        $this->stock_minimo = $stock_minimo;
        $this->stock_normal = $stock_normal;
        $this->naturaleza = $naturaleza;
        $this->porcentaje_ganancia = $porcentaje_ganancia;
    }
    public function getIdproducto() {
        return $this->idproducto;
    }

    public function getIdproveedor() {
        return $this->idproveedor;
    }

    public function getIdlaboratorio() {
        return $this->idlaboratorio;
    }

    public function getIdposicion() {
        return $this->idposicion;
    }

    public function getPresentacion() {
        return $this->presentacion;
    }

    public function getCodigo_barras() {
        return $this->codigo_barras;
    }

    public function getEtiqueta() {
        return $this->etiqueta;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getDescuento() {
        return $this->descuento;
    }

    public function getIva() {
        return $this->iva;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getTipo_producto() {
        return $this->tipo_producto;
    }

    public function getStock_minimo() {
        return $this->stock_minimo;
    }

    public function getStock_normal() {
        return $this->stock_normal;
    }

    public function getNaturaleza() {
        return $this->naturaleza;
    }

    public function getPorcentaje_ganancia() {
        return $this->porcentaje_ganancia;
    }

    public function setIdproducto($idproducto) {
        $this->idproducto = $idproducto;
        return $this;
    }

    public function setIdproveedor($idproveedor) {
        $this->idproveedor = $idproveedor;
        return $this;
    }

    public function setIdlaboratorio($idlaboratorio) {
        $this->idlaboratorio = $idlaboratorio;
        return $this;
    }

    public function setIdposicion($idposicion) {
        $this->idposicion = $idposicion;
        return $this;
    }

    public function setPresentacion($presentacion) {
        $this->presentacion = $presentacion;
        return $this;
    }

    public function setCodigo_barras($codigo_barras) {
        $this->codigo_barras = $codigo_barras;
        return $this;
    }

    public function setEtiqueta($etiqueta) {
        $this->etiqueta = $etiqueta;
        return $this;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
        return $this;
    }

    public function setValor($valor) {
        $this->valor = $valor;
        return $this;
    }

    public function setDescuento($descuento) {
        $this->descuento = $descuento;
        return $this;
    }

    public function setIva($iva) {
        $this->iva = $iva;
        return $this;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
        return $this;
    }

    public function setTipo_producto($tipo_producto) {
        $this->tipo_producto = $tipo_producto;
        return $this;
    }

    public function setStock_minimo($stock_minimo) {
        $this->stock_minimo = $stock_minimo;
        return $this;
    }

    public function setStock_normal($stock_normal) {
        $this->stock_normal = $stock_normal;
        return $this;
    }

    public function setNaturaleza($naturaleza) {
        $this->naturaleza = $naturaleza;
        return $this;
    }

    public function setPorcentaje_ganancia($porcentaje_ganancia) {
        $this->porcentaje_ganancia = $porcentaje_ganancia;
        return $this;
    }



}
