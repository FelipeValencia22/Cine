<?php

class Reserva_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"reserva","Ejemplo");
    }
    
    // Reserva
    
    public function listarReservas(){
        print_r(Reserva_bl::listarReservas());
    }
}
