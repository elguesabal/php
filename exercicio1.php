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

			public function fazerAniver() {}
		};

		class Livro implements Publicacao {
			private $titulo;
			private $autor;
			private $totPaginas;
			private $pagAtual;
			private $aberto;
			private $leitor;

			public function __construct($titulo, $autor, $totPaginas, $leitor) {
				$this->setTitulo($titulo);
				$this->setAutor($autor);
				$this->setTotPaginas($totPaginas);
				$this->setPagAtual(0);
				$this->setAberto(false);
				$this->setLeitor($leitor);
			}

			public function getTitulo() { return ($this->titulo); }
			public function setTitulo($t) { $this->titulo = $t; }
			public function getAutor() { return ($this->autor); }
			public function setAutor($a) { $this->autor = $a; }
			public function getTotPaginas() { return ($this->totPaginas); }
			public function setTotPaginas($t) { $this->totPaginas = $t; }
			public function getPagAtual() { return ($this->pagAtual); }
			public function setPagAtual($p) { $this->pagAtual = $p; }
			public function getAberto() { return ($this->aberto); }
			public function setAberto($a) { $this->aberto = $a; }
			public function getLeitor() { return ($this->leitor); }
			public function setLeitor($l) { $this->leitor = $l; }

			public function detalhes() {
				echo "titulo: ", $this->getTitulo(), "<br/>";
				echo "autor: ", $this->getAutor(), "<br/>";
				echo "totPaginas: ", $this->getTotPaginas(), "<br/>";
				echo "pagAtual: ", $this->getPagAtual(), "<br/>";
				echo "aberto: ", ($this->getAberto() ? "true" : "false"), "<br/>";
				echo "leitor: ", $this->getLeitor()->getNome(), "<br/>";
			}

			public function abrir() {
				$this->setAberto(true);
			}
			public function fechar() {
				$this->setAberto(false);
			}
			public function folhear($p) {
				if ($p >= 0 && $p < $this->getTotPaginas()) {
					$this->setPagAtual($p);
				}
			}
			public function avancarPag() {
				if ($this->getPagAtual() < $this->getTotPaginas()) {
					$this->setPagAtual($this->getPagAtual() + 1);
				}
			}
			public function voltarPag() {
				if ($this->getPagAtual() > 0) {
					$this->setPagAtual($this->getPagAtual() - 1);
				}
			}
		};

		interface Publicacao {
			public function abrir();
			public function fechar();
			public function folhear($p);
			public function avancarPag();
			public function voltarPag();
		};
	?>

	<?php
		$p1 = new Pessoa("Pedro", 22, "M");
		$p2 = new Pessoa("Maria", 31, "F");
		$l1 = new Livro("PHP básico", "José da Silva", 300, $p1);
		$l2 = new Livro("POO em PHP", "Maria de Souza", 500, $p1);
		$l3 = new Livro("PHP avançado", "Ana Paula", 800, $p2);

		$l1->folhear(200);
		$l1->detalhes();
	?>
</body>
</html>