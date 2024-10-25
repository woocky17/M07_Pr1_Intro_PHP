<?php

/*
1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
variables y los resultados de sus operaciones.
*/

echo "1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
variables y los resultados de sus operaciones.<br>";

$num1 = rand(1,10);
$num2 = rand(1,10);

echo "Numero 1: ".$num1. "<br>";
echo "Numero 2: ".$num2. "<br>". "<br>";

$sum = $num1 + $num2;
$res = $num1 - $num2;
$mul = $num1 * $num2;
$div = $num1 / $num2;

echo "Suma: ".$sum. "<br>";
echo "Resta: ".$res. "<br>";
echo "Multiplicacion: ".$mul. "<br>";
echo "Division: ".$div. "<br>";






/*
2. Muestra cuál es mayor, cuál menor o si son iguales.
*/
echo "<br>";

echo "2. Muestra cuál es mayor, cuál menor o si son iguales.<br>";
if ($num1 > $num2) {
    echo "El $num1 es mayor que el $num2". "<br>";
}
elseif ($num1 < $num2){
    echo "El $num1 es menor que el $num2". "<br>";
}
else {
    echo "Los dos numeros son iguales". "<br>";
}

/*
3. Si las dos variables son valores superiores a 1,
a. calcula el área del triángulo con base y altura igual a los valores de las
variables. 
*/
echo "<br>";
echo "3. Si las dos variables son valores superiores a 1.<br>
a. calcula el área del triángulo con base y altura igual a los valores de las
variables. <br>";

if ($num1 > 1 & $num2 > 1) {
    $area = ($num1 * $num2) / 2;

    echo "Area del triangulo: ".$area ;
}
else{
    echo "Uno o los dos numeros no son mayores a 1" ;
}
?>