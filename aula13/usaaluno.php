<?php
    include_once "Aluno.class.php";

    $fulano = new Aluno("Godofredo",10,7);

    $nota1 = $fulano-> getNota1();
    $nota2 = $fulano-> getNota2();

    //echo $nota1;

    $media = $fulano -> calculamedia($nota1,$nota2);


    //echo $fulano -> verificarsituacao($media);

    

    echo "Aluno : " . $fulano -> getNome(). "<br>";
    echo "Média:  " . $media . "<br>";
    echo "Situação: " . $fulano-> verificarsituacao($media) . "<br>";
    echo "<hr>"


    
?>