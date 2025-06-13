<?php
include_once "Funcionario.class.php";

$func = new Funcionario("João Silva", 2500);

echo $func->exibirInformacoes() . "<br>";

$func->aumentarSalario(20);

echo $func->exibirInformacoes() . "<br>";
?>
