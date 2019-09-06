<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

class Clone_1 {
    function __clone() {
        print "Прибыл новый воин Империи";
    }
}

$obj = new Clone_1();
clone $obj;


echo "<br>";
echo "<br>";
echo "<br>";


class LootBox {
    const Weight = "123";
    const Height = "78";
    const Color = "Red";
}
print LootBox::Weight;
echo "<br>";
print LootBox::Height;
echo "<br>";
print LootBox::Color;
echo "<br>";
echo "<br>";
echo "<br>";

?>
<?php

abstract class AbstractClass {

    /* Данный метод должен быть определён в дочернем классе */
    abstract protected function first();
    abstract protected function second();
    abstract protected function third();
}

class Class1 extends AbstractClass {

  public function first() {
      return "test1";
    }
    public function second() {
      return "test2";
    }
    public function third() {
      return "test3";
    }

}

class Class2 extends AbstractClass {

  public function first() {
    return "test1";
  }
  public function second() {
    return "test2";
  }
  public function third() {
    return "test3";
  }

}

class Class3 extends AbstractClass {

  public function first() {
    return "test1";
  }
  public function second() {
    return "test2";
  }
  public function third() {
    return "test3";
  }

}



$Class1 = new Class1;
echo $Class1->first();

echo "<br>";

$Class2 = new Class2;
echo $Class2->second();

echo "<br>";

$Class3 = new Class3;
echo $Class3->third();
?>



</body>
</html>