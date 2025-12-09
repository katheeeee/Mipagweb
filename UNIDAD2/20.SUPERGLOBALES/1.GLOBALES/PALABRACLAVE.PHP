<!DOCTYPE html>
<html>
<body>

<?php  
$x = 75;
  
function myfunction() {
  global $x;
  echo $x;
}

myfunction()
?>  

</body>
</html>
