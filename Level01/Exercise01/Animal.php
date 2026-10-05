<?php

// Necesitamos crear un tipo de datos que represente a un animal. Los animales tienen un nombre y "hablan". 
// Sin embargo, debemos tener en cuenta que no es lo mismo el sonido de la “habla” de un perro, que el de un 
// gato, por ejemplo. Por tanto, necesitamos crear otros tipos de datos que nos ayuden a programar estos 
// comportamientos entre diferentes animales.

// Crea al menos 2 animales.



abstract class Animal
{
    // Nombre del animal
    private string $name;


    // Constructor
    public function __construct(string $name)
    {
        $this->name = $name;
    }


    // Método para obtener el nombre
    public function getName()
    {
        return $this->name;
    }


    // Método general para hablar
  abstract public function talk();
}









