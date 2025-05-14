<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "base_convert(42, 10, 16): ", base_convert(42, 10, 16), "<br/>";
        echo "base_convert(42, 10, 2): ", base_convert(42, 10, 2), "<br/>";

        echo "ceil(4.2): ", ceil(4.2), "<br/>";
        echo "floor(4.2): ", floor(4.2), "<br/>";
        echo "round(4.2): ", round(4.2), "<br/>";
        
        echo "intdiv(5, 2): ", intdiv(5, 2), "<br/>";

        echo "min(2, 3, 5, 6, 1, 10): ", min(2, 3, 5, 6, 1, 10), "<br/>";
        echo "max(2, 3, 5, 6, 1, 10): ", max(2, 3, 5, 6, 1, 10), "<br/>";

        echo "pi(): ", pi(), "<br/>";
        echo "M_PI: ", M_PI, "<br/>";

        echo "pow(5, 2): ", pow(5, 2), "<br/>";
        echo "5 ** 2: ", 5 ** 2, "<br/>";

        echo "sqrt(9): ", sqrt(9), "<br/>";
        echo "81 ** (1 / 2): ", 9 ** (1 / 2), "<br/>";
    ?>
</body>
</html>