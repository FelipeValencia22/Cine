<?php

Class Sala extends Model{

    protected static $table = "Sala";
    private $id;
    private $numero;
    private $capacidad;
    private $Teatro_id;
    private $Tipo_id;

    function __construct($numero, $capacidad, $Teatro_id, $Tipo_id, $id = null) {
        $this->id = $id;
        $this->numero = $numero;
        $this->capacidad = $capacidad;
        $this->Teatro_id = $Teatro_id;
        $this->Tipo_id = $Tipo_id;
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

    function getNumero() {
        return $this->numero;
    }

    function getCapacidad() {
        return $this->capacidad;
    }

    function getTeatro_id() {
        return $this->Teatro_id;
    }

    function getTipo_id() {
        return $this->Tipo_id;
    }

    static function setTable($table) {
        self::$table = $table;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setCapacidad($capacidad) {
        $this->capacidad = $capacidad;
    }

    function setTeatro_id($Teatro_id) {
        $this->Teatro_id = $Teatro_id;
    }

    function setTipo_id($Tipo_id) {
        $this->Tipo_id = $Tipo_id;
    }

}
