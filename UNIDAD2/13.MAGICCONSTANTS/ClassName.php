<?php
namespace myArea;

class Fruits {
  public function myValue(){
    return Fruits::class;
  }
}
?>
<!DOCTYPE html>
<html>
<body>

<?php
$kiwi = new Fruits();
echo $kiwi->myValue();
?>

</body>
</html>
