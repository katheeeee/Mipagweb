<!DOCTYPE html>
<html>
<body>

<?php  
$x = 0;
 
while($x < 10) {
  $x++;
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
} 
?>  

</body>
</html>
