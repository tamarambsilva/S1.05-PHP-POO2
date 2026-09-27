<?php

// Escribe un programa que defina una clase Shape con un constructor que reciba como parámetros el ancho y alto. Define dos subclases; 
// Triángulo y Rectángulo que hereden de Shape y que calculen respectivamente el área de la figura.

// Importante

// Sí, es el mismo ejercicio que en POO1, pero aquí necesitamos que lo resuelvas aplicando alguno de los conceptos del tema POO2.



// CLASE ABSTRACTA: SHAPE


abstract class Shape
{
    protected $ancho;
    protected $alto;

    // Constructor
    public function __construct($ancho, $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    // Método abstracto
    abstract public function calcularArea();
}



// CLASE TRIÁNGULO


class Triangulo extends Shape
{
    public function calcularArea()
    {
        return ($this->ancho * $this->alto) / 2;
    }
}



// CLASE RECTÁNGULO


class Rectangulo extends Shape
{
    public function calcularArea()
    {
        return $this->ancho * $this->alto;
    }
}



// CREAR LAS FIGURAS


$triangulo = new Triangulo(10, 5);
$rectangulo = new Rectangulo(10, 5);


// MOSTRAR LOS RESULTADOS


echo "Área del triángulo: " . $triangulo->calcularArea() . PHP_EOL;
echo "Área del rectángulo: " . $rectangulo->calcularArea() . PHP_EOL;
