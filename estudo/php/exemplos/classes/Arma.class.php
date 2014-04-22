<?php 
	
	class Arma {

		public $nome;
		public $maxBalas;
		public $peso;

		public function exibeNome () {

			echo $this->nome;
		}

		public function exibeMaxBalas () {

			echo $this->maxBalas;
		}

		public function exibePeso () {

			echo $this->peso;
		}
	}