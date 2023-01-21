<?php
namespace SimUDuck\Duck;

abstract class AbstractDuck
{
    protected $flyBehaviour; // implements FlyBehaviour
    protected $quackBehaviour; // implements QuackBehaviour

    public abstract function display();

    public function performFly()
    {
        return $this->flyBehaviour->fly();
    }

    public function performQuack()
    {
        return $this->quackBehaviour->quack();
    }

    public function swim()
    {
        return "All ducks float, even decoys!";
    }
}
