<?php
	
	class Pessoa {
		public $nome;

		function setNome($nome) {
			$this->nome = $nome;
		}

		function getNome() {
			return $this->nome;
		}
	}

	$pessoa = new Pessoa();
	$pessoa->setNome("Ezequiel");	// setter - insere dado
	
	echo $pessoa->getNome(); // getter - pega dado que ja foi inserido
?>