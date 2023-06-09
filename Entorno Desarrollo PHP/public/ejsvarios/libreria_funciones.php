<?php

#Calcula la tabla de multiplicar del numero que recoge
function multi($num){
    for ($i=1;$i<=10;$i++){
        echo "$num * $i = ".$num*$i."<br>";
    }
}

#Devuelve las tablas de multiplicar entre los dos numeros que recibe
function multi2($num1,$num2){
    for($i=$num1;$i<=$num2;$i++){
        multi($i);
        echo "<br>";
    }
}


#Calcula la media de los numeros que contiene el array que recibe
function calcular_media($a){
    $j=0;
    $aux=0;
    $media=0;
    $cuenta=count($a);
    while ($j < $cuenta){
        $aux=$aux+$a[$j];
        $j++;
    }
    $media=$aux/$cuenta;
    
    return $media;
}


#Calcula el mayor de los numeros que contiene el array que recibe
function calcular_maximo($a){
    $aux=0;
    $aux2=0;
    $cuenta=count($a);
    for($j=0;$j<$cuenta;$j++){
        $aux=$a[$j];
        if ($aux>$aux2){
            $aux2=$aux;
        }
    }
    return $aux2;
}

#Calcula el minimo de los numeros que contiene el array que recibe
function calcular_minimo($a) {
    $minimo = $a[0];
    $cuenta = count($a);
    for ($j = 0; $j < $cuenta; $j++) {
      if ($a[$j] < $minimo) {
        $minimo = $a[$j];
      }
    }
    return $minimo;
  }
  
#Muestra el array que recibe
function imprimir_array($array) {

    for ($i = 0; $i < count($array); $i++) {
      echo $array[$i] . "<br>";
    }
  }


?>