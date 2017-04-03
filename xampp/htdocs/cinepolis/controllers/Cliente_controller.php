<?php

class Cliente_controller extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render($this, "cliente", "Ejemplo");
    }

    public function crear() {
        $this->view->tiposids = TipoIdentificacion::getAll();
        $this->view->render($this, "cliente", "Ejemplo");
    }

    public function save() {
        $cliente = $_POST;
        $r = Cliente_bl::guardarCliente($cliente);
        print_r($r);
        header("Location:" . URL . "Cliente/listar");
    }
    
    public function listar(){
        $this->view->clientes = Cliente_bl::listarClientes();
        $this->view->render($this,"listar","CinePolis");
    }
    
    public function eliminar(){
        $id= $_GET['id'];
        $r= Cliente_bl::eliminarCliente($id);
        header("Location:".URL."Cliente/listar");
    }

    // Ciudades

    public function listarCiudades() {
        print_r(Cliente_bl::listarClientes());
    }

}
