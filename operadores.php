<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores</title>
</head>
<body>
    <?php
        $n1 = 10;
        $n2 = 20;
        $n3 = $n1 + $n2;
        echo $n3, "<br/>";
        echo "vampeta: ", ($n1 + $n2);
    ?>
    <br/><br/>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $n3 = $n1 + $n2;
        echo $n3, "<br/>";
        echo "vampeta: ", ($n1 + $n2);
    ?>
    <br/><br/>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo abs($n1);
        echo "<br/>";
        echo abs($n2);
    ?>
    <br/><br/>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo pow($n1, $n2);
    ?>
    <br/><br/>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo sqrt($n1);
    ?>
    <br/><br/>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo round($n1);
    ?>
    <br/><br/>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo intval($n1);
    ?>
    <br/><br/>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo number_format($n1, 2, ",", ".");
    ?>
</body>
</html>