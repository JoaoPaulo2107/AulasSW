<?php
$numero = $_POST["numero"];

if ($numero <= 1) {
    echo "$numero não é primo.";
} else {
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            echo "$numero não é primo.";
            return; 
        }
    }
    echo "$numero é primo!";
}
?>
