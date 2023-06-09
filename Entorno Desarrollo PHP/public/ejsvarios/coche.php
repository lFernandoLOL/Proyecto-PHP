<?php
class Coche {
    public $color;
    public $potencia;
    public $marca;
    public function __construct($color,$potencia)
    {
        $this->color=$color;
        $this->potencia=$potencia;
    }


    public function calcularVelocidadMaxima(){
        return $this->potencia * 1.5;
    }

    public function actPotencia($potencia){
        $this -> potencia = $potencia;
    }
}





?>