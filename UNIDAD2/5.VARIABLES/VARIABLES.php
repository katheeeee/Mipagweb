<?php

//variables de salida
$txt = "W3Schools.com";
echo "I love $txt!";

//otra froma
$txt = "W3Schools.com";
echo "I love " . $txt . "!";

//suma de dos variables
$x = 5;
$y = 4;
echo $x + $y;

//Tipos de variables
$x = 5;      // $x is an integer
$y = "John"; // $y is a string
echo $x;
echo $y;

//Obtener el tipo con la funcion var_dump()
$x = 5;
var_dump($x);

var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

//una cadena a una variable
$x = "John";
echo $x;

//asignar el mismo valor a múltiples variables
$x = $y = $z = "Fruit";
?>
