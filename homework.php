<?php

class MyCalculator {
    private $value1;
    private $value2;

    public function __construct($value1, $value2) {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function add() {
        return $this->value1 + $this->value2;
    }

    public function subtract() {
        return $this->value1 - $this->value2;
    }
    public function multiply() {
        return $this->value1 * $this->value2;
    }
    public function divide() {
        // Check if the second value is not zero to avoid division by zero
        if ($this->value2 != 0) {
            return $this->value1 / $this->value2;
        } else {
            return "Cannot divide by zero";
        }
    }
}
// Example Usage
$mycalc = new MyCalculator(12, 6);
// Display results
echo "Addition: " . $mycalc->add() . "<br>";
echo "Subtraction: " . $mycalc->subtract() . "<br>";
echo "Multiplication: " . $mycalc->multiply() . "<br>";
echo "Division: " . $mycalc->divide() . "<br>";
?>
