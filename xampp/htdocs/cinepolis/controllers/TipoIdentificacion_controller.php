<?php

class TipoIdentificacion_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"tipoidentificacion","Ejemplo");
    }
    
    // Teatro
    
    public function listarTipoIdentificacion(){
        print_r(TipoIdentificacion_bl::listarTipoIdentificacion());
    }
}
