<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

$a = (object) $a;
$b = (object) $b;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
?> 
</pre>

<p>Indexed arrays converts into objects with the index number as property name and the value as property value.</p>

<p>Associative arrays converts into objects with the keys as property names and values as property values.</p>

</body>
</html>