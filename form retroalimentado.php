<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = $_GET["n1"] ?? null;
        $n2 = $_GET["n2"] ?? null;
    ?>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        n1: <input type="number" name="n1" value="<?= $n1 ?>"><br/>
        n2: <input type="number" name="n2" value="<?= $n2 ?>"><br/>
        <input type="submit">
    </form>

    <?php
        if (!$n1 || !$n2) {
            return ;
        }

        echo "<br/>";
        echo "soma: ", ($n1 + $n2);
    ?>
</body>
</html>