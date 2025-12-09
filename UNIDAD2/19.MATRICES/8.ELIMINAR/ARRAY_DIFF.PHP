<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_dump($newarray);
?>  

</pre>
</body>
</html>
