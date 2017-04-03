<?php

Class Funcion extends Model {

    protected static $table = "Funcion";
    private $id=null;
    private $hora;
    private $fecha;
    private $Pelicula_id;
    private $Sala_id;

    function __construct($hora, $fecha, $Sala_id, $id = null) {
        $this->id = $id;
        $this->hora = $hora;
        $this->fecha = $fecha;
        $this->Sala_id = $Sala_id;
    }

    private $has_one = array(
        'Sala' => array(
            'class' => 'Sala',
            'join_as' => 'Sala_id',
            'join_with' => 'id'
        ),'Pelicula' => array(
            'class' => 'Pelicula',
            'join_as' => 'Pelicula_id',
            'join_with' => 'id'
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
    
    function getHas_one() {
        return $this->has_one;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }
    function getHas_one2() {
        return $this->has_one2;
    }

    function setHas_one2($has_one2) {
        $this->has_one2 = $has_one2;
    }
    function getPelicula_id() {
        return $this->Pelicula_id;
    }

    function setPelicula_id($Pelicula_id) {
        $this->Pelicula_id = $Pelicula_id;
    }





}
