<?php
class Actividad
{
    private $id;
    private $descripcion;
    private $fecha;
    private $lugar;

    public function __construct($id, $descripcion, $fecha, $lugar)
    {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
        $this->lugar = $lugar;
    }

    public function getId() 
    {
        return $this->id;
    }
    public function getDescripcion() 
    {
        return $this->descripcion;
    }
    public function getFecha() 
    {
        return $this->fecha;
    }
    public function getLugar() 
    {
        return $this->lugar;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    }

    public function mostrar() 
    {
        return "->La actividad ".$this->getDescripcion()." se realizará en: ".$this->getLugar()." el: ".$this->getFecha();
    }
}

class Baile extends Actividad
{
    static $profesor;
    private $claseHora;

    function __construct($id, $descripcion, $fecha, $lugar, $profesor, $claseHora)
    {
        parent::__construct($id, $descripcion, $fecha, $lugar);
        Baile::$profesor = $profesor;
        $this->claseHora = $claseHora;
    }

    public function getProfesor() 
    {
        return $this->profesor;
    }

    public function setProfesor($profesor)
    {
        Baile::$profesor = $profesor;
    }
    public function getClaseHora() 
    {
        return $this->claseHora;
    }

    public function setClaseHora($claseHora)
    {
        $this->claseHora = $claseHora;
    }

    function mostrar()
    {
        $mensaje = parent::mostrar();
        $mensaje .=" y la realizara ".Baile::$profesor." que cobra la hora ".$this->claseHora."€";
        return $mensaje;

    }
}
