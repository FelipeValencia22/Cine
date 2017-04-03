<?php

class Ciudad_controller extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render($this, "ciudad", "Ejemplo");
    }

    // Ciudades
    public function listarCiudades() {
        print_r(Ciudad_bl::listarCiudades());
    }

    public function listar() {
        $this->view->render($this, "ciudad", "Ejemplo");
    }

    public function guardarCiudad() {
        print_r(Ciudad_bl::guardarCiudad());
    }

    public function buscarCiudadPorNombre() {
        print_r(Ciudad_bl::buscarCiudadPorNombre());
    }

    public function borrarCiudadPorNombre() {
        print_r(Ciudad_bl::borrarCiudadPorNombre());
    }

}