<?php

class Pais_controller extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render($this, "pais", "Ejemplo");
    }
    
    public function crear(){
        $this->view->paises = Pais::getAll();
        $this->view->render($this,"pais","CinePolis");
    }
    
    public function eliminar(){
        $id= $_GET['id'];
        $r= Pais_bl::eliminarPais($id);
        header("Location:".URL."Pais/listar");
    }
    
    public function save(){
        $pais= $_POST;
        $r= Pais_bl::guardarPais($pais);
        header("Location:".URL."Pais/listar");
    }
    
    public function listar(){
        $this->view->paises = Pais_bl::listarPaises();
        $this->view->render($this,"listar","CinePolis");
    }

    public function buscarPaisPorNombre() {
        print_r(Pais_bl::buscarPaisPorNombre());
    }

    public function borrarPaisPorNombre() {
        print_r(Pais_bl::borrarPaisPorNombre());
    }

}
