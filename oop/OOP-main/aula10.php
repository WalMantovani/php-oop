<?php

include("aula8.php"); 

class Triangulo extends Shape {

    public $MSG = "Faço parte da Classe Triangulo";
    // Properties
    public $base;
    public $altura;

    // Constructor
    function __construct($b, $a) {
        $this->base = $b;
        $this->altura = $a;
    }

    // Method to calculate the area
    function getCalArea() {
        return 0.5 * ($this->base * $this->altura);
    }
}

$obTria = new Triangulo(2, 2);

echo $obTria->getCalArea();
echo $obTria->MSG;

?>
