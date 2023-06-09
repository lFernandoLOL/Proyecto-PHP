<?php
include 'libreria_funciones.php';

multi2(1,3);



$nums=array(rand(1,30),rand(1,30),rand(1,30),rand(1,30),rand(1,30),rand(1,30),rand(1,30),rand(1,30),rand(1,30),rand(1,30));

$var=calcular_media($nums);
echo "El valor medio del array es: $var";
echo "<br>";

$var=calcular_maximo($nums);
echo "El maximo del array es: $var";
echo "<br>";

$var=calcular_minimo($nums);
echo "El minimo del array es: $var";
echo "<br>";
echo "<br>";
$var=imprimir_array($nums);
echo $var;


class Usuario {
    public $nombre;
    public $password;
    public $email;
}
?>