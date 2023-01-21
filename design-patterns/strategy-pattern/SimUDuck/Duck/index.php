<?php
namespace SimUDuck\Duck;

include_once 'ModelDuck.php';
include_once 'QuackBehaviour/SilentQuack.php';
include_once 'QuackBehaviour/Squeak.php';
include_once 'QuackBehaviour/NormalQuack.php';
include_once 'FlyBehaviour/FlyNoWay.php';
include_once 'FlyBehaviour/FlyWithWings.php';

$duck = new ModelDuck(new SilentQuack, new FlyNoWay);
echo $duck->display();
echo "\n";
echo $duck->performFly();
echo "\n";
echo $duck->performQuack();
echo "\n";
echo $duck->swim();
echo "\n";
$duck->setQuackBehaviour(new Squeak);
echo $duck->performQuack();
echo "\n";
$duck->setQuackBehaviour(new NormalQuack);
echo $duck->performQuack();
echo "\n";
$duck->setFlyBehaviour(new FlyWithWings);
echo $duck->performFly();
echo "\n";
