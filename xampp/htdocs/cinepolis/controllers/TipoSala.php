<?php

class TipoSala extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"tiposala","Ejemplo");
    }
    
    // Teatro
    
    public function listarTipoSala(){
        print_r(TipoSala_bl::listarTipoSala());
    }
}
