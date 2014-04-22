<?php

	class Conexao {

		public static $conexao;

		public function conectar() {

			try {

				if (!isset(self::$conexao)):
					self::$conexao = new pdo("mysql:host=localhost;dbname=faceduty", "root", "ezeksoft8080");
				endif;
			} catch(PDOExeption $e) {
				
				echo "Errro ao conectar ao banco ".$e->getMessage();
			}

			return self::$conexao;
		}
	}