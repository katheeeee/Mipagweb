<!DOCTYPE html>
<html>
<body>

<h1>The and Operator</h1>

<p>Write a message if both conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}

if (!($x == 90)) {
    echo "Hello world!";
}
?>  

</body>
</html>