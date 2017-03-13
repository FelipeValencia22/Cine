<?php

class Cliente_bl {

    public function listarClientes() {
        $values = Cliente::getAll();
        if (!empty($values)) {
            return $values;
        } else {
            return "No hay Clientes";
        }
    }

    public function guardarCliente() {
        if (isset($_GET["nombre"]) && isset($_GET["usuario"]) && isset($_GET["contrasena"]) &&
                isset($_GET["identificacion"]) && isset($_GET["Tipo_id"])) {
            $nombre = $_GET["nombre"];
            $usuario = $_GET["usuario"];
            $contrasena = $_GET["contrasena"];
            $identificacion = $_GET["identificacion"];
            $Tipo_id = $_GET["Tipo_id"];
            if (tipoIdExiste($Tipo_id)) { // Validar si el tipo de ID existe
                $usuarioExiste = Cliente::getBy("usuario", $usuario);
                if (is_null($usuarioExiste)) {
                    $usuarioExiste = Cliente::getBy("identificacion", $identificacion);
                    if (is_null($usuarioExiste)) { // Validar si el usuario e identificación existen
                        $cliente = new Cliente($nombre, $usuario, $contrasena, $identificacion, $Tipo_id);
                        $cliente->create();
                        $clienteCreado = Categoria::getBy("identificacion", $identificacion);
                        if (is_null($clienteCreado)) {
                            echo "El cliente no se creó";
                        } else {
                            echo "El cliente se creó satisfactoriamente </br>";
                            print_r($clienteCreado);
                        }
                    } else {
                        echo "El número de identificación ya está registrado";
                    }
                } else {
                    echo "El nombre de usuario ya existe";
                }
            }
        }
    }

    public function tipoIdExiste($tipoId) {
        $tipoIdExiste = TipoIdentificacion::getBy("id", $tipoId);
        if (is_null($tipoIdExiste)) {
            return false;
        } else {
            return true;
        }
    }
    
    public function buscarClientePorUsuario() {
        if (isset($_GET["usuario"])) {
            $usuario = $_GET["usuario"];
            $cliente = Cliente::getBy("usuario", $usuario);
            if (!is_null($cliente)) {
                print_r($cliente);
            } else {
                echo "El Cliente no existe";
            }
        }
    }
    
    public function buscarClientePorIdentificacion() {
        if (isset($_GET["identificacion"])) {
            $identificacion = $_GET["identificacion"];
            $cliente = Cliente::getBy("identificacion", $identificacion);
            if (!is_null($cliente)) {
                print_r($cliente);
            } else {
                echo "El Cliente no existe";
            }
        }
    }
    
    public function borrarBorrarClientePorUsuario() {
        if (isset($_GET["usuario"])) {
            $usuario = $_GET["usuario"];
            $cliente = Cliente::getBy("usuario", $usuario);
            if (!is_null($cliente)) {
                $cliente->delete();
                $cliente = Categoria::getBy("usuario", $usuario);
                if (is_null($cliente)) {
                    echo "El cliente se eliminó satisfactoriametne";
                } else {
                    echo "No se eliminó el Cliente";
                }
            } else {
                echo "El cliente no existe";
            }
        }
    }
    
    public function borrarBorrarClientePorIdentificacion() {
        if (isset($_GET["identificacion"])) {
            $usuario = $_GET["usuario"];
            $cliente = Cliente::getBy("usuario", $usuario);
            if (!is_null($cliente)) {
                $cliente->delete();
                $cliente = Categoria::getBy("usuario", $usuario);
                if (is_null($cliente)) {
                    echo "El cliente se eliminó satisfactoriametne";
                } else {
                    echo "No se eliminó el Cliente";
                }
            } else {
                echo "El cliente no existe";
            }
        }
    }
    
    

}
