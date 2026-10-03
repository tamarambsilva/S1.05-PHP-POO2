<?php

class Circle extends Shape {

public $radius;

public function __construct(float $radius){

$this->radius = $radius;

}
   
    public function calculateArea() {
        return pi() * ($this->radius ** 2);
    }
}