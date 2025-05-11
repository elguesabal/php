<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		interface AcoesVideo {
			public function play();
			public function pause();
			public function like();
		};

		class Video implements AcoesVideo {
			private $titulo;
			private $avaliacao;
			private $views;
			private $curtidas;
			private $reproduzindo;

			public function __construct($titulo) {
				$this->setTitulo($titulo);
				// $this->setAvaliacao(1);
				$this->avaliacao = 1;
				$this->setViews(0);
				$this->setCurtidas(0);
				$this->setReproduzindo(false);
			}

			public function getTitulo() { return ($this->titulo); }
			public function setTitulo($t) { $this->titulo = $t; }
			public function getAvaliacao() { return ($this->avaliacao); }
			public function setAvaliacao($a) {
				$media = ($this->getAvaliacao() + $a) / $this->getViews();
				$this->avaliacao = $media;
			}
			public function getViews() { return ($this->views); }
			public function setViews($v) { $this->views = $v; }
			public function getCurtidas() { return ($this->curtidas); }
			public function setCurtidas($c) { $this->curtidas = $c; }
			public function getReproduzindo() { return ($this->reproduzindo); }
			public function setReproduzindo($r) { $this->reproduzindo = $r; }

			public function play() {
				$this->setReproduzindo(true);
			}
			public function pause() {
				$this->setReproduzindo(false);
			}
			public function like() {
				$this->setCurtidas($this->getCurtidas() + 1);
			}
		};

		abstract class Pessoa {
			protected $nome;
			protected $idade;
			protected $sexo;
			protected $experiencia;

			public function __construct($nome, $idade, $sexo) {
				$this->setNome($nome);
				$this->setIdade($idade);
				$this->setSexo($sexo);
				$this->setExperiencia(0);
			}

			public function getNome() { return ($this->nome); }
			public function setNome($n) { $this->nome = $n; }
			public function getIdade() { return ($this->idade); }
			public function setIdade($i) { $this->idade = $i; }
			public function getSexo() { return ($this->sexo); }
			public function setSexo($s) { $this->sexo = $s; }
			public function getExperiencia() { return ($this->experiencia); }
			public function setExperiencia($e) { $this->experiencia = $e; }

			protected function ganharExp($n) {
				$this->setExperiencia($this->getExperiencia() + $n);
			}
		};

		class Gafanhoto extends Pessoa {
			private $login;
			private $totAssistido;

			public function __construct($nome, $idade, $sexo, $login) {
				// $this->setNome($nome);
				// $this->setIdade($idade);
				// $this->setSexo($sexo);
				// $this->setExperiencia(0);
				parent::__construct($nome, $idade, $sexo);
				$this->setLogin($login);
				$this->setTotAssistido(0);
			}

			public function getLogin() { return ($this->login); }
			public function setLogin($l) { $this->login = $l; }
			public function getTotAssistido() { return ($this->totAssistido); }
			public function setTotAssistido($t) { $this->totAssistido = $t; }

			public function viuMaisUm() {
				$this->setTotAssistido($this->getTotAssistido() + 1);
			}
		};

		class Visualizacao {
			private $espectador;
			private $filme;

			public function __construct($espectador, $filme) {
				$this->setEspectador($espectador);
				$this->setFilme($filme);
				$this->getFilme()->setViews($this->getFilme()->getViews() + 1);
				$this->getEspectador()->setTotAssistido($this->getEspectador()->getTotAssistido() + 1);
			}

			public function getEspectador() { return($this->espectador); }
			public function setEspectador($e) { $this->espectador = $e; }
			public function getFilme() { return($this->filme); }
			public function setFilme($f) { $this->filme = $f; }

			public function avaliar() {
				$this->getFilme()->setAvaliacao(5);
			}
			public function avaliarNota($nota) {
				$this->getFilme()->setAvaliacao($nota);
			}
			public function avaliarPorc($porc) {
				if ($porc <= 20) {
					$nota = 3;
				} else if ($porc <= 50) {
					$nota = 5;
				} else if ($porc <= 90) {
					$nota = 8;
				} else {
					$nota = 10;
				}
				$this->getFilme()->setAvaliacao($nota);
			}
		};
	?>

	<pre>
	<?php
		$c1 = new Video("Aula 1 de POO");
		$c2 = new Video("Aula 12 de POO");
		$c3 = new Video("Aula 15 de POO");
		$c4 = new Gafanhoto("Jubileu", 22, "M", "juba");
		$c5 = new Visualizacao($c4, $c1);

		print_r($c3);
		echo "<br/><br/>";
		print_r($c4);
		echo "<br/><br/>";
		print_r($c5);
	?>
	</pre>
</body>
</html>