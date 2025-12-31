<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
var_dump($cars);
?>  

</pre>
</body>
</html>
