<?php    
/*
echo "Loh numero pareh: &#128290";
echo "<table border=1px>";
echo "<tr>";


for($i=1;$i<=100;$i=$i+1){
    #echo "<table border=1px>";
    #echo "<tr>";
    if($i%2==0){
        echo "<td> $i </td>";
    }
    #echo "</tr>";
    #echo "</table>";

} 

echo "</tr>";
echo "</table>";
?>


<?php

echo "<br><br> Numeros multiplos de 3 y de 4: &#128291";
echo "<table border=1px>";
echo "<tr>";

for($i=1;$i<=100;$i=$i+1){

    if($i%3==0 && $i%4==0){
        echo "<td> $i </td>";

        echo "<br>su tabla de multiplicar:";
        for($j=0;$j<10;$j=$j+1){
            #$suma=$i*$j;
            echo "$i x $j = ".$i*$j;
            echo "<br>";
        }
    }

} 

echo "</tr>";
echo "</table>";








echo "<br><br> Ejercicio factorial con while &#10133";
$num=9;
$factorial=1;
$cont=1;

if ($num!=1 && $num!=0){

while ($cont<=$num){
    $aux=$cont*$num;
    $factorial= $factorial * $cont;
    $cont++;

    echo "<br>$factorial";
    echo "<br>$cont";
    echo "<br>$num";
}

}
echo "<br>Factorial del numero $num: $factorial";



#1.18.7 Ejercicios
#1. Escribe un script PHP que realice las siguientes acciones:

#Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
#Una vez que ha inicializado el array, imprimir todos los valores que almacena.

echo "<br><br><br>";
echo "<b>Ejercicio 1: </b> <br>";
$array = array();
for ($i = 0; $i < 10; $i++) {
    $array[$i] = rand(1, 30);
}

foreach ($array as $valor) {
    echo $valor . "<br>";
}


#2. Escribe un script PHP que realice las siguientes acciones:

#Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
#Una vez que ha inicializado el array, imprima todos los valores que almacena.
#Calcular el valor medio de los valores del array.
#Mostrar el valor medio que ha calculado.

$total=0;

echo"<br><br><br>";
echo "<b>Ejercicio 2: </b><br>";
$array = array();
for ($i = 0; $i < 10; $i++) {
  $array[] = rand(1, 30);
}


echo "Valores del array: ";
foreach ($array as $valor) {
  echo $valor . " ";
  $total=$total+$valor;
}
echo"<br><br><br>";

$media = $total / count($array);


echo "Valor medio: $media";


#3. Escribe un script PHP que realice las siguientes acciones:

#Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
#Una vez que ha inicializado el array, imprima todos los valores que almacena.
#Buscar el valor máximo de los valores del array.
#Muestre el valor máximo que ha encontrado.

echo"<br><br><br>";
echo "<b>Ejercicio 3:</b> <br>";

$max=0;
$array = array();

for ($i = 0; $i < 10; $i++) {
  $array[] = rand(1, 30);

  if ($array[$i]>$max){
    $max=$array[$i];
  }
}

echo "Valores del array: ";
for ($i = 0; $i < 10; $i++) {
    echo $array[$i] . " ";
}

echo "<br> El valor maximo es " .$max;


#4. Escribe un script PHP que realice las siguientes acciones:

#Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
#Una vez que ha inicializado el array, imprima todos los valores que almacena.
#Buscar el valor mínimo de los valores del array.
#Muestre el valor mínimo que ha encontrado.
#Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:

#Calcular la media.
#Calcular el valor máximo.
#Calcular el valor mínimo.
#Mostrar todos los valores calculados.
#El array de temperaturas lo vamos a generar con números aleatorios. El array será de 10 elementos y los valores aletorios generados estarán entre 1 y 30.

echo"<br><br><br>";
echo "<b>Ejercicio 4:</b> <br>";

$array = array();
$min=30;
for ($i = 0; $i < 10; $i++) {
    $array[] = rand(1, 30);
    echo $array[$i] . " ";

    if ($array[$i]<$min){
        $min=$array[$i];
  }
}

  echo "<br> El valor miinimo es " .$min;
#5. Resuelva el ejercicio utilizando bucles for.


#6. Resuelva el ejercicio utilizando bucles while.
echo"<br><br><br>";
echo "<b>Ejercicio 6:</b> <br>";

$array = array();
$min=30;
$i=0;
while ($i < 10){
    $array[] = rand(1, 30);
    echo $array[$i] . " ";

    if ($array[$i]<$min){
        $min=$array[$i];
  }
  $i++;
}

  echo "<br> El valor miinimo es " .$min;

#7. Resuelva el ejercicio utilizando bucles do-while.
echo"<br><br><br>";
echo "<b>Ejercicio 7:</b> <br>";

$array = array();
$min=30;
$i=0;
while ($i < 10){
    $array[] = rand(1, 30);
    echo $array[$i] . " ";

    if ($array[$i]<$min){
        $min=$array[$i];
  }
  $i++;
}

  echo "<br> El valor miinimo es " .$min;


#8. Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:

#Mostrar el listado ordenado de mayor a menor.
#Mostrar el listado ordenado de menor a mayor.
#El array de temperaturas lo vamos a generar con números aleatorios. El número de elementos del array será especificado mediante un formulario y los valores aletorios generados estarán entre 1 y 30.
/*
echo"<br><br><br>";
echo "<b>Ejercicio 8:</b> <br>";
$array = array();

for ($i = 0; $i < 10; $i++) {
  $array[] = rand(1, 30);

  if ($array[$i]>$max){
    $max=$array[$i];
  }

}



#9. Escribe un script PHP que permita ordenar el siguiente array asociativo:

#array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27")
#De forma ascendente ordenado por valor.
#De forma ascendente ordenado por clave.
#De forma descendente ordenado por valor.
#De forma descendetne ordenado por clave.

echo"<br><br><br>";
echo "<b>Ejercicio 9:</b> <br>";

$array = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");


asort($array);
echo "<br>Ordenado por valor de forma ascendente:<br>";
print_r($array);


ksort($array);
echo "<br>Ordenado por clave de forma ascendente:<br>";
print_r($array);


arsort($array);
echo "<br>Ordenado por valor de forma descendente:<br>";
print_r($array);


krsort($array);
echo "<br>Ordenado por clave de forma descendente:<br>";
print_r($array);



#10. Escribe un script PHP que muestre el siguiente array asociativo ordenado por la clave. El resultado deberá seguir el siguiente patrón:

#La capital de ITALIA es ROMA
#Tenga en cuenta que tendrá que utilizar una función para convertir las claves y los valores del array en mayúscula.

#array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

echo"<br><br><br>";
echo "<b>Ejercicio 10:</b> <br>";

$array = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);

ksort($array);
print_r($array);

foreach($array as $valor => $clave){
    echo "<br> The capital of " .strtoupper($valor) ." is " .strtoupper($clave);
}





echo"<br><br><br>";
echo "<b>Ejercicio primos:</b> <br>";

for ($i = 2; $i <= 200; $i++) {
    $es_primo = 1;
    for ($j = 2; $j <= $i-1; $j++) {
        if ($i % $j == 0) {
            $es_primo = 0;
            break;
        }
    }
    if ($es_primo == 1) {
        echo $i ."-";
    }
}

?>
*/
echo "<h1><b>Bienvenido a Localhost</b></h1>";
?>
