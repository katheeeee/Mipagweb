<!DOCTYPE html>
<html>
<body>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

//UNION
print_r($x + $y); // union of $x and $y

//EQUALITY
var_dump($x == $y);

//IDENTITY
var_dump($x === $y);

//INEQUALITY
var_dump($x != $y);

//ALTERNATIVE INEQUALITY
var_dump($x <> $y);

//NON-IDENTITY
var_dump($x !== $y);

?>  

</body>
</html>