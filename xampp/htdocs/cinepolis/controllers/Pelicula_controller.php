<?php

class Pelicula_controller extends Controller{
    
    function __construct() {
        parent::__construct();
    }

    public function crear(){
        $this->view->categorias = Categoria::getAll();
        $this->view->render($this,"pelicula","CinePolis");
    }
       
    // Peliculas
    public function listarPeliculas(){
        print_r(Pelicula_bl::listarPeliculas());
    }
    
    public function  save(){
        $pelicula = $_POST;
        $r = Pelicula_bl::guardarPelicula($pelicula,$_FILES["poster"]);
        header("Location:".URL);
    }
    
    public function  buscarPeliculaPorTitulo(){
        print_r(Pelicula_bl::buscarPeliculaPorTitulo());
    }
}
