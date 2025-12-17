<!DOCTYPE html>
<html>
<body>

<h1>The === Operator</h1>

<p>Compare two variables to check if they are identical.</p>
<p>The identical operator (===) checks the value and the data type, unlike the equal operator (==) that checks only the value.</p>

<?php
$x = 100;  
$y = 100;

if ($x === $y) {
  echo "$x is identical to $y";
}
?>  

</body>
</html>