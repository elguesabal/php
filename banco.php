<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Conta {
            public $numConta;
            protected $tipo; // cc -> corrente   cp -> poupanca
            private $dono;
            private $saldo;
            private $status;

            public function __construct() {
                $this->status = false;
                $this->saldo = 0;
            }
            public function abrirConta($t) {
                if ($t == "CC") {
                    $this->saldo += 50;
                } else if ($t == "CP") {
                    $this->saldo += 150;
                } else {
                    echo "Error";
                    return ;
                }
                $this->tipo = $t;
                $this->status = true;
            }
            public function fecharConta() {
                if ($this->status == false || $this->saldo == 0) {
                    echo "Error";
                    return ;
                }
                $this->status = false;
            }
            public function depositar($v) {
                if ($this->status == false) {
                    echo "Error";
                    return ;
                }
                $this->saldo += $v;
            }
            public function sacar($s) {
                if ($this->status == false || ($this->saldo - $s) < 0) {
                    echo "Error";
                    return ;
                }
                $this->saldo -= $s;
            }
            public function pagarMensal() {
                if ($this->status == false) {
                    echo "Error";
                    return ;
                }
                if ($this->tipo == "CC") {
                    $this->saldo -= 12;
                } else if($this->tipo == "CP") {
                    $this->saldo -= 20;
                } else {
                    echo "Error";
                    return ;
                }
            }


            public function getNum() {}
            public function setNum() {}
            public function geTipo() {}
            public function setTipo() {}
            public function getDono() {}
            public function setDono() {}
            public function getSaldo() {}
            public function setSaldo() {}
            public function getStatus() {}
            public function setStatus() {}
        };

    ?>
</body>
</html>