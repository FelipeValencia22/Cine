<?php

class Cliente_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"cliente","Ejemplo");
    }
    
     // Ciudades
    
    public function listarCiudades(){
        print_r(Cliente_bl::listarClientes());
    }
}
