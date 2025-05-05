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
            private $modelo;
            private $cor;
            private $ponta;
            private $tampada;

            public function __construct($m, $c, $p) {
                $this->modelo = $m;
                $this->cor = $c;
                $this->ponta = $p;
                $this->tampar();
            }

            public function getModelo() {
                return ($this->modelo);
            }
            public function setModelo($m) {
                $this->modelo = $m;
            }
            public function getPonta() {
                return ($this->ponta);
            }
            public function setPonta($p) {
                $this->ponta = $p;
            }
            public function getTampada() {
                return ($this->tampada);
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
        // $c1 = new Caneta;

        // $c1->setModelo("bic");
        // $c1->setPonta(0.5);
        // echo "modelo: {$c1->getModelo()}<br/>ponta: {$c1->getPonta()}";
    ?>

    <?php
        // $c2 = new Caneta("bic", "azul", 0.5);

        // print_r($c2);
    ?>
</body>
</html>