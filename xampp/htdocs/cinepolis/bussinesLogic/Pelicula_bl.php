<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Example_bl
 *
 * @author Pabhoz
 */
class Pelicula_bl {

    public function listarPeliculas() {
        $values = Pelicula::getAll();
        if (!empty($values)) {
            return $values;
        } else {
            return "No hay Peliculas";
        }
    }

    public function guardarPelicula($peliculaArr, $poster) {
        $peliculaArr["id"] = null;
        $peliculaArr["poster"] = null;
        $peliculaArr["Categoria_id"] = null;
        $cat = Categoria::getById($peliculaArr["categoria"]);
        unset($peliculaArr["categoria"]);

        $peli = Pelicula::instanciate($peliculaArr);
        $peli->has_one("Categoria", $cat);

        $r = $peli->create();

        $i = Image::upload("../cinepolis/public/assets/images/", "poster", $r["getID"]);
        $i = substr($i, 13);

        $peli->setPoster($i);
        $r = $peli->update();
        return $r;
    }

    public function buscarPeliculaPorTitulo() {
        if (isset($_GET["titulo"])) {
            $titulo = $_GET["titulo"];
            $pelicula = Pelicula::getBy("titulo", $titulo);
            if (!is_null($pelicula)) {
                print_r($pelicula);
            } else {
                echo "La pelicula no existe";
            }
        }
    }

}
