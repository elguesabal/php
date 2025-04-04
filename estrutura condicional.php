<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idade = 20;

        if ($idade > 17) {
            echo "pode dirigir<br/>";
            echo "pode votar<br/>";
        } else if ($idade > 15) {
            echo "nao pode dirigir<br/>";
            echo "pode votar<br/>";
        } else {
            echo "nao pode dirigir<br/>";
            echo "nao pode votar<br/>";
        }
    ?>

    <?php
        $idade = 20;

        if ($idade > 17) {
            echo "pode dirigir<br/>";
        } else {
            echo "nao pode dirigir<br/>";
        }

        if ($idade > 15) {
            echo "pode votar<br/>";
        } else {
            echo "nao pode votar<br/>";
        }
    ?>

    <?php
        $idade = 20;

        if ($idade > 17) {
            echo "pode dirigir<br/>";
            echo "nao pode votar<br/>";
        } else {
            echo "nao pode dirigir<br/>";
            if ($idade > 15) {
                echo "pode votar<br/>";
            } else {
                echo "nao pode votar<br/>";
            }
        }
    ?>

    <?php
        $idade = 20;

        if ($idade > 17) {
            echo "pode dirigir<br/>";
        }

        if ($idade > 15) {
            echo "pode votar<br/>";
        }

        if ($idade < 18) {
            echo "nao pode dirigir<br/>";
        }

        if ($idade < 16) {
            echo "nao pode votar<br/>";
        }
    ?>
</body>
</html>