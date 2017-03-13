<?php

class Categoria_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"categoria","Ejemplo");
    }
    
    // Categoria
    public function guardarCategoria(){
        Categoria_bl::guardarCategoria();
    }
  
    public function listarCategorias(){
        print_r(Categoria_bl::listarCategorias());
    }
}
