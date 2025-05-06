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
            protected $tipo;
            private $dono;
            private $saldo;
            private $status;

            public function __construct() {
                $this->status = false;
                $this->saldo = 0;
                echo "Crie uma conta...<br/>";
            }
            public function getNumConta() { return ($this->numConta); }
            public function setNumConta($n) { $this->numConta = $n; }
            public function geTipo() { return ($this->tipo); }
            public function setTipo($t) { $this->tipo = $t; }
            public function getDono() { return ($this->dono); }
            public function setDono($d) { $this->dono = $d; }
            public function getSaldo() { return ($this->saldo); }
            public function setSaldo($s) { $this->saldo = $s; }
            public function getStatus() { return ($this->status); }
            public function setStatus($s) { $this->status = $s; }
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
                if ($this->status == false || $this->saldo != 0) {
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
        };
    ?>

    <?php
        $c = new Conta;

        $c->setDono("jose");
        $c->abrirConta("CP");
        $c->depositar(100);
        echo "Dono: ", $c->getDono(), "<br/>", "Saldo: ", $c->getSaldo(), "<br/>";
    ?>
</body>
</html>