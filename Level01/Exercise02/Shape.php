<?php

// Escribe un programa que defina una clase Shape con un constructor que reciba como parámetros el ancho y alto. Define dos subclases; 
// Triángulo y Rectángulo que hereden de Shape y que calculen respectivamente el área de la figura.

// Importante

// Sí, es el mismo ejercicio que en POO1, pero aquí necesitamos que lo resuelvas aplicando alguno de los conceptos del tema POO2.



// CLASE ABSTRACTA: SHAPE


abstract class Shape
{
    public $width;
    public $height;

    // Constructor
    public function __construct($width, $height)
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

// CREAR LAS FIGURAS

$triangle = new Triangle(10, 5);
$rectangle= new Rectangle(10, 5);


// MOSTRAR LOS RESULTADOS

echo "Triangle area:" . $triangle->calculateArea() . "<br>";
echo "Rectangle area: " . $rectangle->calculateArea() . "<br>";
