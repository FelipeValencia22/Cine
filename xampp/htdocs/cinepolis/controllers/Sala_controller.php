<?php

class Sala_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"sala","Ejemplo");
    }
    
    // Salas
    
    public function listarSalas(){
        print_r(Sala_bl::listarSalas());
    }
}
