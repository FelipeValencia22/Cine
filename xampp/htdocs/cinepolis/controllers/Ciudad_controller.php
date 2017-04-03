<?php

class Ciudad_controller extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render($this, "ciudad", "Ejemplo");
    }
    
    public function crear(){
        $this->view->paises = Pais::getAll();
        $this->view->render($this,"ciudad","CinePolis");
    }
    
    public function listar() {
        $this->view->ciudades = Ciudad::getAll();
        $this->view->render($this, "listar", "Ejemplo");
    }
    
    public function save() {
        $ciudad= $_POST;
        $r= Ciudad_bl::guardarCiudad($ciudad);
        header("Location:".URL."Ciudad/listar");
    }
    
    public function eliminar(){
        $id= $_GET['id'];
        $r= Ciudad_bl::eliminarCiudad($id);
        header("Location:".URL."Ciudad/listar");
    }

    // Ciudades

    public function buscarCiudadPorNombre() {
        print_r(Ciudad_bl::buscarCiudadPorNombre());
    }

    public function borrarCiudadPorNombre() {
        print_r(Ciudad_bl::borrarCiudadPorNombre());
    }
    
    

}