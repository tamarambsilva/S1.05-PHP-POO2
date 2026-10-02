<?php

class Triangle extends Shape
{
    public function calculateArea()
    {
        return ($this->width * $this->height) / 2;
    }
}