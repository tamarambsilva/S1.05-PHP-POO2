<?php

class Cat extends Animal
{
    // Sobrescribimos el método hablar()
    public function talk()
    {
        return "Miau";
    }
}