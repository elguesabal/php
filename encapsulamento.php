<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        interface Controlador {
            public function ligar();
            public function desligar();
            public function abrirMenu();
            public function fecharMenu();
            public function maisVolume();
            public function menosVolume();
            public function ligarMudo();
            public function desligarMudo();
            public function play();
            public function pause();
        };
    ?>

    <?php
        class ControleRemoto implements Controlador {
            private $volume;
            private $ligado;
            private $tocando;

            public function __construct() {
                $this->volume = 50;
                $this->ligado = false;
                $this->tocando = false;
            }
            private function getVolume() { return ($this->volume); }
            private function setVolume($v) { $this->volume = $v; }
            private function getLigado() { return ($this->ligado); }
            private function setLigado($l) { $this->ligado = $l; }
            private function getTocando() { return ($this->tocando); }
            private function setTocando($t) { $this->tocando = $t; }

            public function ligar() {
                $this->setLigado(true);
            }
            public function desligar() {
                $this->setLigado(false);
            }
            public function abrirMenu() {
                echo "Ligado: ", ($this->getLigado() ? "sim" : "nao"), "<br/>";
                echo "Volume: ";
                for ($i = 0; $i <= $this->getVolume(); $i += 5) {
                    echo "|";
                }
                echo "<br/>";
                echo "Tocando: ", ($this->getTocando() ? "sim" : "nao"), "<br/>";
            }
            public function fecharMenu() {
                echo "Fechando menu...";
            }
            public function maisVolume() {
                if ($this->getLigado() && $this->getVolume() < 100) {
                    $this->setVolume($this->getVolume() + 5);
                }
            }
            public function menosVolume() {
                if ($this->getLigado() && $this->getVolume() > 0) {
                    $this->setVolume($this->getVolume() - 5);
                }
            }
            public function ligarMudo() {
                if ($this->getLigado() && $this->getVolume() > 0) {
                    $this->setVolume(0);
                }
            }
            public function desligarMudo() {
                if ($this->getLigado() && $this->getVolume() == 0) {
                    $this->setVolume(50);
                }
            }
            public function play() {
                if ($this->getLigado() && $this->getTocando() == false) {
                    $this->setTocando(true);
                }
            }
            public function pause() {
                if ($this->getLigado() && $this->getTocando() == true) {
                    $this->setTocando(false);
                }
            }
        };
    ?>

    <?php
        $c = new ControleRemoto;

        $c->ligar();
        $c->abrirMenu();
    ?>
</body>
</html>