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
            public $modelo;
            public $cor;
            private $ponta;
            protected $carga;
            protected $tampada;

            public function rabiscar() {
                if ($this->tampada) {
                    echo "Erro";
                } else {
                    echo "Rabiscando...";
                }
            }

            public function tampar() {
                $this->tampada = true;
            }

            public function destampar() {
                $this->tampada = false;
            }
        };
    ?>

    <?php
        $c1 = new Caneta;
        $c1->modelo = "bic cristal";
        $c1->cor = "azul";

        var_dump($c1);
        echo "<br/>";
        $c1->rabiscar();
    ?>
</body>
</html>