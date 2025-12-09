<!DOCTYPE html>
<html>
<body>

<?php  
function myfunction() {
  $GLOBALS["x"] = 100;
}

myfunction();

echo $GLOBALS["x"];
echo $x;
?>  

</body>
</html>
