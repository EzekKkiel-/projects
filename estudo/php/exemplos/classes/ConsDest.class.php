<?php

	class Pessoa {	

		public function exibe ($nome, $idade, $altura) {

			if ($nome <> "") {
				echo $nome. "<hr>";
			} else {
				echo "sem valor";
			}

			if ($idade <> "") {
				echo $idade. "<hr>";
			} else {
				echo "sem valor";
			}

			if ($altura <> "") {
				echo $altura. "<hr>";
			} else {
				echo "sem valor";
			}
		}

		public function __construct ($nome, $idade, $altura) {
			self::exibe($nome, $idade, $altura);
			echo "<font color=green>Os objetos foram construídos</font><hr>";
		}

		// NOTA: ESSE METODO EXECUTA POR ELE MESMO AO FINAL DA INSTRUCAO
		public function __destruct () {
			echo __CLASS__." <font color=red>Os objetos desta classe foram destruídos !</font><hr>";
		}

	}
