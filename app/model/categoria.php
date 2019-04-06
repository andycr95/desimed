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
class categoria {
    private $id;
    private $name;
    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
    public function getid() {
        return $this->id;
    }

    public function getNombreCategoria() {
        return $this->name;
    }


    public function setid($id) {
        $this->id = $id;
        return $this;
    }

    public function setNombreCategoria($name) {
        $this->name = $name;
        return $this;
    }

   


}
