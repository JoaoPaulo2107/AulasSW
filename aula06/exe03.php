<?php
// exercicio3.php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>
<body>
    <h2>Exercício 3</h2>
    <?php
    $produtos = [
        ["nome" => "Notebook", "preco" => 3500, "categoria" => "Eletrônicos"],
        ["nome" => "Camiseta", "preco" => 45, "categoria" => "Vestuário"],
        ["nome" => "Furadeira", "preco" => 220, "categoria" => "Ferramentas"]
    ];

    $cores = [
        "Eletrônicos" => "rgb(200, 255, 200)",
        "Vestuário"   => "rgb(255, 200, 200)",
        "Ferramentas" => "rgb(255, 255, 200)"
    ];

    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Preço</th><th>Categoria</th></tr>";

    foreach ($produtos as $p) {
        $cor = $cores[$p['categoria']] ?? 'rgb(255,255,255)';
        echo "<tr style='background-color: $cor'>";
        echo "<td>{$p['nome']}</td>";
        echo "<td>{$p['preco']}</td>";
        echo "<td>{$p['categoria']}</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
