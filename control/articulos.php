<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../vista/articulosVista.php';
require_once '../modelo/articulosModelo.php';

class IndexControl{
public $Vista;
public $Modelo;
    
    public function __construct() {
      $this->Vista=new ArticulosVista();
      $this->Modelo=new ArticulosModelo();
    }
    public function principal(){
           $this->Vista->refactoryContenido($this->Modelo->get_articulos());
    }
    }
    $index = new IndexControl();
    $index->principal();