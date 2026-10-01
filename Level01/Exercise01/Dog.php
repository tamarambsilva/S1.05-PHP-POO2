<?php

class Dog extends Animal
{
    // Sobrescribimos el método hablar()
    public function talk()
    {
        return "Auau";
    }
}