<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $start = $_GET["start"];
        $end = $_GET["end"];
        $increment = $_GET["increment"];

        while ($end >= $start) {
            echo $start, "<br/>";
            $start += $increment;
        }
    ?>
</body>
</html>