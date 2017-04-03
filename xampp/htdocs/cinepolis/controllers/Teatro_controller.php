<?php

class Teatro_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function crear(){
        $this->view->ciudades = Ciudad::getAll();
        $this->view->render($this,"teatro","CinePolis");
    }
    
    public function save(){
        $teatro= $_POST;
        $r= Teatro_bl::guardarTeatro($teatro);
        header("Location:".URL."Teatro/listar");
    }
    
    // Teatro
    
    public function listar(){
        $this->view->teatros = Teatro_bl::listarTeatro();
        $this->view->render($this,"listar","CinePolis");
    }
    
    public function modificar(){
        $this->view->teatros = Teatro::getAll();
        $this->view->ciudades = Ciudad::getAll();
        $this->view->render($this,"modificar","CinePolis");
    }
    
    public function eliminar(){
        $id= $_GET['id'];
        $r= Teatro_bl::eliminarTeatro($id);
        header("Location:".URL."Teatro/listar");
    }
    
    public function editar(){
        $id= $_GET['id'];
        $this->view->teatros = Teatro::getById($id);
        $this->view->render($this,"editar","CinePolis");
        
    }
    
    public function obtenerValores($id){
        Teatro_bl::obtenerValores($id);
    }
}
