<?php

    /*Escreva uma classe PHP 'Rectangle' que tenha propriedades de comprimento e largura. Implemente métodos para calcular a área e o perímetro do retângulo.*/
    class Retangulo{

        private $altura;
        protected $largura;

        
    // Como atribuo valor
        function __set($name, $value): void{
            $this->$name = $value;
    }
        function __get($name): mixed{
            return $this->$name;
    }
    public function getArea(): float|int{
        return $this->altura * $this->largura;
    }
    public function getPerimeter(): float {
        return 2* $this->altura + $this->largura;
    }
}

//Herança
class Ret extends Retangulo {

    function __construct() {

    }
    function CalcularCusto($valor){
        return $valor = parent::getArea();
    }

}
//Objeto
$retangulo01 = new Retangulo();
$retangulo01->altura = 5;
$retangulo01->largura = 2;

echo("Altura: {$retangulo01->altura}\n");
echo("Largura: {$retangulo01->largura}\n");
echo ("Area: {$retangulo01->getArea()}\n");
echo ("Perimetro: {$retangulo01->getPerimeter()}\n");

$retangulo02 = new Ret(); 
$retangulo02 ->altura = 50; 

?>