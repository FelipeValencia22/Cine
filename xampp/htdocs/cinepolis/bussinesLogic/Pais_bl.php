<?php

class Pais_bl {

    public function listarPaises() {
        $values = Pais::getAll();
        if(!empty($values)){
            return $values;
        }else{
            return "No hay Paises";
        }   
    }
    
    public function guardarPais(){
        if(isset($_GET["nombre"]) ){
             $nombre=$_GET["nombre"];
             $pais= new Pais($nombre);
             $pais->create();
             $paisCreado= Pais::getBy("nombre", $nombre);
             if(is_null($paisCreado)){
                 echo "El pais no se creó";
             }else{
                 echo "El pais se creó satisfactoriamente </br>";
                 print_r($paisCreado);
             }
             
        }
    }
    
    public function buscarPaisPorNombre(){
      if(isset($_GET["nombre"])){
          $nombre=$_GET["nombre"];
          $pais = Pais::getBy("nombre", $nombre);
          if(!is_null($pais)){
              print_r($pais);
          }else{
              echo "El Pais no existe";
          }
      }
  }
  
  public function borrarPaisPorNombre(){
      if(isset($_GET["nombre"])){
          $nombre=$_GET["nombre"];
          $pais= Pais::getBy("nombre", $nombre);
          if(!is_null($pais)){
              $pais->delete();
              $pais = Categoria::getBy("nombre", $nombre);
              if(is_null($pais)){
                  echo "El Pais se eliminó satisfactoriametne";
              }else{
                  echo "No se eliminó el Pais";
              }
          }
          else{
              echo "El Pais no existe";
          }
      }
  }
    
    
    
}

