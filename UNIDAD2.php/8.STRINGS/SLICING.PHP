<?php

//EXTRAER UNA PARTE
$x = "Hello World!";
echo substr($x, 6, 5);

//EXTRAER DESDE UNA POSICION
$x = "Hello World!";
echo substr($x, 6);

//EXTRAER DESDE EL FINAL
$x = "Hello World!";
echo substr($x, -5, 3);

//EXTRAER HASTA EL FINAL
$x = "Hi, how are you?";
echo substr($x, 5, -3);
?>