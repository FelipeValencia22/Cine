<?php

class Funcion_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"funcion","Ejemplo");
    }
    
    // Funciones
    
    public function listarFunciones(){
        print_r(Funcion_bl::listarFunciones());
    }
    
}
