<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $n = 0;

        // while ($n < 5) {
        //     echo "$n<br/>";
        //     $n++;
        // }
    ?>

    <form method="get" action="teste">
        <?php
            $n = 1;
            while ($n < 6) {
                echo "n$n: <input type='number' name='n$n'/><br/>";
                $n++;
            }
        ?>
        <input type="submit">
    </form>

    <?php
        $n = 1;
        while ($n <= 10) {
            if ($n >= 5) {
                break;
            }
            echo "$n</br>";
            $n++;
        }
    ?>
</body>
</html>