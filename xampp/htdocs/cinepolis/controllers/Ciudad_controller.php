<?php

class Ciudad_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"ciudad","Ejemplo");
    }
    
     // Ciudades
    
    public function listarCiudades(){
        print_r(Ciudad_bl::listarCiudades());
    }
}
