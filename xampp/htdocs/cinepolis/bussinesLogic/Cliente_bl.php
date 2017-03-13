<?php

class Cliente_bl {

    public function listarClientes() {
        $values = Cliente::getAll();
        if(!empty($values)){
            return $values;
        }else{
            return "No hay Clientes";
        }   
    }
}

