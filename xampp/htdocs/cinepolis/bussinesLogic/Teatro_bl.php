<?php

class Teatro_bl {

  public function listarTeatro(){
      $values= Teatro::getAll();
      if(!empty($values)){
            return $values;
        }else{
            return "No hay Teatros";
        }   
  }
 

}
