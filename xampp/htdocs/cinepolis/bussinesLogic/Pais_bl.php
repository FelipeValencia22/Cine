<?php

class Pais_bl {

    public function listarPaises() {
        $values = Pais::getAll();
        if (!empty($values)) {
            return $values;
        } else {
            return "No hay Paises";
        }
    }

    public function guardarPais($paisArr) {
        $paisArr["id"] = null;

        $pais = Pais::instanciate($paisArr);

        $r = $pais->create();

        return $r;
    }
    
    public function  eliminarPais($id){
      $pais= Pais::getById($id);
      $pais->delete();
  }

}
