<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "\$_GET: <br/>";
        var_dump($_GET);
        echo "<br/><br/><br/>";

        echo "\$_POST: <br/>";
        var_dump($_POST);
        echo "<br/><br/><br/>";

        echo "\$_REQUEST: <br/>";
        var_dump($_REQUEST);
        echo "<br/><br/><br/>";

        setcookie("teste", "42", time() + 10);
        echo "\$_COOKIE: <br/>";
        var_dump($_COOKIE);
        echo "<br/><br/><br/>";

        session_start();
        $_SESSION["teste"] = "42";
        var_dump($_SESSION);
        echo "<br/><br/><br/>";

        echo "\$_ENV: <br/>";
        // var_dump($_ENV);
        var_dump(getenv());
        echo "<br/><br/><br/>";

        echo "\$_SERVER: <br/>";
        var_dump($_SERVER);
        echo "<br/><br/><br/>";

        echo "\$GLOBALS: <br/>";
        var_dump($GLOBALS);
    ?>
</body>
</html>