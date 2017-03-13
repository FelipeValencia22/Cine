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
class Pais_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"pais","Ejemplo");
    }
    
    // Funciones
    
    public function listarPaises(){
        print_r(Pais_bl::listarPaises());
    }
    
}
