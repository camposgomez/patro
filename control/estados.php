<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../vista/estadosVista.php';
require_once '../modelo/estadosModelo.php';

class IndexControl{
public $Vista;
public $Modelo;
    
    public function __construct() {
      $this->Vista=new EstadosVista();
      $this->Modelo=new EstadosModelo();
    }
    public function principal(){
           $this->Vista->refactoryContenido($this->Modelo->get_estados());
    }
    }
    $index = new IndexControl();
    $index->principal();