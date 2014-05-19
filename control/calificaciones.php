<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../vista/calificacionesVista.php';
require_once '../modelo/calificacionesModelo.php';

class IndexControl{
public $Vista;
public $Modelo;
    
    public function __construct() {
      $this->Vista=new CalificacionesVista();
      $this->Modelo=new CalificacionesModelo();
    }
    public function principal(){
           $this->Vista->refactoryContenido($this->Modelo->get_calificaciones());
    }
    }
    $index = new IndexControl();
    $index->principal();