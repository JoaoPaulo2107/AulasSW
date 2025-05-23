<?php


include_once 'produto.class.php';

// Criando um produto
$produto1 = new Produto("Notebook", 3500.00, 10);

// Exibindo detalhes
$produto1->mostrarDetalhes();

// Fazendo alterações no estoque
$produto1->adicionarEstoque(5);
$produto1->removerEstoque(3);

// Exibindo novamente após as mudanças
echo PHP_EOL . "Após movimentações no estoque:" . PHP_EOL;
$produto1->mostrarDetalhes();

?>






?>