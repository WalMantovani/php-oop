<?php

    include_once("aula5.php");

    class CirFilho extends circle{

        protected $radius =5;

        function __construct(){}

        //Sobrecarga
        public function getCircumference() {
            return 2 * pi() * $this->radius;
        }

    }

    $obj = new Circle(20);
    $obj->getArea();
    
    $circle = new CirFilho();
    
    echo "perimetro {$circle->getCircumference()} \n";
    echo $circle->getArea();


?>