<?php

	class Conexao {
		public static $conexao;
		public function conectar() {
			try {
				if(!isset(self::$conexao)) :
					self::$conexao = new pdo("mysql:host=localhost;dbname=faceduty", "root", "ezeksoft8080");
				endif;
			} catch(PDOExeption $e) {
				echo "Nao foi possivel conectar com o banco de dados ".$e->getMessage();
			}
			return self::$conexao;
		}
	}

	class Cliente extends Conexao {
		public function insert() {
			$pdo = $this->conectar();
			try {			
				$gravar = $pdo->prepare("INSERT INTO usuarios(nome, snome, email, senha) VALUES(:nome, :snome, :email, :senha)");
				$gravar->bindValue(":nome", "Ezequiel");
				$gravar->bindValue(":snome", "Moraes");
				$gravar->bindValue(":email", "ezekkkiel@outlook.com");
				$gravar->bindValue(":senha", "1020304050");
				$gravar->execute();
				if($gravar->rowCount() == 1) :
					return true;
				else:
					return false;
				endif;
			} catch(PDOExeption $e) {
				echo "Erro ao conectar com o DB".$e->getMessage();
			}
		}
	}

	$cli = new Cliente();
	
	if($cli->insert()):
		echo "Cadastrado!";
	else:
		echo "Erro";
	endif;








































	
/*
	class Conexao {
		public static $conexao;
		public function conecta() {
			try {
				if(!isset(self::$conexao)) :
					self::$conexao = new PDO("mysql:host=localhost;dbname=faceduty", "root", "ezeksoft8080");
				endif;
			} catch(PDOExeption $e) {
				echo "Erro ao conectar com o banco de dados ".$e->getMessage();
			}
			return self::$conexao;
		}
	}

	class Cliente extends Conexao {
		public function insert() {
			$this->conecta();
		}
	}

	$cliente = new Cliente();
	$cliente->insert();

*/