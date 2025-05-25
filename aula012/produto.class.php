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

    public function mostrar() {
        echo "Nome: $this->nome<br>";
        echo "Preço: R$ $this->preco<br>";
        echo "Quantidade: $this->quantidade<br><br>";
    }
    
    public function adicionar($qtd) {
        if ($qtd > 0) {
            $this->quantidade += $qtd;
        }
    }

    public function remover($qtd) {
        if ($qtd > 0 && $qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
        }
    }
}

?>
