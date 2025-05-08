<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Pessoa {
            private $nome;
            private $idade;
            private $sexo;

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

            public function fazerAniv() {
                $this->setIdade($this->getIdade() + 1);
            }
        };

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
        };

        class Professor extends Pessoa {
            private $especialidade;
            private $salario;

            public function __construct($nome, $idade, $sexo, $especialidade, $salario) {
                $this->setNome($nome);
                $this->setIdade($idade);
                $this->setSexo($sexo);
                $this->setEspecialidade($especialidade);
                $this->setSalario($salario);
            }

            public function getEspecialidade() { return ($this->especialidade); }
            public function setEspecialidade($e) { $this->especialidade = $e; }
            public function getSalario() { return ($this->salario); }
            public function setSalario($s) { $this->salario = $s; }

            public function ReceberAum($aumento) {
                $this->setSalario($this->getSalario() + $aumento);
            }
        };

        class Funcionario extends Pessoa {
            private $setor;
            private $trabalhando;

            public function __construct($nome, $idade, $sexo, $setor, $trabalhando) {
                $this->setNome($nome);
                $this->setIdade($idade);
                $this->setSexo($sexo);
                $this->setSetor($setor);
                $this->setTrabalhando($trabalhando);
            }

            public function getSetor() { return ($this->setor); }
            public function setSetor($s) { $this->setor = $s; }
            public function getTrabalhando() { return ($this->trabalhando); }
            public function setTrabalhando($t) { $this->trabalhando = $t; }

            public function mudarTrabalho() {
                $this->setTrabalhando(!$this->getTrabalhando());
            }
        };
    ?>

    <?php
        $c1 = new Pessoa("José", 27, "M");
        $c2 = new Aluno("Pedro", 30, "M", 123, "TI");
        $c3 = new Professor("Maria", 35, "H", "matematica", 5000);
        $c4 = new Funcionario("Fabiana", 25, "H", "Informatica", true);

        $c3->ReceberAum(500);
        print_r($c3);
    ?>
</body>
</html>