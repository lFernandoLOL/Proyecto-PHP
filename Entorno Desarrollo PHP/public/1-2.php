<?php
function numelemarray($vector){
    $numelementos=0;
    foreach($vector as $valor){
        $numelementos++;
    }
    return $numelementos;
}



/*
1. Escribe una función que reciba un número como parámetro de entrada y que imprima su tabla de multiplicar.

Notas:

Funciones definidas por el usuario en PHP.
2. Escribe una función que reciba dos parámetros de entrada (inicio y fin) y que imprima las tablas de multiplicar entre esos dos números. Utilice la función del ejercicio anterior.

*/


echo "<center><B>EJERCICIO 1 </B></center>";
function tablamult($numero){
    echo "<br>su tabla de multiplicar:";
    for($j=0;$j<10;$j=$j+1){
        #$suma=$i*$j;
        echo "$numero x $j = ".$numero * $j;
        echo "<br>";
        
}
}

echo tablamult(4);


echo "<br><br><B><center>EJERCICIO 2 </B></center><br>";

function tablacomprendida($numero1,$numero2){

    while($numero1<=$numero2){
        tablamult($numero1);
        $numero1++;
    }

}

echo tablacomprendida(1,5);

?>