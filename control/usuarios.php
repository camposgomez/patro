<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../vista/usuariosVista.php';
require_once '../modelo/usuariosModelo.php';

class IndexControl{
public $Vista;
public $Modelo;
    
    public function __construct() {
      $this->Vista=new UsuariosVista();
      $this->Modelo=new UsuariosModelo();
    }
    public function principal(){
           $this->Vista->refactoryContenido($this->Modelo->get_usuarios());
    }
    }
    $index = new IndexControl();
    $index->principal();