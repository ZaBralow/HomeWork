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

// class Clone_1 {
//     function __clone() {
//         print "Прибыл новый воин Империи";
//     }
// }

// $obj = new Clone_1();
// clone $obj;


// echo "<br>";
// echo "<br>";
// echo "<br>";


// class LootBox {
//     const Weight = "123";
//     const Height = "78";
//     const Color = "Red";
// }
// print LootBox::Weight;
// echo "<br>";
// print LootBox::Height;
// echo "<br>";
// print LootBox::Color;
// echo "<br>";
// echo "<br>";
// echo "<br>";

// ?>
 <?php

// abstract class AbstractClass {     //Создание класса

    
//     abstract protected function first();     //Создание абстрактных функций(методов)
//     abstract protected function second();
//     abstract protected function third();
// }

// class Class1 extends AbstractClass {     

//   public function first() {
//       return "test1";
//     }
//     public function second() {
//       return "test2";
//     }
//     public function third() {
//       return "test3";
//     }

// }

// class Class2 extends AbstractClass {

//   public function first() {
//     return "test1";
//   }
//   public function second() {
//     return "test2";
//   }
//   public function third() {
//     return "test3";
//   }

// }

// class Class3 extends AbstractClass {

//   public function first() {
//     return "test1";
//   }
//   public function second() {
//     return "test2";
//   }
//   public function third() {
//     return "test3";
//   }

// }



// $Class1 = new Class1;
// echo $Class1->first();

// echo "<br>";

// $Class2 = new Class2;
// echo $Class2->second();

// echo "<br>";

// $Class3 = new Class3;
// echo $Class3->third();
// ?>

<?php

// echo "<br>";
// echo "<br>";
// echo "<br>";

// class easyClass                                  // Создание класса
// {
// 	private $secret;                               // Создание приватной переменной
	
// 	function getset($inout=0,$str='str')           // Создание функции
// 	{
// 		if ($inout==0) {
// 			return $this->secret=0;                    // Возвращение значение переменной равной 0
// 		}else{
// 			return $this->secret = $inout;      // Ошибка
// 		}
// 	}
// }
// $des = new easyClass;                            // Создание экземпляра класса
// echo $des->getset();                             // Вывод
// echo '</br>';
// echo $des->getset(25);
// echo '</br>';
// echo $des->getset(77);

?>


<?php

abstract class heroes {     
  abstract public function Warrior($height, $weight, $agility, $strong);    
  abstract public function Fighter($height, $weight, $strong);
  abstract public function Wizard($height, $weight, $magic, $magicpower);
}

class characters extends heroes {     

public function Warrior($height, $weight, $agility, $strong) {
    echo "Характеристики Богатыря:";
    echo '<br>';
    echo "Рост - " . $height;
    echo '<br>';
    echo "Вес - " . $weight;
    echo '<br>';
    echo "Ловкость - " . $agility;
    echo '<br>';
    echo "Сила - " . $strong=$height + $weight;
    echo '<br>';
    echo "Умения Богатыря:";
  }
  public function Fighter($height, $weight, $strong) {
    echo "Характеристики Бойца:";
    echo '<br>';
    echo "Рост - " . $height;
    echo '<br>';
    echo "Вес - " . $weight;
    echo '<br>';
    echo "Сила - " . $strong=$height + $weight;
    echo '<br>';
    echo "Умения Бойца:";
  }
  public function Wizard($height, $weight, $magic, $magicpower) {
    echo "Характеристики Колдуна:";
    echo '<br>';
    echo "Рост - " . $height;
    echo '<br>';
    echo "Вес - " . $weight;
    echo '<br>';
    echo "Магическая сила - " . $magicpower=$magic * ($height + $weight);
    echo '<br>';
    echo "Умения Колдуна:";
  }
   public function Walk() {
    echo "Хожу";
  }
   public function Run() {
    echo "Бегу";
  }
   public function Jump() {
    echo "Прыгаю";
  }
   public function Fight_with_sword() {
    echo "Дерусь с мечом";
  }
   public function Fly() {
    echo "Летаю";
  }
   public function Destroy() {
    echo "Уничтожаю";
  }
}


echo '<hr style="background-color: red; border-color: red; height: 10px;">';

$warrior = new characters;
echo $warrior->Warrior(192, 123, 10, 0);
echo '<br>';
echo $warrior->Walk();
echo '<br>';
echo $warrior->Run();
echo '<br>';
echo $warrior->Jump();
echo '<br>';
echo $warrior->Fight_with_sword();
echo '<br>';


echo '<hr style="background-color: red; border-color: red; height: 10px;">';

$fighter = new characters;
echo $fighter->Fighter(187, 101, 0);
echo '<br>';
echo $fighter->Walk();
echo '<br>';
echo $fighter->Run();
echo '<br>';
echo $fighter->Jump();
echo '<br>';


echo '<hr style="background-color: red; border-color: red; height: 10px;">';

$wizard = new characters;
echo $wizard->Wizard(187, 101, 15, 0);
echo '<br>';
echo $wizard->Walk();
echo '<br>';
echo $wizard->Fly();
echo '<br>';
echo $wizard->Destroy();
echo '<br>';


echo '<hr style="background-color: red; border-color: red; height: 10px;">';
?>





</body>
</html>