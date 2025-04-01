<?php

class Imoveis{

        public function __construct($arg01,$arg02,$arg03,$arg04, $arg05){
            $this->tipoImovel = $arg01;
            $this->valor = $arg02;
            $this->regiao = $arg03;
            $this->metragem = $arg04;
            $this->descricao = $arg05;
        }    

        private string $tipoImovel;
        protected float $valor;
        public string $regiao;
        protected float $metragem;
        private string $descricao;

        //magicos
        function __set($name,$value){
            $this->$name = $value;
        }
        function __get($name): mixed{
            return $this->$name;
        }
    }
 
//Herança
class Rural extends Imoveis{

    //sobrecarga
    function __construct(){

    }

    }

    $Imovel02 = new rural();
    $Imovel02->tipoImovel = "sadas";
    echo $Imovel02->tipoImovel;



    $Imovel01 = new Imoveis("Comercial",arg02:1000000.00,arg03:"Zona Norte",arg04:1000,arg05:"Espaço bem localizado em avenida");
    //$Imovel01->regiao = "Zona Norte";
    //$Imovel01->tipoImovel = "Comercial";
    //$Imovel01->descricao = "Espaço bem localizado em avenida";
    //$Imovel01->valor = 1000000.00;
    echo "---------------------- \n";
    echo $Imovel01->regiao . "\n";
    echo $Imovel01->tipoImovel . "\n";
    echo $Imovel01->descricao . "\n";
    echo $Imovel01->valor . "\n";
    echo $Imovel01->metragem . "\n";

?>