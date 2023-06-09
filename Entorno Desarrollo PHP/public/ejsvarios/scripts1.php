<?php
echo "<b>Mostrar lista</b><br>";
$nums=array(rand(1,30),rand(1,30),rand(1,30),rand(1,30),rand(1,30),rand(1,30),rand(1,30),rand(1,30),rand(1,30),rand(1,30));
$cuenta=count($nums);
/*for ($i=0;$i<num_elementos;$i++){
   $nums[]
}

ORDENAR ARRAY
while ($i<10){
$num=rand(1,30);
if($num>$a[$i-1]){
    $a[$i]=$num;
}
else{
    for($j=$i;$j>0;$j--){
        if($a[j-1]>$num){
            $a[$j]=$a[$j-1];
        }
    }
    $a[$j]=$num];
}

}

*/

for($i=0;$i<$cuenta;$i++){
    echo $nums[$i]=rand(1,30);
    echo "<br>";
}

echo "<br><br>";
echo "<b>Media de la lista</b><br>";
$j=0;
$aux=0;
$media=0;
while ($j<$cuenta){
    $aux=$aux+$nums[$j];
    $j++;
}
$media=$aux/$cuenta;
echo "la media entre los numeros es: $media <br><br><br>";


echo "<b>Mayor y menor de la lista:</b><br>";
$aux=0;
$aux4=30;
$aux2=0;
for($j=0;$j<$cuenta;$j++){
    $aux=$nums[$j];
    $aux3=$nums[$j];
    if ($aux>$aux2){
        $aux2=$aux;
    }
    if ($aux3<$aux4){
        $aux4=$aux3;
    }
}
echo "el mayor num es $aux2 <br>";
echo "el menor num es $aux4 <br><br><br>";



echo "<b>Comprobar si un num esta en la lista:</b><br>";
$i=0;
$num=20;
$bandera=0;
while($bandera!=1 && $i<10){
    if($nums[$i]==$num){
        echo "El numero esta en la lista";
        $bandera=1;
    }
    $i++;
}
if($bandera==0){
    echo "El numero no esta en la lista";
    $bandera=1;
}

echo "<br><br><br>";


#$_SERVER=array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
#print_r(_SERVER);
asort($_SERVER);
foreach($_SERVER as $clave =>$val){
    echo "$clave = $val <br>";

}
