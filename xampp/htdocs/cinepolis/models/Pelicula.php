<?php

class Pelicula extends Model {

    protected static $table = "Pelicula";
    private $id = null;
    private $titulo;
    private $subtitulada;
    private $poster;
    private $fecha_estreno;
    private $Categoria_id;
    
    function __construct($titulo, $subtitulada, $poster, $fecha_estreno, $Categoria_id, $id = null) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->subtitulada = $subtitulada;
        $this->poster = $poster;
        $this->fecha_estreno = $fecha_estreno;
        $this->Categoria_id = $Categoria_id;
    }
    
    public function getMyVars() {
        return get_object_vars($this);
    }

    function getFecha_estreno() {
        return $this->fecha_estreno;
    }

    function setFecha_estreno($fecha_estreno) {
        $this->fecha_estreno = $fecha_estreno;
    }
    
    static function getTable() {
        return self::$table;
    }

    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getSubtitulada() {
        return $this->subtitulada;
    }

    function getPoster() {
        return $this->poster;
    }

    function getCategoria_id() {
        return $this->Categoria_id;
    }

    static function setTable($table) {
        self::$table = $table;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setSubtitulada($subtitulada) {
        $this->subtitulada = $subtitulada;
    }

    function setPoster($poster) {
        $this->poster = $poster;
    }

    function setCategoria_id($Categoria_id) {
        $this->Categoria_id = $Categoria_id;
    }

}
