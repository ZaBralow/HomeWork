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

abstract class Robot {
    abstract protected function build();
    abstract protected function explore();
    abstract protected function dominate();
    
    function functional() {
    $this->build();
    $this->explore();
    $this->dominate();
    }
}
    


    class order_1 extends Robot {
    
    function build() {
    echo "build one camp";
    echo "<br>";
    }
    
    function explore() {
    echo "explore one cave";
    echo "<br>";
    }
    
    function dominate() {
    echo "destroy nest of wolf's";
    echo "<br>";
    }
    
    }
    
    class order_2 extends Robot {
    
    function build() {
    echo "build some traps";
    echo "<br>";
    }
    
    function explore() {
    echo "explore ruined castle";
    echo "<br>";
    }
    
    function dominate() {
    echo "destroy all living object in castle";
    echo "<br>";
    }
    
    }
    
    class order_3 extends Robot {
    
    function build() {
    echo "build four fortifications";
    echo "<br>";
    }
    
    function explore() {
    echo "explore neighborhood of castle";
    echo "<br>";
    }
    
    function dominate() {
    echo "keep out living object to castle";
    echo "<br>";
    }
    
    }
    
    $command_1 = new order_1();
    $command_2 = new order_2();
    $command_3 = new order_3();
    
    $command_1->functional();
    echo "<br>";
    $command_2->functional();
    echo "<br>";
    $command_3->functional();


?>




</body>
</html>