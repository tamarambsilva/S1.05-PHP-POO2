<?php

// Necesitamos crear un tipo de datos que represente a un animal. Los animales tienen un nombre y "hablan". 
// Sin embargo, debemos tener en cuenta que no es lo mismo el sonido de la “habla” de un perro, que el de un 
// gato, por ejemplo. Por tanto, necesitamos crear otros tipos de datos que nos ayuden a programar estos 
// comportamientos entre diferentes animales.

// Crea al menos 2 animales.



class Animal
{
    // Nombre del animal
    private $nombre;


    // Constructor
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }


    // Método para obtener el nombre
    public function getNombre()
    {
        return $this->nombre;
    }


    // Método general para hablar
    public function hablar()
    {
        return "El animal hace un sonido.";
    }
}


class Perro extends Animal
{
    // Sobrescribimos el método hablar()
    public function hablar()
    {
        return "Auau";
    }
}



class Gato extends Animal
{
    // Sobrescribimos el método hablar()
    public function hablar()
    {
        return "Miau";
    }
}


$perro = new Perro("Perro1");
$gato = new Gato("Gato1");



echo "Nombre: " . $perro->getNombre() . PHP_EOL;
echo "Sonido: " . $perro->hablar() . PHP_EOL;

echo PHP_EOL;

echo "Nombre: " . $gato->getNombre() . PHP_EOL;
echo "Sonido: " . $gato->hablar() . PHP_EOL;
