<?php
	
	class Bank {
		protected $valor;

		public function setValor($valor) {
			$this->valor = $valor;
		}

		protected function getValor() {
			return $this->valor;
		}

		public function saque() {
			return "Eu saquei ".$this->getValor()."<hr>";
		}

		protected function juros() {
			return 1.25;
		}
	}