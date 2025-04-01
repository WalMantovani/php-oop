<?php

include("aula8.php");

class Rectangle extends Shape {

    //Metodo
    function getCalArea(){
        return $this->base* $this->altura;
    }
    
}

$obRect = new Rectangle();
$obRect->base = 2;
$obRect->altura = 10;
 echo $obRect->getCalArea();

