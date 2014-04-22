<?php

	class Nome {
		static $meunome;

		public static function exibeNome() {
			return self::$meunome;
		}


		/*
		static $meunome;
		private $nome;

		public static function getNomeEstatico() {
			return self::$meunome;
		}

		// nome privado
		public function setNome($nome) {
			$this->nome = $nome;
		}

		//nome privado
		public function getNome() {
			return $this->nome;
		}
		*/

	}