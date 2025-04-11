<?php
$cidades = [
    "São Paulo" => "SP",
    "Rio de Janeiro" => "RJ",
    "Belo Horizonte" => "MG",
    "Porto Alegre" => "RS",
    "Salvador" => "BA"
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades e Estados</title>
</head>
<body>
    <h1>Cidades e Estados</h1>

    <?php
    foreach ($cidades as $cidade => $estado) {
        echo "$cidade - $estado<br>";
    }
    ?>

</body>
</html>
