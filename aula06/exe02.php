<?php
// exercicio2.php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
</head>
<body>
    <h2>Exercício 2</h2>
    <form method="post">
        Linhas: <input type="number" name="linhas">
        Colunas: <input type="number" name="colunas">
        <input type="submit" value="Gerar">
    </form>

    <?php
    if ($_POST) {
        $linhas = $_POST['linhas'];
        $colunas = $_POST['colunas'];

        echo "<table border='1'>";
        $i = 1;
        while ($i <= $linhas) {
            echo "<tr>";
            $j = 1;
            while ($j <= $colunas) {
                echo "<td style='background-color: rgb(240,240,240)'>$i,$j</td>";
                $j++;
            }
            echo "</tr>";
            $i++;
        }
        echo "</table>";
    }
    ?>
</body>
</html>
