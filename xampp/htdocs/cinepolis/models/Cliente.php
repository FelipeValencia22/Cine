<?php

Class Cliente extends Model{

    protected static $table = "Cliente";
    private $id;
    private $nombre;
    private $usuario;
    private $contrasena;
    private $identificacion;
    private $email;
    private $Tipo_id;
    
    function __construct($nombre, $usuario, $contrasena, $identificacion, $email, $Tipo_id, $id = null) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->identificacion = $identificacion;
        $this->email = $email;
        $this->Tipo_id = $Tipo_id;
    }

    
    private $has_one = array( 
      'TipoIdentificacion'=>array(
          'class'=>'TipoIdentificacion',
          'join_as'=>'Tipo_id',
          'join_with'=>'id'
          )
      );
    
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
    
    function getHas_one() {
        return $this->has_one;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }
    
    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }


    
}
