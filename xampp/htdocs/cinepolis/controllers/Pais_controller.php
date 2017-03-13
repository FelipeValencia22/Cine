<?php

class Pais_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"pais","Ejemplo");
    }
    
    // Funciones
    
    public function listarPaises(){
        print_r(Pais_bl::listarPaises());
    }
    
}
