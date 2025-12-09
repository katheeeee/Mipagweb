<?php

//comillas dobles y comillas simples
echo "Hello";
echo 'Hello';

//caracteres especiales
$x = "John";
echo "Hello $x";

//comillas simples devuelven tal como esta
$x = "John";
echo 'Hello $x';

//longitud de una cadena
echo strlen("Hello world!");

//Recuento de palabras
echo str_word_count("Hello world!");

//Busca un texto especifico dentro de una cadena
echo strpos("Hello world!", "world");
?>