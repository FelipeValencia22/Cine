<?php

class Ciudad_bl {

    public function listarCiudades() {
        $values = Ciudad::getAll();
        if (!empty($values)) {
            return $values;
        } else {
            return "No hay ciudades";
        }
    }
    

    public function guardarCiudad() {
        if (isset($_GET["nombre"]) && isset($_GET["Pais_id"])) {
            $nombre = $_GET["nombre"];
            $Pais_id = $_GET["Pais_id"];
            $ciudad = new Ciudad($nombre, $Pais_id);
            $ciudad->create();
            $ciudadCreada = Ciudad::getBy("nombre", $nombre);
            if (is_null($ciudadCreada)) {
                echo "La ciudad no se creó";
            } else {
                echo "La ciudad se creó satisfactoriamente </br>";
                print_r($ciudadCreada);
            }
        }
    }

    public function buscarCiudadPorNombre() {
        if (isset($_GET["nombre"])) {
            $nombre = $_GET["nombre"];
            $ciudad = Ciudad::getBy("nombre", $nombre);
            if (!is_null($ciudad)) {
                print_r($ciudad);
            } else {
                echo "La Ciudad no existe";
            }
        }
    }

    public function borrarCiudadPorNombre() {
        if (isset($_GET["nombre"])) {
            $nombre = $_GET["nombre"];
            $ciudad = Ciudad::getBy("nombre", $nombre);
            if (!is_null($ciudad)) {
                $ciudad->delete();
                $ciudad = Categoria::getBy("nombre", $nombre);
                if (is_null($ciudad)) {
                    echo "La Ciudad se eliminó satisfactoriametne";
                } else {
                    echo "No se eliminó la Ciudad";
                }
            } else {
                echo "La Ciudad no existe";
            }
        }
    }

}
