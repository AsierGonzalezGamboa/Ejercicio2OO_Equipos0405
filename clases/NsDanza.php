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


?>