<?php
// Necesitamos crear un tipo de datos que represente a un animal. Los animales tienen un nombre y "hablan". 
// Sin embargo, debemos tener en cuenta que no es lo mismo el sonido de la “habla” de un perro, que el de un 
// gato, por ejemplo. Por tanto, necesitamos crear otros tipos de datos que nos ayuden a programar estos 
// comportamientos entre diferentes animales.

// Crea al menos 2 animales.


require_once "Animal.php"; // "require_once" é para carregar o arquivo "Vehicle.php"
require_once "Dog.php";
require_once "Cat.php";



$dog = new Dog("Dog1");
$cat = new Cat("Cat1");



echo "Name: " . $dog->getName() . "<br>";
echo "Songs: " . $dog->talk() . "<br>";

echo "<br>";

echo "Name: " . $cat->getName() . "<br>";
echo "Songs: " . $cat->talk() . "<br>";
