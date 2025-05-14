<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = $_GET["nome"] ?? null;
        $sobrenome = $_GET["sobrenome"] ?? null;
        // $name = $_REQUEST["nome"] ?? null;
        // $sobrenome = $_REQUEST["sobrenome"] ?? null;

        echo "nome: ", $name, "<br/>", "sobrenome: ", $sobrenome;
    ?>
</body>
</html>