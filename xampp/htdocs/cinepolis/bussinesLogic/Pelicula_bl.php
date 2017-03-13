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

  public function listarPeliculas(){
      $values = Pelicula::getAll();
      if(!empty($values)){
            return $values;
        }else{
            return "No hay Peliculas";
        }  
  }
  
  public function  guardarPelicula(){
      if(isset($_GET["titulo"]) && isset($_GET["subtitulada"]) 
              && isset($_GET["fecha_estreno"]) && isset($_GET["Categoria_id"]) ){
          
          $titulo=$_GET["titulo"];
          $subtitulada=$_GET["subtitulada"];
          $fecha_estreno=$_GET["fecha_estreno"];
          $Categoria_id=$_GET["Categoria_id"];
          
          $pelicula = new Pelicula($titulo, $subtitulada, null, $fecha_estreno, $Categoria_id);
          print_r($pelicula ->create());
          return $pelicula;
      }else{
          echo "Valores nulos";
      }
  }
  
  public function buscarPeliculaPorTitulo(){
      if(isset($_GET["titulo"])){
          $titulo=$_GET["titulo"];
          $pelicula = Pelicula::getBy("titulo", $titulo);
          if(!is_null($pelicula)){
              print_r($pelicula);
          }else{
              echo "La pelicula no existe";
          }
      }
  }

}
