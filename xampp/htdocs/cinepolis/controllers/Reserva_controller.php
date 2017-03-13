<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index_controller
 *
 * @author pabhoz
 */
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
