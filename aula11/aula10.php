<?php

    include_once "conta.class.php";

    $conta1 = new conta();

    $conta1 -> Nome = "Fulano";
    $conta1 -> CPF = "123.456.789-00";
    //$conta1 -> Saldo = 500;

    $conta1 -> ConsultarSaldo();
    echo "<hr>";
    echo $conta1 -> Depositar(250);
    echo "<hr>";
    echo $conta1 -> ConsultarSaldo();
    echo "<hr>";
    echo $conta1 -> Sacar(800);
    echo "<hr>";
    echo $conta1 -> ConsultarSaldo();
    


























?>