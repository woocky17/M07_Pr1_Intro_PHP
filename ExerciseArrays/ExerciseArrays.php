<?php
/*
1.
Crea un array asociaƟvo con los siguientes datos y claves.
nombre: Sara, apellido: Marơnez, edad: 23, ciudad: Barcelona.
Muestra los valores del array anterior uƟlizando foreach. 
*/

echo "
1. Crea un array asociaƟvo con los siguientes datos y claves.
nombre: Sara, apellido: Marơnez, edad: 23, ciudad: Barcelona<br>
Muestra los valores del array anterior uƟlizando foreach. 
<br><br>";
$persona = array(
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

foreach ($persona as $value) {
    echo "$value <br>";
}

/*
2.
Muestra los valores del array del ejercicio 1 mostrando la clave y el valor uƟlizando
foreach. 
 
*/

echo " <br>
2. Muestra los valores del array del ejercicio 1 mostrando la clave y el valor uƟlizando
foreach. 
<br><br>";
$persona = array(
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

foreach ($persona as $key => $value) {
    echo "$key : $value <br>";
} 

/*
3.
Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.
*/

echo "<br>
3. Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.
<br><br>";
$persona = array(
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

$persona["edad"] = 24;

foreach ($persona as $key => $value) {
    echo "$key : $value <br>";
}

/*
4.
Borra la ciudad del array y vuelve a mostrar toda su información usando la función
var_dump. 
*/

echo "<br>4. Borra la ciudad del array y vuelve a mostrar toda su información usando la función
var_dump. <br>";

unset($persona["ciudad"]);

var_dump($persona);

/*
5. 
Crear un nuevo array con un valor separado por coma a parƟr de la cadena de texto
$letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su
información en orden descendente
*/

echo "<br><br>5. Crear un nuevo array con un valor separado por coma a parƟr de la cadena de texto".
'$letters'. "= “a,b,c,d,e,f”. Usando la función explode. Muestra su
información en orden descendente<br>";

$letters = "a,b,c,d,e,f";

$array_letter = explode(",", $letters);

rsort($array_letter);

var_dump($array_letter);




/*
6.
Un profesor quiere registrar las notas de su clase en un array asociaƟvo. Las notas son
las siguientes:
Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
Guarda los datos en un array asociaƟvo en el orden previo y muéstralos ordenados de
mayor a menor.
*/
echo "<br><br>6. Un profesor quiere registrar las notas de su clase en un array asociaƟvo. Las notas son
las siguientes:<br>
Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1<br>
Guarda los datos en un array asociaƟvo en el orden previo y muéstralos ordenados de
mayor a menor.<br><br>
";


$notas = array(
    "Miguel" => 5,
    "Luís" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
);

arsort($notas);

foreach ($notas as $key => $value) {
    echo "$key tiene una nota de $value.<br>";
};


/*
7.
Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los
nombres de los alumnos cuya nota esté por encima de la media. 
*/
echo "<br><br>7. Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los
nombres de los alumnos cuya nota esté por encima de la media. 
<br><br>
";
$promedio = 0;
$cont = 0;

foreach ($notas as $key => $value) {
$promedio += $value;
$cont ++;
}

$promedio = $promedio / $cont;

echo "Media de las notas: ".number_format( $promedio, 2 );
echo"<br>Alumnos con nota por encima de la media:<br>";

foreach ($notas as $key => $value) {
if ($value > $promedio) {
echo$key."<br>";}
}

/*
8.
Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del
array. 
*/

echo "<br><br>8.Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del
array.<br><br> ";

$mejorNota = 0;
foreach ($notas as $key => $value) {
    if ($value > $mejorNota ){
        $mejorNota = $value;
        $nombre = $key;
    }

}

echo "La mejor nota es de $nombre con un ".$mejorNota."<br>";
