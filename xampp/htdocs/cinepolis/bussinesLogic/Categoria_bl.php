<?php

class Categoria_bl {

    public function listarCategorias() {
        $categoria = Categoria::getAll();
        return $categoria;
    }

    public function guardarCategoria() {
        if (isset($_GET["nombre"])) {
            $nombre = $_GET["nombre"];
            $categoria = new Categoria($nombre);
            $categoria->create();
            $categoriaCreada = Categoria::getBy("nombre", $nombre);
            if (is_null($categoriaCreada)) {
                echo "La categoria no se creó";
            } else {
                echo "La categoria se creó satisfactoriamente </br>";
                print_r($categoriaCreada);
            }
        }
    }

    public function save($categoriaArr) {
        $categoriaArr["id"] = null;
        $categoria = Categoria::instanciate($categoriaArr);

        $r = $categoria->create();
        $categoriaCreada = Categoria::getBy("nombre", $categoriaArr["nombre"]);
        if (is_null($categoriaCreada)) {
            echo "La categoria no se creó";
        } else {
            echo "La categoria se creó satisfactoriamente </br>";
            print_r($categoriaCreada);
        }
        return $r;
    }

    public function buscarCategoriaPorNombre() {
        if (isset($_GET["nombre"])) {
            $nombre = $_GET["nombre"];
            $categoria = Categoria::getBy("nombre", $nombre);
            if (!is_null($categoria)) {
                print_r($categoria);
            } else {
                echo "La Categoria no existe";
            }
        }
    }

    public function borrarCategoriaPorNombre() {
        if (isset($_GET["nombre"])) {
            $nombre = $_GET["nombre"];
            $categoria = Categoria::getBy("nombre", $nombre);
            if (!is_null($categoria)) {
                $categoria->delete();
                $categoria = Categoria::getBy("nombre", $nombre);
                if (is_null($categoria)) {
                    echo "La Categoria se eliminó satisfactoriametne";
                } else {
                    echo "No se eliminó la categoria";
                }
            } else {
                echo "La Categoria no existe";
            }
        }
    }

    public function eliminarCategoria($id) {
        $categoria= Categoria::getById($id);
        $categoria->delete();
    }

}
