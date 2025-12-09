<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  
$y = "100";

//EQUALS
var_dump($x == $y); // returns true because values are equal

//IDENTICAL
var_dump($x === $y); // returns false because types are not equal

//NOT EQUALS
var_dump($x != $y); // returns false because values are equal

//NOT IDENTICAL
var_dump($x !== $y); // returns true because types are not equal

//GREATER THAN
var_dump($x < $y); // returns false because values are equal

//LESSER THAN
var_dump($x > $y); // returns false because values are equal

//GREATER THAN OR EQUALS
var_dump($x >= $y); // returns true because values are equal

//LESSER THAN OR EQUALS
var_dump($x <= $y); // returns true because values are equal

//SPACESHIP
var_dump($x <=> $y); // returns 0 because values are equal
?>  

</body>
</html>