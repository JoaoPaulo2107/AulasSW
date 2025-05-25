<?php


include_once 'produto.class.php';

// Criando um produto
$produto1 = new Produto("Notebook", 3500.00, 10);

// Exibindo detalhes
$produto1->mostrar();

// Fazendo alterações no estoque
$produto1->adicionar(5);
$produto1->remover(3);

// Exibindo novamente após as mudanças
echo PHP_EOL . "Após movimentações no estoque:";
$produto1->mostrar();

?>


