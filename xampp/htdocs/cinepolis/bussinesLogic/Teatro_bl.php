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
  
  public function  eliminarTeatro($id){
      $teatro= Teatro::getById($id);
      $teatro->delete();
  }


  public function obtenerValores($id){
      return $r= Teatro::getById($id);
  }
  
  public function guardarTeatro($teatroArr){
      $teatroArr["id"] = null;
      $teatroArr["Ciudad_id"] = null;
      $ciudad= Ciudad::getById($teatroArr["ciudad"]);
      unset($teatroArr["ciudad"]);
      
      $teatro= Teatro::instanciate($teatroArr);
      $teatro->has_One("Ciudad",$ciudad);
      
      $r= $teatro->create();
      
      return $r;
  }
 

}
