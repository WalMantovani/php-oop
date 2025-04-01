<?php

class Produto {
    private $nome;
    private $preco;
    private $quantidade;

    
    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    
    public function exibirInformacoes() {
        echo "Produto: " . $this->nome . "\n";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
        echo "Quantidade em Estoque: " . $this->quantidade . "\n";
    }

    
    public function atualizarQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    
    public function calcularValorTotal() {
        return $this->preco * $this->quantidade;
    }
}


$produto = new Produto("Camiseta", 49.90, 10);


$produto->exibirInformacoes();
echo "Valor total do estoque: R$ " . number_format($produto->calcularValorTotal(), 2, ',', '.') . "\n";


$produto->atualizarQuantidade(20);
$produto->exibirInformacoes();
echo "Valor total do estoque após atualização: R$ " . number_format($produto->calcularValorTotal(), 2, ',', '.') . "\n";

?>
