<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class IndexVista{
public $base;
public $cuerpo; 
public $articulo; 
public $menuH; 
public $Diccionario;
    public function __construct() {
      $this->base = file_get_contents('../staticos/templates/base.html');
      $this->articulo = file_get_contents('../staticos/templates/articulo.html');
      $this->menuhorizontal = file_get_contents('../staticos/templates/menuHorizontal.html');
      $this->menuvertical = file_get_contents('../staticos/templates/menuVertical.html');
      $this->ActualizarDiccionario();     
    }

    public function ActualizarDiccionario(){
        $this->Diccionario=  array('base'=>$this->base,          
          'articulo'=>$this->articulo          
          );
    }
    
    public function refactoryContenido($datos){
        
        $total_art = "";
        
        foreach($datos as $valor){
            $aux=$this->articulo;
            $aux=str_ireplace("{titulo}", $valor['nombre'], $aux);
            $aux=str_ireplace("{descripcion}", $valor['descripcion'], $aux);
            $aux=str_ireplace("{contacto}", $valor['contacto'], $aux);
            $aux=str_ireplace("{valor}", $valor['valor'], $aux);
            $total_art.=$aux;
                
        }
        
        $this->base=str_ireplace("{contenido}", $total_art, $this->base);
        $this->base=str_ireplace("{menuHorizontal}", $this->menuhorizontal, $this->base);
        $this->base=str_ireplace("{menuVertical}", $this->menuvertical, $this->base);
        echo $this->base;

    }
}