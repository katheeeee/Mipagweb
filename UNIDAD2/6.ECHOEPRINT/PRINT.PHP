<?php
//DECLARACION DE IMPRECION
print "Hello";
//same as:
print("Hello");

//MOSTRAR TEXTO
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

//VARIABLES DE VISUALIZACION
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";

//COMILLAS SIMPLES
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print '<h2>' . $txt1 . '</h2>';
print '<p>Study PHP at ' . $txt2 . '</p>';
?>