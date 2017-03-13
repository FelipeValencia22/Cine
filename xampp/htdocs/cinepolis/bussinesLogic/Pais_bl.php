<?php

class Pais_bl {

    public function listarPaises() {
        $values = Pais::getAll();
        if(!empty($values)){
            return $values;
        }else{
            return "No hay Paises";
        }   
    }
}

