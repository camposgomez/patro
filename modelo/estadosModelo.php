<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../core/conexion.php';
class EstadosModelo{
    public $conexion;
    public function __construct() {
      $this->conexion=new Conexion();
    }    
    
    public function get_estados(){
        $sql="select * from estados";
        return $this->conexion->get_resultados_query($sql);
    }
}
