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

        // do {
        //     echo $n, "<br/>";
        //     $n++;
        // } while ($n < 10);
    ?>

    <?php
        function fat($n) {
            if ($n < 0) {
                return ("Error");
            }
            $result = 1;
            do {
                $result *= $n;
                $n--;
            } while ($n != 1);
            return ($result);
        }
        echo fat(5);
    ?>
</body>
</html>