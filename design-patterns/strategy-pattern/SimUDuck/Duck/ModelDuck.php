<?php 
namespace SimUDuck\Duck;

include_once 'AbstractDuck.php';
include_once 'QuackBehaviour/QuackBehaviour.php';
include_once 'FlyBehaviour/FlyBehaviour.php';

class ModelDuck extends AbstractDuck
{
    public function __construct(QuackBehaviour $quackBehaviour, FlyBehaviour $flyBehaviour)
    {
        $this->quackBehaviour = $quackBehaviour;
        $this->flyBehaviour = $flyBehaviour;
    }

    public function display()
    {
        return "I'm a model duck";
    }

    public function setQuackBehaviour(QuackBehaviour $quackBehaviour)
    {
        $this->quackBehaviour = $quackBehaviour;
    }

    public function setFlyBehaviour(FlyBehaviour $flyBehaviour)
    {
        $this->flyBehaviour = $flyBehaviour;
    }
}