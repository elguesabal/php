<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variaveis</title>
</head>
<body>
   <?php
        $s = "vampeta: ";
        $n = 42;

        echo $s, $n, "<br/>";
        $string = $s . $n;
        echo "$string<br/>";
        echo '$string<br/>';
        $n = 0x1A;
        echo "$n<br/>";
        $n = 0b101010;
        echo "$n<br/>";
        $n = 010;
        echo "$n<br/>";
        $n = 3e2;
        echo "$n<br/>";
        $n = (int)"42";
        echo "$n<br/>";
   ?> 
</body>
</html>