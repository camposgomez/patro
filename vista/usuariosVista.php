<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UsuariosVista{
public $base;
public $cuerpo; 
public $articulo; 
public $menuH; 
public $Diccionario;
    public function __construct() {
      $this->base = file_get_contents('../staticos/templates/base1.html');
      $this->usuarios = file_get_contents('../staticos/templates/usuarios.html');
      $this->usuariosresultado = file_get_contents('../staticos/templates/usuariosresultado.html');
      $this->menuhorizontal = file_get_contents('../staticos/templates/menuHorizontal.html');
      $this->menuvertical = file_get_contents('../staticos/templates/menuVertical.html');
      $this->ActualizarDiccionario();     
    }

    public function ActualizarDiccionario(){
        $this->Diccionario=  array('base'=>$this->base,          
          'usuarios'=>$this->usuarios,
          'usuariosresultado'=>$this->usuariosresultado           
          );
    }
    
    public function refactoryContenido($datos){

        $total_art = "";
        
        foreach($datos as $valor){
            $aux=$this->usuariosresultado;
            $aux=str_ireplace("{codiusua}", $valor['codiusua'], $aux);
            $aux=str_ireplace("{usuario}", $valor['usuario'], $aux);
            $aux=str_ireplace("{nombres}", $valor['nombres'], $aux);
            $aux=str_ireplace("{apellidos}", $valor['apellidos'], $aux);
            $aux=str_ireplace("{email}", $valor['email'], $aux);
            $aux=str_ireplace("{pass}", $valor['pass'], $aux);
            $total_art.=$aux;
        }

        $this->base=str_ireplace("{contenido}", $this->usuarios, $this->base);
        $this->base=str_ireplace("{resultado}", $total_art, $this->base);
        $this->base=str_ireplace("{menuHorizontal}", $this->menuhorizontal, $this->base);
        $this->base=str_ireplace("{menuVertical}", $this->menuvertical, $this->base);
        echo $this->base;

    }
}