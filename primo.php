<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = isset($_GET["n"]) ? $_GET["n"] : 0;
        $result = 0;

        for ($i = 2; $i < $n; $i++) {
            if ($n % $i == 0) {
                $result++;
            }
        }
        if ($result == 0) {
            echo "$n nao e primo";
        } else {
            echo "$n e primo";
        }
    ?>
</body>
</html>