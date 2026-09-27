<?php

// Siguiendo el ejercicio anterior, imagina cómo ampliarías 
// la estructura que has creado para representar un Círculo y 
// su correspondiente cálculo de área.



// CLASE ABSTRACTA: SHAPE

abstract class Shape
{
    // Método abstracto
    abstract public function calcularArea();
}



// CLASE TRIÁNGULO


class Triangulo extends Shape
{
    private $ancho;
    private $alto;

    public function __construct($ancho, $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    public function calcularArea()
    {
        return ($this->ancho * $this->alto) / 2;
    }
}

// CLASE RECTÁNGULO


class Rectangulo extends Shape
{
    private $ancho;
    private $alto;

    public function __construct($ancho, $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    public function calcularArea()
    {
        return $this->ancho * $this->alto;
    }
}


// ==========================================
// CLASE CÍRCULO
// ==========================================

class Circulo extends Shape
{
    private $radio;

    public function __construct($radio)
    {
        $this->radio = $radio;
    }

    public function calcularArea()
    {
        return pi() * ($this->radio ** 2);
    }
}

// CREAR LAS FIGURAS

$triangulo = new Triangulo(10, 5);
$rectangulo = new Rectangulo(10, 5);
$circulo = new Circulo(5);


// MOSTRAR LOS RESULTADOS

echo "Área del triángulo: " . $triangulo->calcularArea() . PHP_EOL;
echo "Área del rectángulo: " . $rectangulo->calcularArea() . PHP_EOL;
echo "Área del círculo: " . $circulo->calcularArea() . PHP_EOL;
