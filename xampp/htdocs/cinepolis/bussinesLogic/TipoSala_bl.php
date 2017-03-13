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
class TipoSala_bl {

  public function listarTipoSala(){
      $values= TipoSala::getAll();
      if(!empty($values)){
            return $values;
        }else{
            return "No hay Tipo de Sala";
        }   
  }
 

}
