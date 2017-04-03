<?php

class Funcion_bl {

    public function listarFunciones() {
        $values = Funcion::getAll();
        if (!empty($values)) {
            return $values;
        } else {
            return "No hay Funciones";
        }
    }
    
     public function  eliminarFuncion($id){
      $funcion= Funcion::getById($id);
      $funcion->delete();
  }

    

    public function guardarFuncion($funcionArr) {
        $funcionArr["id"] = null;
        $funcionArr["Sala_id"] = null;
        $funcionArr["Pelicula_id"] = null;
        $sala = Sala::getById($funcionArr["sala"]);
        $pelicula = Pelicula::getById($funcionArr["pelicula"]);
        unset($funcionArr["sala"]);
        unset($funcionArr["pelicula"]);
        $funcion = Funcion::instanciate($funcionArr);
        $funcion->has_one("Sala", $sala);
        $funcion->has_one("Pelicula", $pelicula);

        $r = $funcion->create();

        return $r;
    }
    
    public function listarFuncion(){
        
    }

}
