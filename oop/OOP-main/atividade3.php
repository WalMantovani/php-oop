<?php

class Funcionario {
    public $nome;           
    protected $salario;     
    private $senha;         

    
    public function __construct($nome, $salario, $senha) {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->senha = $senha;
    }

    
    public function exibirInformacoes() {
        echo "Nome: " . $this->nome . "\n";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "\n";
    }

    
    public function getSalario() {
        return $this->salario;
    }

    
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    
    public function aumentarSalario($percentual) {
        $this->salario += $this->salario * ($percentual / 100);
    }
}

$funcionario = new Funcionario("Carlos", 2000.00, "1234");


$funcionario->exibirInformacoes();

$funcionario->aumentarSalario(10);
$funcionario->exibirInformacoes(); 

?>
