<?php
    $numero=$_POST["numero"];

   $i = 1;

    while ($i <= 10) {
        echo "$numero * $i = " . ($numero * $i) . "<br> ";

        $i++;
   }

?>