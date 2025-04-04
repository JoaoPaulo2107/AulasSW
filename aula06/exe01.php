<?php
// exercicio1.php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
</head>
<body>
    <h2>Exercício 1</h2>
    <table border="1">
        <?php
        for ($i = 1; $i <= 8; $i++) {
            $cor = ($i % 2 == 0) ? 'rgb(220, 220, 220)' : 'rgb(180, 180, 180)';
            echo "<tr style='background-color: $cor'>";
            for ($j = 1; $j <= 4; $j++) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
