<!DOCTYPE html>
<html>
<body>

<?php  
function myFunction() {
  echo "I come from a function!";
}

$myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction);

$myArr["message"]();
?>  

</body>
</html>
