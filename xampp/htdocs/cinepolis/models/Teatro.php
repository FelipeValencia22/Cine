<?php

Class Teatro extends Model{

    protected static $table = "Teatro";
    private $id;
    private $nombre;
    private $estado;
    private $telefono;
    private $direccion;
    private $Ciudad_id;
    
    function __construct($nombre, $estado, $telefono, $direccion, $Ciudad_id, $id = null) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->estado = $estado;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->Ciudad_id = $Ciudad_id;
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

    function getEstado() {
        return $this->estado;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCiudad_id() {
        return $this->Ciudad_id;
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

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setCiudad_id($Ciudad_id) {
        $this->Ciudad_id = $Ciudad_id;
    }    
    
}
