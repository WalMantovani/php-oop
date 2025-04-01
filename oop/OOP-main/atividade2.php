<?php

class Animal {
    public $nome;
    public $idade;

    
    public function fazerSom() {
        
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        return "Au au!";
    }
}


class Gato extends Animal {
    public function fazerSom() {
        return "Miau!";
    }
}

$cachorro = new Cachorro();
$cachorro->nome = "Rex";
$cachorro->idade = 3;

$gato = new Gato();
$gato->nome = "Mimi";
$gato->idade = 2;


echo "Cachorro: " . $cachorro->nome . ", Idade: " . $cachorro->idade . ", Som: " . $cachorro->fazerSom() . "\n";
echo "Gato: " . $gato->nome . ", Idade: " . $gato->idade . ", Som: " . $gato->fazerSom() . "\n";

?>
