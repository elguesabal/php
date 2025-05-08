<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        abstract class Animal {
            protected $peso;
            protected $idade;
            protected $membros;

            public function __construct($peso, $idade, $membros) {
                $this->setPeso($peso);
                $this->setIdade($idade);
                $this->setMembros($membros);
            }

            public function getPeso() { return ($this->peso); }
            public function setPeso($p) { $this->peso = $p; }
            public function getIdade() { return ($this->idade); }
            public function setIdade($i) { $this->idade = $i; }
            public function getMembros() { return ($this->membros); }
            public function setMembros($m) { $this->membros = $m; }

            abstract public function locomover();
            abstract public function alimentar();
            abstract public function emitirSom();
        };

        class Mamifero extends Animal {
            private $corPelo;

            public function __construct($peso, $idade, $membros, $corPelo) {
                $this->setPeso($peso);
                $this->setIdade($idade);
                $this->setMembros($membros);
                $this->setCorPelo($corPelo);
            }

            public function setCorPelo() { return ($this->corPelo); }
            public function getCorPelo($p) { $this->corPelo = $p; }

            public function locomover() {
                echo "Correndo";
            }
            public function alimentar() {
                echo "Mamando";
            }
            public function emitirSom() {
                echo "Som de mamifero";
            }
        };

        class Reptil extends Animal {
            private $corEscama;

            public function __construct($peso, $idade, $membros, $corEscama) {
                $this->setPeso($peso);
                $this->setIdade($idade);
                $this->setMembros($membros);
                $this->setEscama($corEscama);
            }

            public function setEscama() { return ($this->corEscama); }
            public function getEscama($p) { $this->corEscama = $p; }

            public function locomover() {
                echo "Rastejando";
            }
            public function alimentar() {
                echo "Comendo vegetais";
            }
            public function emitirSom() {
                echo "Som de reptil";
            }
        };

        class Peixe extends Animal {
            private $corEscama;

            public function __construct($peso, $idade, $membros, $corEscama) {
                $this->setPeso($peso);
                $this->setIdade($idade);
                $this->setMembros($membros);
                $this->setCorEscama($corEscama);
            }

            public function getCorEscama() { return ($this->corEscama); }
            public function setCorEscama($p) { $this->corEscama = $p; }

            public function locomover() {
                echo "Nadando";
            }
            public function alimentar() {
                echo "Comendo substancias";
            }
            public function emitirSom() {
                echo "Peixe nao faz som";
            }
            public function soltarBolhar() {
                echo "Soltou uma bolha";
            }
        };

        class Ave extends Animal {
            private $corPena;

            public function __construct($peso, $idade, $membros, $corPena) {
                $this->setPeso($peso);
                $this->setIdade($idade);
                $this->setMembros($membros);
                $this->setCorPena($corPena);
            }

            public function setCorPena() { return ($this->corPena); }
            public function getCorPena($p) { $this->corPena = $p; }

            public function locomover() {
                echo "Voando";
            }
            public function alimentar() {
                echo "Comendo frutas";
            }
            public function emitirSom() {
                echo "Som de ave";
            }
            public function fazerNinho() {
                echo "Constuiu um ninho";
            }
        };

        class Canguru extends Mamifero {
            public function __construct($peso, $idade, $membros, $corPelo) {
                $this->setPeso($peso);
                $this->setIdade($idade);
                $this->setMembros($membros);
                $this->setCorPelo($corPelo);
            }

            public function usarBolsa() {
                echo "Usando bolsa";
            }
            public function locomover() {
                echo "Saltando";
            }
        };

        class Lobo extends Mamifero {
            public function __construct($peso, $idade, $membros, $corPelo) {
                $this->setPeso($peso);
                $this->setIdade($idade);
                $this->setMembros($membros);
                $this->setCorPelo($corPelo);
            }

            public function emitirSom() {
                echo "Auuuuuuuuu";
            }
        };

        class Cachorro extends Lobo {
            public function __construct($peso, $idade, $membros, $corPelo) {
                $this->setPeso($peso);
                $this->setIdade($idade);
                $this->setMembros($membros);
                $this->setCorPelo($corPelo);
            }

            public function emitirSom() {
                echo "Au Au";
            }
        };
    ?>

    <?php
        // $c1 = new Animal("10kg", 5, 2);
        $c2 = new Mamifero("60kg", 20, 4, "laranja");
        $c3 = new Reptil("1kg", 2, 0, "branco");
        $c4 = new Peixe("0.5kg", 1, 2, "azul");
        $c5 = new Ave("2kg", 3, 2, "preto");
        $c6 = new Canguru("30kg", 10, 4, "marrom");
        $c7 = new Lobo("20kg", 5, 4, "preto");
        $c8 = new Cachorro("5kg", 10, 4, "amarelo");

        echo "Mamifero: ", $c2->locomover(), "<br/>";
        echo "Reptil: ", $c3->locomover(), "<br/>";
        echo "Peixe: ", $c4->locomover(), "<br/>";
        echo "Ave: ", $c5->locomover(), "<br/>";
        echo "Camguru: ", $c6->locomover(), "<br/>";
        echo "Lobo: ", $c7->locomover(), "<br/>";
        echo "Cachorro: ", $c8->locomover(), "<br/>";
    ?>
</body>
</html>