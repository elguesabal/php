<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $br = "<br/>";
        $str = "vampeta";
        $n = 10;
        $array = array(1, 2, 3);
        $txt = "vampeta 42 abc";
        $vetor = ["vampeta", "42", "abc"];
    ?>

    <?php
        echo "str: $str n: $n";
        echo $br;
        printf("str: %s n: %d", $str, $n);
        echo $br;
    ?>

    <?php
        echo "print_r: ";
        print_r($array);
        echo $br;
        echo "var_dump: ";
        var_dump($array);
        echo $br;
        echo "var_export: ";
        var_export($array);
        echo $br;
    ?>

    <?php
        echo "wordwrap: ", wordwrap($txt, 4, $br, false);
        echo $br;
    ?>

    <?php
        echo "strlen: ", strlen($str);
        echo $br;
    ?>

    <?php
        echo "trim: ", trim("a     $txt  a");
        echo $br;
        echo "ltrim: ", "a", ltrim("    a  $txt   a       "), "a";
        echo $br;
        echo "rtrim: ", "a", rtrim("    a  $txt   a       "), "a";
        echo $br;
    ?>
    
    <?php
        echo "str_word_count: ", str_word_count($txt, 0);
        echo $br;
        echo "str_word_count: ";
        print_r(str_word_count($txt, 1));
        echo $br;
        echo "str_word_count: ";
        print_r(str_word_count($txt, 2));
        echo $br;
    ?>
        
    <?php
        echo "explode: ";
        print_r(explode(" ", $txt));
        echo $br;
    ?>

    <?php
        echo "str_split: ";
        print_r(str_split($txt));
        echo $br;
    ?>
    
    <?php
        echo "implode: ";
        echo implode("#", $vetor);
        echo $br;
        echo "join: ";
        echo join("#", $vetor);
        echo $br;
    ?>

    <?php
        echo "chr(97): ", chr(97);
        echo $br;
        echo 'ord("a")', ord("a");
        echo $br;
    ?>
</body>
</html>