<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class lutador {
            private $nome;
            private $nacionalidade;
            private $idade;
            private $altura;
            private $peso;
            private $categoria;
            private $vitorias;
            private $derrotas;
            private $empates;

            public function __construt($nome, $nacionalidade, $idade, $altura, $peso) {
                $this->nome = $nome;
                $this->nacionalidade = $nacionalidade;
                $this->idade = $idade;
                $this->altura = $altura;
                $this->setPeso($peso);
                $this->vitorias = 0;
                $this->derrotas = 0;
                $this->empates = 0;
            }

            public function getNome() { return ($this->nome); }
            public function setNome($n) { $this->nome = $n; }
            public function getNacionalidade() { return ($this->nacionalidade); }
            public function setNacionalidade($n) { $this->nacionalidade = $n; }
            public function getIdade() { return ($this->idade); }
            public function setIdade($i) { $this->idade = $i; }
            public function getAltura() { return ($this->altura); }
            public function setAltura($a) { $this->altura = $a; }
            public function getPeso() { return ($this->peso); }
            public function setPeso($p) { $this->peso = $p; $this->setCategoria($p); }
            public function getCategoria() { return ($this->categoria); }
            public function setCategoria($peso) {
                if ($peso < 52.2) {
                    $this->categoria = "Invalido";
                } else if ($peso <= 70.3) {
                    $this->categoria = "Leve";
                } else if ($peso <= 83.9) {
                    $this->categoria = "Medio";
                } else if ($peso <= 120.2) {
                    $this->categoria = "Pesado";
                } else {
                    $this->categoria = "Invalido";
                }
            }
            public function getVitorias() { return ($this->vitorias); }
            public function setVitorias($v) { $this->vitorias = $v; }
            public function getDerrotas() { return ($this->derrotas); }
            public function setDerrotas($d) { $this->derrotas = $d; }
            public function getEmpates() { return ($this->empates); }
            public function setEmpates($e) { $this->empates = $e; }

            public function apresentar() {
                echo "Lutador: ", $this->getNome(), "<br/>";
                echo "Origem: ", $this->getNacionalidade(), "<br/>";
                echo "Idade: ", $this->getIdade(), "<br/>";
                echo "Altura: ", $this->getAltura(), "<br/>";
                echo "Peso: ", $this->getPeso(), "<br/>";
                echo "Vitorias: ", $this->getVitorias(), "<br/>";
                echo "Derrotas: ", $this->getDerrotas(), "<br/>";
                echo "Empates: ", $this->getEmpates(), "<br/>";
            }
            // public function status() {}
            public function ganharLuta() {
                $this->setVitorias($this->getVitorias() + 1);
            }
            public function perderLuta() {
                $this->setDerrotas($this->getDerrotas() + 1);
            }
            public function empatarLuta() {
                $this->setEmpates($this->getEmpates() + 1);
            }
        };
    ?>

    <?php
        $l1 = $l2 = $l3 = $l4 = null;

        $l1 = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9);
        $l2 = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8);
        $l3 = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9);
        $l4 = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6);
    ?>
</body>
</html>