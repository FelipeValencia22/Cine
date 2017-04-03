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
    
    public function  eliminarCiudad($id){
      $ciudad= Ciudad::getById($id);
      $ciudad->delete();
  }
    
    public function guardarCiudad($ciudadArr){
        $ciudadArr["id"] = null;
        $ciudadArr["Pais_id"] = null;
        $Pais= Pais::getById($ciudadArr["pais"]);
        unset($ciudadArr["pais"]);
        
        $ciudad= Ciudad::instanciate($ciudadArr);
        $ciudad->has_one("Pais",$Pais);
        
        $r=$ciudad->create();
        
        return $r;        
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
