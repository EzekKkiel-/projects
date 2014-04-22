<?php
	
	class Dados {
		protected $nome;
		protected $idade;
		protected $profissao;
		protected $altura;
		protected $peso;
		protected $cidade = "Araguaína";

		public function setNome($nome) {
			$this->nome = $nome;
		}

		public function getNome() {
			return $this->nome;
		}

		public function setIdade($idade) {
			$this->idade = $idade;
		}

		public function getIdade() {
			return $this->idade;
		}

		public function setProfissao($profissao) {
			$this->profissao = $profissao;
		}

		public function getProfissao() {
			return $this->profissao;
		}

		public function setAltura($altura) {
			$this->altura = $altura;
		}

		public function getAltura() {
			return $this->altura;
		}

		public function setPeso($peso) {
			$this->peso = $peso;
		}

		public function getPeso() {
			return $this->peso;
		}

		public function setCidade($cidade) {
			$this->cidade = $cidade;
		}

		protected function getCidade() {
			return $this->cidade;
		}

	}