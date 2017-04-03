<?php

class Funcion_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"funcion","Ejemplo");
    }
    
    public function crear() {
        $this->view->salas= Sala::getAll();
        $this->view->peliculas= Pelicula::getAll();
        $this->view->render($this, "funcion", "CinePolis");
        
    }
    
    // Funciones
    
    public function  save(){
        $funcion = $_POST;
        $r = Funcion_bl::guardarFuncion($funcion);
        header("Location:".URL);
    }
    
    public function listar(){
        $this->view->funciones = Funcion::getAll();
        $this->view->render($this,"listar","CinePolis");
      //  print_r(Teatro_bl::listarTeatro());
    }
    
}
