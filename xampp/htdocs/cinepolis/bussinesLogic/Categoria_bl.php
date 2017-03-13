<?php

class Categoria_bl {

    public function listarCategorias() {
        $categoria = Categoria::getAll();
        return $categoria;
    }
    
    public function guardarCategoria(){
        if(isset($_GET["nombre"]) ){
             $nombre=$_GET["nombre"];
             $categoria= new Categoria($nombre);
             $categoria->create();
             print_r($categoria);
        }
    }

}
