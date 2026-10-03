<?php

// Siguiendo el ejercicio anterior, imagina cómo ampliarías 
// la estructura que has creado para representar un Círculo y 
// su correspondiente cálculo de área.


abstract class Shape
{
    public float $width;
    public float $height;
    public float $radius;

    // Constructor
    public function __construct(float $width, float $height,)
    {
        $this->width = $width;
        $this->height = $height;
        
    }

      // Método abstracto
    abstract public function calculateArea();
}

// "require_once" é para carregar o arquivo "Shape.php e suas classes filhas"
require_once "Shape.php"; 
require_once "Rectangle.php";
require_once "Triangle.php";
require_once "Circle.php";


// Aqui estamos criando os objetos a partir das classes

$triangle = new Triangle(10, 5);
$rectangle = new Rectangle(10, 5);
$circle = new Circle(5);


// Resultado do que ira aparecer na tela

echo "<br>";

echo "Triangle area: " . $triangle->calculateArea() . "<br>";
echo "Rectangle area: " . $rectangle->calculateArea() . "<br>";
echo "Circle area: " . $circle->calculateArea() . "<br>";


// para executar no terminal: php -S localhost:8000