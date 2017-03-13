<?php

class Teatro_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"teatro","Ejemplo");
    }
    
    // Teatro
    
    public function listarTeatros(){
        print_r(Teatro_bl::listarTeatro());
    }
}
