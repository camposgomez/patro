<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CalificacionesVista{
public $base;
public $cuerpo; 
public $articulo; 
public $menuH; 
public $Diccionario;
    public function __construct() {
      $this->base = file_get_contents('../staticos/templates/base1.html');
      $this->calificaciones = file_get_contents('../staticos/templates/calificaciones.html');
      $this->calificacionesresultado = file_get_contents('../staticos/templates/calificacionesresultado.html');
      $this->menuhorizontal = file_get_contents('../staticos/templates/menuHorizontal.html');
      $this->menuvertical = file_get_contents('../staticos/templates/menuVertical.html');
      $this->ActualizarDiccionario();     
    }

    public function ActualizarDiccionario(){
        $this->Diccionario=  array('base'=>$this->base,          
          'calificaciones'=>$this->calificaciones,
          'calificacionesresultado'=>$this->calificacionesresultado         
          );
    }
    
    public function refactoryContenido($datos){

        $total_art = "";
        
        foreach($datos as $valor){
            $aux=$this->calificacionesresultado;
            $aux=str_ireplace("{codigo}", $valor['codicali'], $aux);
            $aux=str_ireplace("{calificacion}", $valor['calificacion'], $aux);
            $aux=str_ireplace("{valor}", $valor['valocali'], $aux);
            $total_art.=$aux;
        }

        $this->base=str_ireplace("{contenido}", $this->calificaciones, $this->base);
        $this->base=str_ireplace("{resultado}", $total_art, $this->base);
        $this->base=str_ireplace("{menuHorizontal}", $this->menuhorizontal, $this->base);
        $this->base=str_ireplace("{menuVertical}", $this->menuvertical, $this->base);
        echo $this->base;

    }
}