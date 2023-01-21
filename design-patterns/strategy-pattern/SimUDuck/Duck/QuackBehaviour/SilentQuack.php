<?php
namespace SimUDuck\Duck;

include_once 'QuackBehaviour.php';

class SilentQuack implements QuackBehaviour
{
    public function quack()
    {
        return '<< Silent >>';
    }
}