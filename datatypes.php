<!DOCTYPE html>
<html>
<body>

<?php 
$a = "Hello world!";
$b = 'Hello world!';

echo $a;//string datatype
echo "<br>"; 
echo $b;
$x = 5985;//integer
echo "<br>";
var_dump($x);
echo "<br>";
$y = 10.365;//float
echo"<br>";
var_dump($y);
echo "<br>";
$cars = array("Volvo","BMW","Toyota");//array
var_dump($cars);
echo "<br>";
class Car {
    public $color;
    public $model;//object datatype
    public function __construct($color, $model) 
    {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo "<br>";
  echo $myCar -> message();
  echo "<br>";
  $m = "Hello world!";
$m = null;
var_dump($m);

?>

</body>
</html>