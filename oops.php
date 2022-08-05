<!DOCTYPE >
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;
  

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
function set_color($color) {
    $this->color =$color;
  }
  function get_color() {
    return $this->color;
  }
}

$mango=  new fruit();
$mango->set_name('mango');
$mango->set_color('yellow');
$apple=  new fruit();
$apple->set_name('apple');
$apple->set_color('red');
$banana= new fruit();
$banana->set_name('banana');
$banana->set_color('yellow');
$melon=   new fruit();
$melon->set_name('melon');
$melon->set_color('orange');
echo"name" $mango->set_name('mango');
?>


</body>
</html>