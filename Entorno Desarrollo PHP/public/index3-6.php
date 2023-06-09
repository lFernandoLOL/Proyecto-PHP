<?php
include ("3-6.php");

echo "<br><B><center>EJERCICIO 3 </B></center><br>";
$array=inicializar_array(15,1,5);

imprimir_array($array);



echo "<br><br><B><center>EJERCICIO 4 </B></center><br>";
$array=array(1,2,3,4,5,6,7,8);
print_r($array);
$media=calcular_media($array);
echo "<br>El valor medio del array es " ."<b>$media</b>";



echo "<br><br><B><center>EJERCICIO 5 </B></center><br>";
$array=array(1,2,3,4,5,6,7,8);
print_r($array);
$maximo=calcular_maximo($array);
echo "<br>El valor maximo del array es " ."<b>$maximo</b>";


echo "<br><br><B><center>EJERCICIO 6 </B></center><br>";
$array=array(1,2,3,4,5,6,7,8);
print_r($array);
$minimo=calcular_minimo($array);
echo "<br>El valor minimo del array es " ."<b>$minimo</b>";

echo "<br><br><B><center>EJERCICIO 7 </B></center><br>";
$array = array();
for ($i = 0; $i < 10; $i++) {
    $array[$i] = rand(1, 30);
}

imprimir_array($array);


?>