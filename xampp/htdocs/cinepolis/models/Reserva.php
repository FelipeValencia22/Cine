<?php

Class Reserva extends Model{

    protected static $table = "Reserva";
    private $id;
    private $forma_pago;
    private $estado_pago;
    private $precio;
    private $Cliente_id;
    private $Funcion_id;
    
    function __construct($forma_pago, $estado_pago, $precio, $Cliente_id, $Funcion_id, $id = null) {
        $this->id = $id;
        $this->forma_pago = $forma_pago;
        $this->estado_pago = $estado_pago;
        $this->precio = $precio;
        $this->Cliente_id = $Cliente_id;
        $this->Funcion_id = $Funcion_id;
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

    function getForma_pago() {
        return $this->forma_pago;
    }

    function getEstado_pago() {
        return $this->estado_pago;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getCliente_id() {
        return $this->Cliente_id;
    }

    function getFuncion_id() {
        return $this->Funcion_id;
    }

    static function setTable($table) {
        self::$table = $table;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setForma_pago($forma_pago) {
        $this->forma_pago = $forma_pago;
    }

    function setEstado_pago($estado_pago) {
        $this->estado_pago = $estado_pago;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setCliente_id($Cliente_id) {
        $this->Cliente_id = $Cliente_id;
    }

    function setFuncion_id($Funcion_id) {
        $this->Funcion_id = $Funcion_id;
    }
    
}

