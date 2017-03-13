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
class Silla_bl {

  public function listarSillas(){
      $values= Silla::getAll();
      if(!empty($values)){
            return $values;
        }else{
            return "No hay Sillas";
        }   
  }
 

}
