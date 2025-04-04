<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function func($n) {
            if ($n < 0) {
                return "error";
            }
            return $n;
        }

        $resultado = func(-10);
        if ($resultado == "error") {

        } else {
            echo $resultado;
        }












        function funcao($numero) {

        }

        funcao(10);










    ?>
</body>
</html>