<?php
//MAYUSCULAS
$x = "Hello World!";
echo strtoupper($x);

//minusculas
$x = "Hello World!";
echo strtolower($x);

//REEMPLAZAR
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

//INVERTIR CADENA
$x = "Hello World!";
echo strrev($x);

//ELIMINAR ESAPACIO EN BLANCO
$x = " Hello World! ";
echo trim($x);

//CADENA A MATRIZ
$x = "Hello World!";
$y = explode(" ", $x);
//Use the print_r() function to display the result:
print_r($y);
/*
Result:
Array ( [0] => Hello [1] => World! )
*/
?>