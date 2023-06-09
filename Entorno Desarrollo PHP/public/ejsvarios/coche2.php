<?php

use FFI\CType;

require 'coche.php';

$miCoche = new Coche('Rojo Oscuro',120);
$miCoche->marca = 'audi';

$miCoche2 = new Coche('Azul Marino',140);
$miCoche2->marca = 'Bmw';

 
echo 'Color del coche: ' . $miCoche2->color ."<br>"; 
echo 'Potencia: ' . $miCoche2->potencia ."cv" ."<br>"; 
echo 'Velocudad naxima: ' . $miCoche2->calcularVelocidadMaxima() ."km/h" ."<br>";
$miCoche2->actPotencia(200);
echo 'Potencia con repro: ' . $miCoche2->potencia ."cv" ."<br>"; 
echo 'Velocidad naxima nueva: ' . $miCoche2->calcularVelocidadMaxima() ."km/h" ."<br>";

echo "<br><br>";

echo 'Color del coche: ' . $miCoche->color ."<br>"; 
echo 'Potencia: ' . $miCoche->potencia ."cv" ."<br>"; 
echo 'Velocudad naxima: ' . $miCoche->calcularVelocidadMaxima() ."km/h" ."<br>";

$miCoche->actPotencia(180);
echo 'Potencia con repro: ' . $miCoche->potencia ."cv" ."<br>"; 
echo 'Velocidad naxima nueva: ' . $miCoche->calcularVelocidadMaxima() ."km/h" ."<br>";

?>