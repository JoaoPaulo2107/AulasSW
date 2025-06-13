<?php
include_once "Livro.class.php";

$livro1 = new Livro("A Tormenta de Espadas", "George R. Martin");

echo $livro1->exibirStatus() . "<br>";

$livro1->emprestar();
echo $livro1->exibirStatus() . "<br>";

$livro1->devolver();
echo $livro1->exibirStatus() . "<br>";

$livro1->emprestar();
echo $livro1->exibirStatus() . "<br>";

$livro1->devolver();
echo $livro1->exibirStatus() . "<br>";


?>