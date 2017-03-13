<?php

Class Ciudad extends Model{

    protected static $table = "Ciudad";
    private $id;
    private $nombre;
    private $Pais_id;
    
    function __construct($nombre, $Pais_id, $id = null) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->Pais_id = $Pais_id;
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

    function getPais_id() {
        return $this->Pais_id;
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

    function setPais_id($Pais_id) {
        $this->Pais_id = $Pais_id;
    }
    
}
