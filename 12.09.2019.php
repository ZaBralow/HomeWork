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