<?php

class Livro {
    
    private $titulo;           
    private $autor;            
    private $ano_publicacao;   
    private $preco;            

    
    public function __construct($titulo, $autor, $ano_publicacao, $preco) {
        
        $this->titulo = $titulo;               
        $this->autor = $autor;                 
        $this->ano_publicacao = $ano_publicacao; 
        $this->preco = $preco;                 
    }

    
    public function getTitulo() {
        return $this->titulo; 
    }

    public function getAutor() {
        return $this->autor; 
    }

    public function getAnoPublicacao() {
        return $this->ano_publicacao; 
    }

    public function getPreco() {
        return $this->preco; 
    }

    
    public function setPreco($preco) {
        $this->preco = $preco; 
    }
}


$livro1 = new Livro("Código Limpo", "Robert C. Martin", 2009, 89.90); 

$livro2 = new Livro("Entendendo Algoritmos", "Aditya Y. Bhargava", 2017, 69.90); 


echo "Livro 1:\n"; 
echo "Título: " . $livro1->getTitulo() . "\n"; 
echo "Autor: " . $livro1->getAutor() . "\n"; 
echo "Ano de Publicação: " . $livro1->getAnoPublicacao() . "\n";
echo "Preço: R$ " . number_format($livro1->getPreco(), 2, ',', '.') . "\n"; 
echo "\n"; 
echo "Livro 2:\n"; 
echo "Título: " . $livro2->getTitulo() . "\n"; 
echo "Autor: " . $livro2->getAutor() . "\n";
echo "Ano de Publicação: " . $livro2->getAnoPublicacao() . "\n"; 
echo "Preço: R$ " . number_format($livro2->getPreco(), 2, ',', '.') . "\n"; 


$livro1->setPreco(78.90); 


echo "\nNovo preço do Livro 1: R$ " . number_format($livro1->getPreco(), 2, ',', '.') . "\n"; 

?>