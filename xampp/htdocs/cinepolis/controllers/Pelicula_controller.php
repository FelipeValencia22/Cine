<?php

class Pelicula_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"pelicula","Ejemplo");
    }
    
    // Peliculas
    
    public function listarPeliculas(){
        print_r(Pelicula_bl::listarPeliculas());
    }
    
    public function  guardarPelicula(){
        print_r(Pelicula_bl::guardarPelicula());
    }
    
    public function  buscarPeliculaPorTitulo(){
        print_r(Pelicula_bl::buscarPeliculaPorTitulo());
    }
}
