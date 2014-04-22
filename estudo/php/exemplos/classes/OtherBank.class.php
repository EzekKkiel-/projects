<?php

	class OtherBank extends Bank {
		public function saque() {
			return "Eu saquei no outro banco: ".$this->getValor() * $this->juros();
		}
	}