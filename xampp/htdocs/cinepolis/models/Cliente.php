<?php

Class Cliente extends Model{

    protected static $table = "Cliente";
    private $id;
    private $nombre;
    private $usuario;
    private $contrasena;
    private $identificacion;
    private $Tipo_id;
    
    function __construct($nombre, $usuario, $contrasena, $identificacion, $Tipo_id, $id = null) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->identificacion = $identificacion;
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

    function getNombre() {
        return $this->nombre;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getContrasena() {
        return $this->contrasena;
    }

    function getIdentificacion() {
        return $this->identificacion;
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

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    function setIdentificacion($identificacion) {
        $this->identificacion = $identificacion;
    }

    function setTipo_id($Tipo_id) {
        $this->Tipo_id = $Tipo_id;
    }    
    
}
