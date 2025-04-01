<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            color: <?php echo isset($_GET["cor"]) ? $_GET["cor"] : "black" ?>;
        }
    </style>
</head>
<body>
    <p>
        <?php
            echo isset($_GET["v"]) ? $_GET["v"] : "";
        ?>
    </p>
</body>
</html>