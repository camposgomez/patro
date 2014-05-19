<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EstadosVista{
public $base;
public $cuerpo; 
public $articulo; 
public $menuH; 
public $Diccionario;
    public function __construct() {
      $this->base = file_get_contents('../staticos/templates/base1.html');
      $this->estados = file_get_contents('../staticos/templates/estados.html');
      $this->estadosresultado = file_get_contents('../staticos/templates/estadosresultado.html');
      $this->menuhorizontal = file_get_contents('../staticos/templates/menuHorizontal.html');
      $this->menuvertical = file_get_contents('../staticos/templates/menuVertical.html');
      $this->ActualizarDiccionario();     
    }

    public function ActualizarDiccionario(){
        $this->Diccionario=  array('base'=>$this->base,          
          'estados'=>$this->estados,
          'estadosresultado'=>$this->estadosresultado           
          );
    }
    
    public function refactoryContenido($datos){

        $total_art = "";
        
        foreach($datos as $valor){
            $aux=$this->estadosresultado;
            $aux=str_ireplace("{codigo}", $valor['codiesta'], $aux);
            $aux=str_ireplace("{estado}", $valor['estado'], $aux);
            $total_art.=$aux;
        }

        $this->base=str_ireplace("{contenido}", $this->estados, $this->base);
        $this->base=str_ireplace("{resultado}", $total_art, $this->base);
        $this->base=str_ireplace("{menuHorizontal}", $this->menuhorizontal, $this->base);
        $this->base=str_ireplace("{menuVertical}", $this->menuvertical, $this->base);
        echo $this->base;

    }
}