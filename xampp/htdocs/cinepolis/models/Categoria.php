<?php

Class Categoria extends Model{

    protected static $table = "Categoria";
    private $id;
    private $nombre;
    

    function __construct($nombre, $id = null) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    static function getTable() {
        return self::$table;
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    static function setTable($table) {
        self::$table = $table;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }



}
