<?php
class Calculator {
    private $num1;
    private $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function pertambahan() {
        return $this->num1 + $this->num2;
    }

    public function pengurangan() {
        return $this->num1 - $this->num2;
    }

    public function pembagian() {
        if ($this->num2 != 0) {
            return $this->num1 / $this->num2;
        } else {
            return "Error: Division by zero!";
        }
    }

    public function perkalian() {
        return $this->num1 * $this->num2;
    }
}

// Create object and display each method
$calculator = new Calculator(10, 5);
echo "Pertambahan: " . $calculator->pertambahan() . "<br>";
echo "Pengurangan: " . $calculator->pengurangan() . "<br>";
echo "Pembagian: " . $calculator->pembagian() . "<br>";
echo "Perkalian: " . $calculator->perkalian() . "<br>";
?>