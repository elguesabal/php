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

            public function __construct($nome, $nacionalidade, $idade, $altura, $peso) {
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
        class Luta {
            private $desafiado;
            private $desafiante;
            private $rounds;
            private $aprovada;

            public function __construct($desafiado, $desafiante) {
                $this->setDesafiado($desafiado);
                $this->setDesafiante($desafiante);
                $this->setAprovada($desafiado, $desafiante);
            }

            public function getDesafiado() { return ($this->desafiado); }
            public function setDesafiado($d) { $this->desafiado = $d; }
            public function getDesafiante() { return ($this->desafiante); }
            public function setDesafiante($d) { $this->desafiante = $d; }
            public function getRounds() { return ($this->rounds); }
            public function setRounds($r) { $this->rounds = $r; }
            public function getAprovada() { return ($this->aprovada); }
            public function setAprovada($a) { $this->aprovada = $a; }

            public function marcarLuta() {
                if ($this->desafiado->getNome() == $this->desafiante->getNome()) {
                    echo "Error: desafiado e desafiante sao os mesmos<br/>";
                    $this->setAprovada(false);
                } else if ($this->desafiado->getCategoria() != $this->desafiante->getCategoria()) {
                    echo "Error: desafiado e desafiante estao em categorias diferentes<br/>";
                    $this->setAprovada(false);
                } else {
                    $this->setAprovada(true);
                }
            }
            public function lutar() {
                if (!$this->getAprovada()) {
                    echo "Error: luta nao aprovada";
                    return ;
                }
                $this->getDesafiado()->apresentar();
                echo "<br/>";
                $this->getDesafiante()->apresentar();
                echo "<br/>";
                $vencedor = rand(0, 2);
                switch($vencedor) {
                    case 0:
                        echo "Empate";
                        $this->getDesafiado()->empatarLuta();
                        $this->getDesafiante()->empatarLuta();
                        break;
                    case 1:
                        echo $this->getDesafiado()->getNome(), " ganhou";
                        $this->getDesafiado()->ganharLuta();
                        $this->getDesafiante()->perderLuta();
                        break;
                    case 2:
                        echo $this->getDesafiante()->getNome(), " ganhou";
                        $this->getDesafiado()->perderLuta();
                        $this->getDesafiante()->ganharLuta();
                        break;
                }
            }
        }
    ?>

    <?php
        $l1 = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9);
        $l2 = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8);
        $l3 = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9);
        $l4 = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6);
        $luta = new Luta($l1, $l2);

        $luta->marcarLuta();
        $luta->lutar();
    ?>
</body>
</html>