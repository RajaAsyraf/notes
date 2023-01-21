<?php
namespace SimUDuck\Duck;

include_once 'FlyBehaviour.php';

class FlyWithWings implements FlyBehaviour
{
    public function fly()
    {
        return "I'm flying";
    }
}