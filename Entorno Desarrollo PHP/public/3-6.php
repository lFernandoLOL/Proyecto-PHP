<?php
/*
3. Escribe una función llamada inicializar_array que reciba tres parémetros llamados numero_de_elementos, min y max, y que devuelva un array de números enteros comprendidos entre los valores min y max. El número de elementos que contiene el array será el especificado en el parámetro de entrada numero_de_elementos

Notas:

Cómo devolver valores en una función PHP.
4. Escribe una función llamada calcular_media que reciba un array como parámetro de entrada y que devuelva la media de todos los valores que contiene.

5. Escribe una función llamada calcular_maximo que reciba un array como parámetro de entrada y que devuelva cuál es el máximo valor del array.

6. Escribe una función llamada calcular_minimo que reciba un array como parámetro de entrada y que devuelva cuál es el mínimo valor del array.

*/
function inicializar_array($numero_de_elementos,$min,$max){
    $array=array();
    for ($i = 0; $i < $numero_de_elementos; $i++){
        $array[$i] = rand($min,$max);
}
    return $array;
}


function calcular_media($array){

    $total=0;
    $num = count($array);
    for ($i=0;$i<$num;$i++) {
    $total=$array[$i]+$total;
    }
    return $total/$num;
}



function calcular_maximo($array){

    $num = count($array);
    $max = $num;
    for ($i=0;$i<$num;$i++) {

    if ($array[$i]>$max){
            $max=$array[$i];
    }
    }
return $max;
}

function calcular_minimo($array){

    $num = count($array);
    $min = $num;
    for ($i=0;$i<$num;$i++) {

    if ($array[$i]<$min){
            $min=$array[$i];
    }
    }
return $min;
}


function imprimir_array($array){
    $num=count($array);
    echo "<table border=1px><tr>";
    echo "<td> &nbsp; Posición &nbsp; </td>";
    echo "<td> &nbsp; Valor &nbsp; </td>";
    echo "</tr>";
    echo "<tr>";
    for ($i=0;$i<$num;$i++) {
        echo "<td><center>$i</td></center>";
        echo "<td><center>$array[$i]</center></td></tr>";

    }
    echo "</table>";
}

?>