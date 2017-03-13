<?php

class Ciudad_bl {

    public function listarCiudades() {
        $values = Ciudad::getAll();
        if(!empty($values)){
            return $values;
        }else{
            return "No hay ciudades";
        }        
    }
}
