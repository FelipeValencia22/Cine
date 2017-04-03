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
    
    public function  eliminarCliente($id){
      $cliente= Cliente::getById($id);
      $cliente->delete();
  }

    public function guardarCliente($clienteArr) {
        $clienteArr["id"] = null;
        $clienteArr["Tipo_id"] = null; 
        $Tipo_id= TipoIdentificacion::getById($clienteArr["tipoid"]);
        unset($clienteArr["tipoid"]);

        $usuarioExiste = Cliente::getBy("usuario", $clienteArr["usuario"]);
        if (is_null($usuarioExiste)) {
            $usuarioExiste = Cliente::getBy("identificacion", $clienteArr["identificacion"]);
            if (is_null($usuarioExiste)) {
                $cliente = Cliente::instanciate($clienteArr);
                $cliente->has_One("TipoIdentificacion", $Tipo_id);
                $r = $cliente->create();
            }else{
                $r="El tipo de identificación ya se encuentra registrado";
            }
        } else {
            $r="El usuario ya se encuentra registrado";
        }

        return $r;
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
