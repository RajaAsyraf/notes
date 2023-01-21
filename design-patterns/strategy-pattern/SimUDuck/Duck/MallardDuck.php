<?php
namespace SimUDuck\Duck;

include_once 'AbstractDuck.php';
include_once 'QuackBehaviour/NormalQuack.php';
include_once 'FlyBehaviour/FlyWithWings.php';

class MallardDuck extends AbstractDuck
{
    public function __construct()
    {
        $this->quackBehaviour = new NormalQuack;
        $this->flyBehaviour = new FlyWithWings;
    }

    public function display()
    {
        return "I'm a real Mallard duck";
    }
}