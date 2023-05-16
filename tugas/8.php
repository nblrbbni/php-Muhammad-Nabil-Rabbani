<?php

class Circle {
    public $radius;
    
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

$circle1 = new Circle();
$circle1->radius = 10;

echo $circle1->calculateArea();