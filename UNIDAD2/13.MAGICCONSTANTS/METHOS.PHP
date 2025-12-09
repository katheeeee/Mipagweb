<!DOCTYPE html>
<html>
<body>

<?php
class Fruits {
  public function myValue(){
    return __METHOD__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
?>
 
</body>
</html>