<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $resultado = ($n1 + $n2) / 2;

        if ($resultado > 6) {
            echo "aprovado";
        } else if ($resultado >= 5) {
            echo "recuperacao";
        } else {
            echo "reprovado";
        }
    ?>
</body>
</html>