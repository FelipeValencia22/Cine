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
class Categoria_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"categoria","Ejemplo");
    }
    
    // Categoria
    public function guardarCategoria(){
        Categoria_bl::guardarCategoria();
    }
  
    public function listarCategorias(){
        print_r(Categoria_bl::listarCategorias());
    }
}