<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Example_bl
 *
 * @author Pabhoz
 */
class TipoIdentificacion_bl {

  public function listarTipoIdentificacion(){
      $values= TipoIdentificacion::getAll();
      if(!empty($values)){
            return $values;
        }else{
            return "No hay Tipos de Identificación";
        }   
  }
 

}
