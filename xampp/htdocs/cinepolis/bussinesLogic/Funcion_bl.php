<?php

class Funcion_bl {

    public function listarFunciones() {
        $values = Funcion::getAll();
        if(!empty($values)){
            return $values;
        }else{
            return "No hay Funciones";
        }   
    }
}

