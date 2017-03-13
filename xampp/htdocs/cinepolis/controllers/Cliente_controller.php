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
