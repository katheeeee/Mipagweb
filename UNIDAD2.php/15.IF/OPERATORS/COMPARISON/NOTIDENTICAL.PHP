<!DOCTYPE html>
<html>
<body>

<h1>The !== Operator</h1>

<p>Compare two variables and write a message if they are NOT identical.</p>

<p>The not identical operator (!==) checks the value and the data type, unlike the not equal operator (!=) that checks only the value.</p>

<?php
$x = 100;  
$y = 50;

if ($x !== $y) {
  echo "$x is not identical to $y";
}
?>  

</body>
</html>