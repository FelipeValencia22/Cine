<?php

Class Silla extends Model{

    protected static $table = "Silla";
    private $id;
    private $numero;
    private $fila;
    private $estado;
    
    function __construct($numero, $fila, $estado, $id = null) {
        $this->id = $id;
        $this->numero = $numero;
        $this->fila = $fila;
        $this->estado = $estado;
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

    function getFila() {
        return $this->fila;
    }

    function getEstado() {
        return $this->estado;
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

    function setFila($fila) {
        $this->fila = $fila;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }
    
}
