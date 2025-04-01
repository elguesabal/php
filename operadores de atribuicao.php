<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 1;
        $b = 3;
        $c = $a + $b;

        echo $c, "<br/>";
        $c += 5;
        echo $c, "<br/>";
        $c++;
        echo $c;
    ?>
    <br/><br/>
    <?php
        $a = "vampeta";
        $b = "vampeta";

        echo $a . "<br/>" . $b;
    ?>
    <br/><br/>
    <?php
        $p = $_GET["p"];

        echo "preco: " . $p . "<br/>";
        // $p = $p + ($p * 10 / 100);
        $p += ($p * 10 / 100);
        echo "10%: " . $p;
    ?>
    <br/><br/>
    <?php
        $n = 10;

        echo $n++ . "<br/>";
        echo $n . "<br/>";
        echo ++$n;
    ?>
    <br/><br/>
    <?php
        $n1 = 10;
        $n2 = &$n1;
        $n2 += 5;

        echo $n1 . "<br/>";
        echo $n2;
    ?>
    <br/><br/>
    <?php
        $str = "vampeta";
        $$str = "vampetaaa";

        echo $str . "<br/>";
        echo $$str . "<br/>";
        echo $vampeta;
    ?>
</body>
</html>