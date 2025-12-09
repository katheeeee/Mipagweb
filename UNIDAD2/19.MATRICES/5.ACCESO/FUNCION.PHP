<!DOCTYPE html>
<html>
<body>

<?php  
function myFunction() {
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, myFunction);

$myArr[2]();
?>  

</body>
</html>
