<?php

class Categoria_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"categorias","Ejemplo");
    }
    
    public function crear() {
        $this->view->render($this, "categoria", "CinePolis");
    }
    
    public function listar(){
        $this->view->categorias = Categoria::getAll();
        $this->view->render($this,"listar","CinePolis");
      //  print_r(Teatro_bl::listarTeatro());
    }
    
    public function save() {
        $Categoria=$_POST;
        $r= Categoria_bl::save($Categoria);
        header("Location:".URL);
    }
    
    // Categoria
    public function guardarCategoria(){
        Categoria_bl::guardarCategoria();
    }
  
    public function listarCategorias(){
        print_r(Categoria_bl::listarCategorias());
    }
    
    public function buscarCategoriaPorNombre(){
        print_r(Categoria_bl::buscarCategoriaPorNombre());
    }
    
    public function borrarCategoriaPorNombre(){
        print_r(Categoria_bl::borrarCategoriaPorNombre());
    }
    
    public function eliminar(){
        $id= $_GET['id'];
        $r= Categoria_bl::eliminarCategoria($id);
        header("Location:".URL."Categoria/listar");
    }
    
    
}
