<?php

$n1 = $_POST["num1"];
$n2 = $_POST["num2"];
$operacao = $_POST["operacao"];
$total = 0;

    if ($operacao == "soma"){
    $total = $n1 + $n2;
    }elseif ($operacao == "subtracao") {
        $total = $n1 - $n2;
    }elseif ($operacao == "multiplicacao") {
        $total = $n1 * $n2;
    }elseif ($operacao == "divisao") {
        $total = $n1/$n2;
    }


    echo "<h2>Resultado: $total</h2>";

 
?>
   
