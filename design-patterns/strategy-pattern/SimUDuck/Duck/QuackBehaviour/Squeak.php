<?php
namespace SimUDuck\Duck;

include_once 'QuackBehaviour.php';

class Squeak implements QuackBehaviour
{
    public function quack()
    {
        return 'Squeak';
    }
}