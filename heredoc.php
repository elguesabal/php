<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "abc";

        echo <<< TESTE
            vampeta
            42
            $str
        TESTE;
        echo "<br/>";
        echo <<< 'TESTE'
            vampeta
            42
            $str
        TESTE;
    ?>
</body>
</html>