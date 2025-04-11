<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET["n"]) == false) {
            echo "Error";
            return ;
        }

        $n = $_GET["n"];
        $i = 1;

        do {
            echo $n, " x ", $i, " = ", ($n * $i), "<br/>";
            $i++;
        } while ($i <= 10);
    ?>
</body>
</html>