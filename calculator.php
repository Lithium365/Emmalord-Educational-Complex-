<?php

class Rectangle {
    // Properties
    private $length;
    private $width;

    // Constructor
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    // Methods to calculate area and perimeter
    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }

    // Getter and setter methods for length
    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    // Getter and setter methods for width
    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }
}

// Example of using the Rectangle class
$rectangle = new Rectangle(5, 8);

// Get and display properties
echo "Length: " . $rectangle->getLength() . "<br>";
echo "Width: " . $rectangle->getWidth() . "<br>";

// Calculate and display area and perimeter
echo "Area: " . $rectangle->calculateArea() . "<br>";
echo "Perimeter: " . $rectangle->calculatePerimeter() . "<br>";

// Modify length and width using setter methods
$rectangle->setLength(10);
$rectangle->setWidth(6);

// Recalculate and display area and perimeter
echo "Area: " . $rectangle->calculateArea() . "<br>";
echo "Perimeter: " . $rectangle->calculatePerimeter() . "<br>";

?>
