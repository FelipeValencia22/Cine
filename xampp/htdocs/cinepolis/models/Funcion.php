<?php

Class Funcion extends Model{
    
    protected static $table = "Funcion";
    private $id;
    private $hora;
    private $fecha;
    private $Sala_id;
    
    function __construct($hora, $fecha, $Sala_id, $id = null) {
        $this->id = $id;
        $this->hora = $hora;
        $this->fecha = $fecha;
        $this->Sala_id = $Sala_id;
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

    function getHora() {
        return $this->hora;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getSala_id() {
        return $this->Sala_id;
    }

    static function setTable($table) {
        self::$table = $table;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setSala_id($Sala_id) {
        $this->Sala_id = $Sala_id;
    }
    
}

