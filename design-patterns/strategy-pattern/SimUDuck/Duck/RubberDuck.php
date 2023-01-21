<?php
namespace SimUDuck\Duck;

include_once 'AbstractDuck.php';
include_once 'QuackBehaviour/Squeak.php';
include_once 'FlyBehaviour/FlyNoWay.php';

class RubberDuck extends AbstractDuck
{
    public function __construct()
    {
        $this->quackBehaviour = new Squeak;
        $this->flyBehaviour = new FlyNoWay;
    }

    public function display()
    {
        return "I'm a rubber duck";
    }
}