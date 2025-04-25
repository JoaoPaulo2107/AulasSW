<?php
include_once 'Pessoa.class.php';

//instancia de um objeto(uma pessoa)
$pessoa1 = new Pessoa;
$pessoa2 = new Pessoa;

//var_dump($$pessoa1)

//Atribuição de valores para o objeto

$pessoa1->Nome = 'Fulano';
$pessoa1->Altura = 1.85;
$pessoa1->Peso = 85;

$pessoa2->Nome = 'Fulana';
$pessoa2->Altura = 1.55;
$pessoa2->Peso = 55;

$pessoa1 ->MostrarDados();
$pessoa2 ->MostrarDados();


?>