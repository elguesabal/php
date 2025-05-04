<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Caneta {
            var $modelo;
            var $cor;
            var $ponta;
            var $carga;
            var $tampada;

            function rabiscar() {
                if ($this->tampada) {
                    echo "Erro";
                } else {
                    echo "Rabiscando...";
                }
            }

            function tampar() {
                $this->tampada = true;
            }

            function destampar() {
                $this->tampada = false;
            }
        };
    ?>

    <?php
        $c1 = new Caneta;
        $c1->cor = "azul";
        $c1->ponta = 0.5;
        $c1->tampada = true;
    ?>
    <?php
        $c2 = new Caneta;
        $c2->cor = "verde";
        $c2->carga = 50;
    ?>

    <?php
        // var_dump($c1);
        // var_dump($c2);
    ?>

    <?php
        // $c1->destampar();
        // $c1->rabiscar();
    ?>

    <?php
        // $c2->tampar();
        // $c2->rabiscar();
    ?>
</body>
</html>