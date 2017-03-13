<?php

Class Reserva_has_Silla extends Model{

    protected static $table = "Reserva_has_Silla";
    private $id;
    private $Reserva_id;
    private $Silla_id;
    
    function __construct($Reserva_id, $Silla_id, $id = null) {
        $this->id = $id;
        $this->Reserva_id = $Reserva_id;
        $this->Silla_id = $Silla_id;
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

    function getReserva_id() {
        return $this->Reserva_id;
    }

    function getSilla_id() {
        return $this->Silla_id;
    }

    static function setTable($table) {
        self::$table = $table;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setReserva_id($Reserva_id) {
        $this->Reserva_id = $Reserva_id;
    }

    function setSilla_id($Silla_id) {
        $this->Silla_id = $Silla_id;
    }    
    
}

