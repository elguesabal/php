<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        abstract class Pessoa {
            protected $nome;
            protected $idade;
            protected $sexo;

            public function __construct($nome, $idade, $sexo) {
                $this->setNome($nome);
                $this->setIdade($idade);
                $this->setSexo($sexo);
            }

            public function getNome() { return ($this->nome); }
            public function setNome($n) { $this->nome = $n; }
            public function getIdade() { return ($this->idade); }
            public function setIdade($i) { $this->idade = $i; }
            public function getSexo() { return ($this->sexo); }
            public function setSexo($s) { $this->sexo = $s; }

            public final function fazerAniv() {
                $this->setIdade($this->getIdade() + 1);
            }
        };

        class Visitante extends Pessoa {};

        class Aluno extends Pessoa {
            private $matr;
            private $curso;

            public function __construct($nome, $idade, $sexo, $matr, $curso) {
                $this->setNome($nome);
                $this->setIdade($idade);
                $this->setSexo($sexo);
                $this->setMatr($matr);
                $this->setCurso($curso);
            }

            public function getMatr() { return ($this->matr); }
            public function setMatr($m) { $this->matr = $m; }
            public function getCurso() { return ($this->curso); }
            public function setCurso($c) { $this->curso = $c; }

            public function cancelarMtr() {
                echo "Matricula cancelada";
            }
            public function pagarMensalidade() {
                echo "Matricula paga";
            }
        };

        final class Bolsista extends Aluno {
            private $bolsa;

            public function __construct($nome, $idade, $sexo, $matr, $curso, $bolsa) {
                $this->setNome($nome);
                $this->setIdade($idade);
                $this->setSexo($sexo);
                $this->setMatr($matr);
                $this->setCurso($curso);
                $this->setBolsa($bolsa);
            }

            public function getBolsa() { return ($this->bolsa); }
            public function setBolsa($b) { $this->bolsa = $b; }

            public function renovarBolsa() {
                echo "Bolsa renovada";
            }
            public function pagarMensalidade() {
                echo "Pago com desconto";
            }
        };
    ?>

    <?php
        // $c1 = new Pessoa("José", 27, "M");
        $c2 = new Visitante("José", 27, "M");
        $c3 = new Aluno("José", 27, "M", 123, "TI");
        $c4 = new Bolsista("José", 27, "M", 123, "TI", "500");

        $c3->pagarMensalidade();
        echo "<br/>";
        $c4->pagarMensalidade();
        echo "<br/>";
        print_r($c4);
    ?>
</body>
</html>